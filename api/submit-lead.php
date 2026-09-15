<?php
/**
 * Lumetech Lead & Contact Submission Endpoint (Rate-Limited, Sanitized, Prepared Statements)
 */
header('Content-Type: application/json');

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// 1. IP Rate Limiting Check (Max 5 submissions per 10 minutes per IP)
$ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
$rate_key = 'rate_limit_' . md5($ip);
$current_time = time();

if (!isset($_SESSION[$rate_key])) {
    $_SESSION[$rate_key] = ['count' => 1, 'start_time' => $current_time];
} else {
    $elapsed = $current_time - $_SESSION[$rate_key]['start_time'];
    if ($elapsed < 600) { // 10 minutes window
        if ($_SESSION[$rate_key]['count'] >= 5) {
            http_response_code(429);
            echo json_encode(['success' => false, 'message' => 'Too many requests. Please wait a few minutes before submitting again.']);
            exit;
        }
        $_SESSION[$rate_key]['count']++;
    } else {
        $_SESSION[$rate_key] = ['count' => 1, 'start_time' => $current_time];
    }
}

// 2. CSRF Token Validation
$csrf_token = $_POST['csrf_token'] ?? '';
if (!validate_csrf_token($csrf_token)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Security token validation failed (CSRF). Please refresh and try again.']);
    exit;
}

// 3. Input Sanitization
$form_type = sanitize_string($_POST['form_type'] ?? 'contact');
$full_name = sanitize_string($_POST['full_name'] ?? '');
$email = sanitize_string($_POST['email'] ?? '');
$phone = sanitize_string($_POST['phone'] ?? '');
$company = sanitize_string($_POST['company'] ?? '');
$service = sanitize_string($_POST['service'] ?? '');
$budget = sanitize_string($_POST['budget'] ?? '');
$message = sanitize_string($_POST['message'] ?? '');

// 4. Input Validation Rules
if (empty($email)) {
    echo json_encode(['success' => false, 'message' => 'Email address is required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

if ($form_type === 'contact' && empty($full_name)) {
    echo json_encode(['success' => false, 'message' => 'Full Name is required.']);
    exit;
}

// 5. Database Insertion via PDO Prepared Statements
try {
    $db = Database::getInstance()->getConnection();
    if ($db) {
        $stmt = $db->prepare("INSERT INTO `leads` (`form_type`, `full_name`, `email`, `phone`, `company`, `service`, `budget`, `message`, `ip_address`, `status`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'new')");
        $stmt->execute([$form_type, $full_name, $email, $phone, $company, $service, $budget, $message, $ip, 'new']);
    }
} catch (Exception $e) {
    // Log error internally in production
}

// 6. JSON Success Output
echo json_encode([
    'success' => true,
    'message' => "Thank you" . (!empty($full_name) ? ", {$full_name}" : "") . "! Your request has been received by Lumetech Technologies. Our team will contact you shortly."
]);

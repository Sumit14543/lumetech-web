<?php
/**
 * Lumetech Core Utility Functions & Helpers
 */

require_once __DIR__ . '/config.php';

/**
 * Render reusable component partial with scoped data
 * 
 * @param string $component_name Filename prefix without 'component-' and '.php'
 * @param array $data Variables to pass to the view template
 */
function render_component(string $component_name, array $data = []): void {
    $file_path = __DIR__ . '/components/component-' . $component_name . '.php';
    if (file_exists($file_path)) {
        extract($data, EXTR_SKIP);
        include $file_path;
    } else {
        echo "<!-- Component [{$component_name}] not found at {$file_path} -->";
    }
}

/**
 * Sanitize string input
 */
function sanitize_string(?string $input): string {
    if ($input === null) return '';
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

/**
 * Generate CSRF hidden input field
 */
function csrf_field(): string {
    $token = $_SESSION['csrf_token'] ?? '';
    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($token, ENT_QUOTES, 'UTF-8') . '">';
}

/**
 * Validate CSRF token from POST requests
 */
function validate_csrf_token(?string $token): bool {
    if (empty($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Format currency for products
 */
function format_price(float $amount): string {
    return '$' . number_format($amount, 2);
}

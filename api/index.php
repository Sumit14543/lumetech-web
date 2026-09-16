<?php
/**
 * Lumetech Vercel Serverless Entrypoint & Router
 */

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($requestUri, PHP_URL_PATH);
$path = urldecode($path);
$path = ltrim($path, '/');

// 1. Root index route
if (empty($path) || $path === 'index' || $path === 'index.php') {
    require __DIR__ . '/../index.php';
    exit;
}

// 2. Direct file match in root directory
$target = __DIR__ . '/../' . $path;
if (file_exists($target) && is_file($target)) {
    require $target;
    exit;
}

// 3. Clean URL matching (e.g. /services -> services.php)
$phpTarget = __DIR__ . '/../' . $path . '.php';
if (file_exists($phpTarget) && is_file($phpTarget)) {
    require $phpTarget;
    exit;
}

// 4. Fallback 404
http_response_code(404);
if (file_exists(__DIR__ . '/../404.php')) {
    require __DIR__ . '/../404.php';
} else {
    echo "404 Not Found";
}

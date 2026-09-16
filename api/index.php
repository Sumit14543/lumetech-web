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

// 2. Serve static asset files if routed to PHP entrypoint
$ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
$staticExts = ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'woff', 'woff2', 'ttf', 'eot', 'webp', 'map', 'json', 'txt'];
if (in_array($ext, $staticExts)) {
    $staticFile = __DIR__ . '/../' . $path;
    if (file_exists($staticFile) && is_file($staticFile)) {
        $mimeTypes = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'ico' => 'image/x-icon',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'webp' => 'image/webp'
        ];
        if (isset($mimeTypes[$ext])) {
            header('Content-Type: ' . $mimeTypes[$ext]);
        }
        readfile($staticFile);
        exit;
    }
}

// 3. Direct PHP file match in root directory (e.g. services.php, contact.php)
if ($ext === 'php') {
    $target = __DIR__ . '/../' . $path;
    if (file_exists($target) && is_file($target)) {
        require $target;
        exit;
    }
}

// 4. Clean URL matching without extension (e.g. /services -> services.php)
$phpTarget = __DIR__ . '/../' . $path . '.php';
if (file_exists($phpTarget) && is_file($phpTarget)) {
    require $phpTarget;
    exit;
}

// 5. Fallback 404
http_response_code(404);
if (file_exists(__DIR__ . '/../404.php')) {
    require __DIR__ . '/../404.php';
} else {
    echo "404 Not Found";
}

<?php
/**
 * Lumetech Enterprise Web Application - Production Hardened Configuration
 */

// Environment & Debugging
define('APP_ENV', getenv('APP_ENV') ?: 'production'); // 'development' or 'production'
define('APP_NAME', 'Lumetech Technologies');
define('APP_TAGLINE', 'Enterprise Technology & B2B Solutions');
$is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') 
    || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)
    || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https');
$protocol = $is_https ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$default_site_url = ($host !== 'localhost' && !str_starts_with($host, 'localhost:')) ? $protocol . $host : 'http://localhost/web-lumetech';
define('SITE_URL', getenv('SITE_URL') ?: $default_site_url);

// Production Error Handling
if (APP_ENV === 'production') {
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
} else {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
}

// Contact Constants
define('CONTACT_PHONE', '9876543210');
define('CONTACT_PHONE_FORMATTED', '+91 98765 43210');
define('CONTACT_PHONE_ALT', '9876543211');
define('CONTACT_PHONE_ALT_FORMATTED', '+91 98765 43211');
define('CONTACT_EMAIL', 'hello@lumetech.info');
define('CONTACT_EMAIL_SUBTEXT', 'Send us your ideas. We typically respond within 24 hours.');
define('CONTACT_ADDRESS', 'Lumetech Technologies, Sector-44, Noida, Uttar Pradesh');
define('WHATSAPP_NUMBER', '919876543210');

// Database Credentials with Environment Fallbacks
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: 'lumetech_db');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_CHARSET', 'utf8mb4');

// Default Metadata
define('DEFAULT_META_TITLE', 'Lumetech Technologies | Enterprise Software & Cloud Solutions');
define('DEFAULT_META_DESC', 'Lumetech Technologies is an enterprise software development company based in Sector-44, Noida. We deliver high-performance cloud platforms, AI agents, mobile apps, and SaaS products.');

// Secure Session Initialization
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', '1');
    ini_set('session.use_only_cookies', '1');
    ini_set('session.cookie_samesite', 'Lax');
    session_start();
}

// CSRF Token Generation
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

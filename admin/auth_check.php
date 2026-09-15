<?php
/**
 * Lumetech Admin Authentication & RBAC Middleware
 */
require_once __DIR__ . '/../includes/config.php';

if (empty($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: " . SITE_URL . "/admin/login.php");
    exit;
}

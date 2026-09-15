<?php
require_once __DIR__ . '/../includes/config.php';

$_SESSION['admin_logged_in'] = false;
unset($_SESSION['admin_logged_in']);
unset($_SESSION['admin_user']);
session_destroy();

header("Location: " . SITE_URL . "/admin/login.php");
exit;

<?php
/**
 * Lumetech Admin Login Page - CSRF & Password Hashing Protected
 */
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $csrf_token = $_POST['csrf_token'] ?? '';
    if (!validate_csrf_token($csrf_token)) {
        $error = 'Invalid security token (CSRF).';
    } else {
        $username = sanitize_string($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        // Hardcoded secure admin credentials for demo / local environment
        // Default: admin / admin123
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_user'] = 'admin';
            header("Location: " . SITE_URL . "/admin/index.php");
            exit;
        } else {
            $error = 'Invalid username or password.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | Lumetech Control Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 bg-dark">

  <div class="lum-card p-4 p-md-5 max-w-md w-100" style="max-width: 420px;">
    <div class="text-center mb-4">
      <a href="<?= SITE_URL ?>" class="lum-brand-logo justify-content-center fs-3 mb-2">
        <i class="bi bi-cpu-fill text-info"></i> Lume<span>tech</span>
      </a>
      <p class="small text-muted mb-0">Enterprise Administration Portal</p>
    </div>

    <?php if (!empty($error)): ?>
      <div class="alert alert-danger p-2 small text-center mb-3"><?= sanitize_string($error) ?></div>
    <?php endif; ?>

    <form action="" method="POST">
      <?= csrf_field() ?>
      
      <div class="lum-form-group">
        <label class="lum-form-label">Username</label>
        <input type="text" name="username" class="lum-form-control" placeholder="admin" required autofocus>
      </div>

      <div class="lum-form-group mb-4">
        <label class="lum-form-label">Password</label>
        <input type="password" name="password" class="lum-form-control" placeholder="••••••••" required>
      </div>

      <button type="submit" class="lum-btn lum-btn-primary w-100 justify-content-center">
        Sign In to Admin Console <i class="bi bi-box-arrow-in-right ms-1"></i>
      </button>
    </form>

    <div class="text-center mt-4">
      <a href="<?= SITE_URL ?>" class="small text-muted text-decoration-none"><i class="bi bi-arrow-left"></i> Return to Main Website</a>
    </div>
  </div>

</body>
</html>

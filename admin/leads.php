<?php
require_once __DIR__ . '/auth_check.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';

$leads = [];
try {
    $db = Database::getInstance()->getConnection();
    if ($db) {
        $stmt = $db->query("SELECT * FROM `leads` ORDER BY `id` DESC LIMIT 50");
        $leads = $stmt->fetchAll();
    }
} catch (Exception $e) {
    $leads = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leads Management | Lumetech Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/style.css">
</head>
<body>

  <header class="lum-header">
    <div class="lum-container">
      <div class="lum-header__inner">
        <a href="<?= SITE_URL ?>/admin/index.php" class="lum-brand-logo">
          <i class="bi bi-cpu-fill text-info"></i> Lume<span>tech Admin</span>
        </a>
        <a href="<?= SITE_URL ?>/admin/logout.php" class="lum-btn lum-btn-outline lum-btn-sm">Logout</a>
      </div>
    </div>
  </header>

  <section class="lum-section">
    <div class="lum-container">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h1 class="lum-heading-2 mb-1">Lead Inquiries Registry</h1>
          <p class="small text-muted mb-0">Captured via website scoping forms and newsletter requests.</p>
        </div>
        <a href="<?= SITE_URL ?>/admin/index.php" class="lum-btn lum-btn-secondary lum-btn-sm">
          <i class="bi bi-arrow-left"></i> Dashboard
        </a>
      </div>

      <div class="lum-card p-0 overflow-hidden">
        <div class="table-responsive">
          <table class="table table-dark table-hover mb-0 align-middle">
            <thead>
              <tr class="table-active">
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Service</th>
                <th>Budget</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($leads)): ?>
                <?php foreach ($leads as $lead): ?>
                  <tr>
                    <td><?= $lead['id'] ?></td>
                    <td><strong><?= sanitize_string($lead['full_name']) ?></strong></td>
                    <td><a href="mailto:<?= sanitize_string($lead['email']) ?>" class="text-info"><?= sanitize_string($lead['email']) ?></a></td>
                    <td><?= sanitize_string($lead['phone'] ?? '-') ?></td>
                    <td><?= sanitize_string($lead['company'] ?? '-') ?></td>
                    <td><span class="badge bg-info text-dark"><?= sanitize_string($lead['service'] ?? 'General') ?></span></td>
                    <td><?= sanitize_string($lead['budget'] ?? '-') ?></td>
                    <td class="small text-muted"><?= sanitize_string($lead['created_at']) ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="8" class="text-center p-4 text-muted">
                    No leads recorded in database yet. Form submissions operate cleanly via AJAX API.
                  </td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

</body>
</html>

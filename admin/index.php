<?php
require_once __DIR__ . '/auth_check.php';
require_once __DIR__ . '/../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard | Lumetech Control Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/style.css">
</head>
<body>

  <!-- Admin Header -->
  <header class="lum-header">
    <div class="lum-container">
      <div class="lum-header__inner">
        <a href="<?= SITE_URL ?>/admin/index.php" class="lum-brand-logo">
          <i class="bi bi-cpu-fill text-info"></i> Lume<span>tech Admin</span>
        </a>
        <div class="d-flex align-items-center gap-3">
          <span class="small text-muted"><i class="bi bi-person-circle text-info me-1"></i> Logged in as <strong>admin</strong></span>
          <a href="<?= SITE_URL ?>/admin/logout.php" class="lum-btn lum-btn-outline lum-btn-sm">
            Logout <i class="bi bi-box-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </header>

  <section class="lum-section">
    <div class="lum-container">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h1 class="lum-heading-2 mb-1">Lumetech Administration Console</h1>
          <p class="small text-muted mb-0">Manage incoming lead inquiries, content registries, services, products, and location hubs.</p>
        </div>
        <a href="<?= SITE_URL ?>" target="_blank" class="lum-btn lum-btn-secondary lum-btn-sm">
          View Live Website <i class="bi bi-box-arrow-up-right ms-1"></i>
        </a>
      </div>

      <!-- Quick Metrics Grid -->
      <div class="row g-4 mb-5">
        <div class="col-md-3">
          <div class="lum-card p-4 text-center border-info border-opacity-25">
            <i class="bi bi-inbox text-info fs-1 d-block mb-2"></i>
            <strong class="h3 lum-heading-3 text-white d-block mb-0">12</strong>
            <span class="small text-muted">Total Leads Captured</span>
          </div>
        </div>

        <div class="col-md-3">
          <div class="lum-card p-4 text-center">
            <i class="bi bi-tools text-info fs-1 d-block mb-2"></i>
            <strong class="h3 lum-heading-3 text-white d-block mb-0">9</strong>
            <span class="small text-muted">Core Services</span>
          </div>
        </div>

        <div class="col-md-3">
          <div class="lum-card p-4 text-center">
            <i class="bi bi-box-seam text-info fs-1 d-block mb-2"></i>
            <strong class="h3 lum-heading-3 text-white d-block mb-0">11</strong>
            <span class="small text-muted">Turnkey B2B Products</span>
          </div>
        </div>

        <div class="col-md-3">
          <div class="lum-card p-4 text-center">
            <i class="bi bi-buildings text-info fs-1 d-block mb-2"></i>
            <strong class="h3 lum-heading-3 text-white d-block mb-0">10</strong>
            <span class="small text-muted">Industry Verticals</span>
          </div>
        </div>
      </div>

      <!-- Admin Navigation Modules -->
      <h3 class="lum-heading-4 mb-3">Management Modules</h3>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="lum-card p-4">
            <h4 class="lum-heading-5 mb-2"><i class="bi bi-envelope text-info me-2"></i> Lead Inquiries</h4>
            <p class="small text-muted mb-3">View and process leads submitted via the contact form and newsletter forms.</p>
            <a href="<?= SITE_URL ?>/admin/leads.php" class="lum-btn lum-btn-primary lum-btn-sm w-100 justify-content-center">Manage Leads</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="lum-card p-4">
            <h4 class="lum-heading-5 mb-2"><i class="bi bi-tools text-info me-2"></i> Engineering Services</h4>
            <p class="small text-muted mb-3">Update core service descriptions, tech badges, and SLA timelines.</p>
            <a href="<?= SITE_URL ?>/services.php" target="_blank" class="lum-btn lum-btn-secondary lum-btn-sm w-100 justify-content-center">View Services Registry</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="lum-card p-4">
            <h4 class="lum-heading-5 mb-2"><i class="bi bi-box-seam text-info me-2"></i> Software Products</h4>
            <p class="small text-muted mb-3">Manage product features, categories, and screenshot galleries.</p>
            <a href="<?= SITE_URL ?>/products.php" target="_blank" class="lum-btn lum-btn-secondary lum-btn-sm w-100 justify-content-center">View Product Catalog</a>
          </div>
        </div>
      </div>

    </div>
  </section>

</body>
</html>

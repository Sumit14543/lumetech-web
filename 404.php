<?php
$page_title = "Page Not Found (404) | Lumetech Enterprise";
$page_desc = "The page you requested could not be found. Explore our enterprise cloud, software, hardware, and location solutions.";
$current_page = "404";

require_once __DIR__ . '/includes/header.php';
?>

<section class="lum-section lum-404-container">
  <div class="lum-container">
    
    <!-- Breadcrumbs -->
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        '404 Error' => ''
      ]
    ]); ?>

    <div class="row align-items-center justify-content-center text-center g-4 my-5">
      <div class="col-lg-8">
        <div class="lum-404-code mb-2">404</div>
        <h1 class="lum-heading-2 mb-3">Resource Not Found</h1>
        <p class="lum-lead max-w-xl mx-auto mb-4">
          The requested URL was not found on this server. It may have been moved, renamed, or is temporarily unavailable.
        </p>

        <!-- Search Bar -->
        <div class="max-w-md mx-auto mb-5">
          <form action="<?= SITE_URL ?>/search.php" method="GET" class="d-flex gap-2">
            <input type="text" name="q" class="lum-form-control" placeholder="Search Lumetech services, products, or documentation..." required aria-label="Search site">
            <button type="submit" class="lum-btn lum-btn-primary">
              <i class="bi bi-search"></i>
            </button>
          </form>
        </div>

        <!-- Popular Helpful Links -->
        <div class="lum-card text-start p-4 mb-5">
          <h4 class="lum-heading-5 mb-3 text-white"><i class="bi bi-compass text-info me-2"></i> Popular Enterprise Destinations</h4>
          <div class="row g-3">
            <div class="col-md-6 col-lg-3">
              <a href="<?= SITE_URL ?>/services.php" class="d-block p-3 rounded bg-dark text-decoration-none hover-cyan border border-secondary border-opacity-25">
                <i class="bi bi-cloud-check text-info fs-4 d-block mb-1"></i>
                <strong class="d-block text-white">Services</strong>
                <span class="small text-muted">Cloud, Security & AI</span>
              </a>
            </div>
            <div class="col-md-6 col-lg-3">
              <a href="<?= SITE_URL ?>/products.php" class="d-block p-3 rounded bg-dark text-decoration-none hover-cyan border border-secondary border-opacity-25">
                <i class="bi bi-hdd-rack text-info fs-4 d-block mb-1"></i>
                <strong class="d-block text-white">Products</strong>
                <span class="small text-muted">Enterprise Servers & Hardware</span>
              </a>
            </div>
            <div class="col-md-6 col-lg-3">
              <a href="<?= SITE_URL ?>/portfolio.php" class="d-block p-3 rounded bg-dark text-decoration-none hover-cyan border border-secondary border-opacity-25">
                <i class="bi bi-briefcase text-info fs-4 d-block mb-1"></i>
                <strong class="d-block text-white">Portfolio</strong>
                <span class="small text-muted">Case Studies & Metrics</span>
              </a>
            </div>
            <div class="col-md-6 col-lg-3">
              <a href="<?= SITE_URL ?>/contact.php" class="d-block p-3 rounded bg-dark text-decoration-none hover-cyan border border-secondary border-opacity-25">
                <i class="bi bi-headset text-info fs-4 d-block mb-1"></i>
                <strong class="d-block text-white">Support</strong>
                <span class="small text-muted">Get Enterprise Help</span>
              </a>
            </div>
          </div>
        </div>

        <?php render_component('button', [
          'label' => 'Return to Homepage',
          'href' => SITE_URL,
          'variant' => 'primary',
          'size' => 'lg',
          'icon' => 'bi-house-door-fill'
        ]); ?>

      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

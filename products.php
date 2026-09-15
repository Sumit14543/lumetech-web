<?php
/**
 * Lumetech Products Catalog Hub
 */
$page_title = "Turnkey B2B Software Products & Platforms | Lumetech";
$page_desc = "Discover Lumetech's 11 enterprise B2B software products spanning Quick Commerce, Fintech CRM, Manufacturing ERP, HIS, Transport Telemetry, and POS.";
$current_page = "products";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/data/products.php';

$products = get_products_data();

// Categories extraction
$categories = array_unique(array_column($products, 'category'));
?>

<!-- 1. Hero -->
<section class="lum-section pt-5 pb-5">
  <div class="lum-container">
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        'Products' => ''
      ]
    ]); ?>

    <div class="row align-items-center g-5 py-4">
      <div class="col-lg-8">
        <h1 class="lum-heading-1 mb-3">Enterprise SaaS & Industrial Software Products</h1>
        <p class="lum-lead mb-4">
          Pre-built, highly configurable enterprise software platforms engineered to accelerate time-to-market and streamline business operations.
        </p>
        <?php render_component('button', [
          'label' => 'Request Product Demo',
          'href' => SITE_URL . '/contact.php',
          'variant' => 'primary',
          'size' => 'lg',
          'icon' => 'bi-play-circle-fill'
        ]); ?>
      </div>
    </div>
  </div>
</section>

<!-- 2. Product Catalog Filter & Grid -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    
    <!-- Category Filter Bar -->
    <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 mb-5">
      <button class="lum-btn lum-btn-primary lum-btn-sm" data-filter="all">All 11 Products</button>
      <?php foreach ($categories as $cat): ?>
        <button class="lum-btn lum-btn-secondary lum-btn-sm" data-filter="<?= sanitize_string(strtolower(str_replace(' ', '-', $cat))) ?>"><?= sanitize_string($cat) ?></button>
      <?php endforeach; ?>
    </div>

    <!-- Product Cards Grid -->
    <div class="lum-grid lum-grid-3">
      <?php foreach ($products as $prd): ?>
        <div class="lum-card d-flex flex-column justify-content-between">
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <span class="badge bg-secondary bg-opacity-50 text-info border border-info border-opacity-25"><?= sanitize_string($prd['category']) ?></span>
              <span class="small text-muted"><i class="bi bi-patch-check-fill text-info me-1"></i> <?= sanitize_string($prd['badge']) ?></span>
            </div>
            <h3 class="lum-heading-4 mb-2"><?= sanitize_string($prd['name']) ?></h3>
            <p class="small text-muted mb-4"><?= sanitize_string($prd['short_desc']) ?></p>
            
            <div class="mb-4">
              <span class="small text-secondary fw-semibold d-block mb-2">Key Highlights:</span>
              <ul class="list-unstyled space-y-1 small text-muted">
                <?php foreach (array_slice($prd['features'], 0, 2) as $feat): ?>
                  <li><i class="bi bi-check2 text-info me-1"></i> <?= sanitize_string($feat['title']) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <div>
            <a href="<?= SITE_URL ?>/product-detail.php?slug=<?= $prd['slug'] ?>" class="lum-btn lum-btn-primary lum-btn-sm w-100 justify-content-center">
              Explore <?= sanitize_string($prd['name']) ?> <i class="bi bi-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3. Enterprise Integration & Ecosystem -->
<section class="lum-section">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Seamless Interoperability',
      'title' => 'Pre-Built Integrations & APIs',
      'description' => 'All Lumetech products include RESTful APIs, webhooks, and pre-engineered connectors for global enterprise software.',
      'center' => true
    ]); ?>

    <div class="row g-4 text-center">
      <div class="col-6 col-md-3">
        <div class="p-4 rounded bg-dark border border-secondary border-opacity-25">
          <i class="bi bi-shield-check text-info fs-1 d-block mb-2"></i>
          <h5 class="lum-heading-6 mb-1">PayOS Integration</h5>
          <span class="small text-muted">Sub-second payments</span>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-4 rounded bg-dark border border-secondary border-opacity-25">
          <i class="bi bi-chat-dots text-info fs-1 d-block mb-2"></i>
          <h5 class="lum-heading-6 mb-1">WhatsApp Cloud API</h5>
          <span class="small text-muted">Automated client alerts</span>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-4 rounded bg-dark border border-secondary border-opacity-25">
          <i class="bi bi-diagram-3 text-info fs-1 d-block mb-2"></i>
          <h5 class="lum-heading-6 mb-1">SAP & Oracle ERP</h5>
          <span class="small text-muted">Bi-directional data sync</span>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-4 rounded bg-dark border border-secondary border-opacity-25">
          <i class="bi bi-geo-alt text-info fs-1 d-block mb-2"></i>
          <h5 class="lum-heading-6 mb-1">Google Maps Telemetry</h5>
          <span class="small text-muted">Live rider & fleet GPS</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. CTA -->
<div class="lum-container">
  <?php render_component('cta', [
    'title' => 'Looking for a Custom Product Deployment?',
    'description' => 'Our product specialists can configure a white-label or custom deployment for your enterprise.',
    'btn_text' => 'Schedule a Live Product Demo'
  ]); ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

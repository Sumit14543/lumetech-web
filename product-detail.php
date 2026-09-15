<?php
/**
 * Lumetech Dynamic Reusable Product Detail Template
 */
require_once __DIR__ . '/includes/data/products.php';

$all_products = get_products_data();
$slug = $_GET['slug'] ?? 'quick-commerce';

// Fallback if product slug invalid
if (!isset($all_products[$slug])) {
    $slug = 'quick-commerce';
}

$product = $all_products[$slug];

$page_title = $product['name'] . " | " . $product['category'] . " Software by Lumetech";
$page_desc = $product['short_desc'];
$current_page = "products";

require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. Hero -->
<section class="lum-section pt-5 pb-5 position-relative overflow-hidden">
  <div class="position-absolute top-0 start-50 translate-middle-x w-100 h-100 pointer-events-none z-0" style="background: radial-gradient(circle at 50% 20%, rgba(0, 240, 255, 0.12) 0%, rgba(11, 19, 43, 0) 65%);"></div>

  <div class="lum-container position-relative z-1">
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        'Products' => SITE_URL . '/products.php',
        $product['name'] => ''
      ]
    ]); ?>

    <div class="row align-items-center g-5 py-4">
      <div class="col-lg-7">
        <div class="d-flex align-items-center gap-2 mb-3">
          <span class="badge bg-info text-dark font-mono"><?= sanitize_string($product['category']) ?></span>
        </div>

        <h1 class="lum-heading-1 mb-3"><?= sanitize_string($product['name']) ?></h1>
        <p class="lum-lead mb-4"><?= sanitize_string($product['tagline']) ?></p>

        <div class="d-flex flex-wrap gap-3 mb-4">
          <?php render_component('button', [
            'label' => 'Request Live Demo of ' . $product['name'],
            'href' => SITE_URL . '/contact.php?product=' . urlencode($product['slug']),
            'variant' => 'primary',
            'size' => 'lg',
            'icon' => 'bi-play-circle-fill'
          ]); ?>
          <?php render_component('button', [
            'label' => 'Download Product Datasheet',
            'href' => '#features',
            'variant' => 'outline',
            'size' => 'lg',
            'icon' => 'bi-download'
          ]); ?>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="lum-card p-4 text-center border-info border-opacity-25">
          <i class="bi bi-box-seam text-info fs-1 d-block mb-3"></i>
          <h4 class="lum-heading-5 mb-2"><?= sanitize_string($product['name']) ?> Core Engine</h4>
          <p class="small text-muted mb-4"><?= sanitize_string($product['short_desc']) ?></p>
          <div class="p-3 rounded bg-dark border border-secondary border-opacity-25">
            <span class="small text-muted d-block mb-1">Deployment Options</span>
            <strong class="text-info">Cloud SaaS, On-Premise & White-Label</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2. Overview & Key Benefits -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25" id="overview">
  <div class="lum-container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h2 class="lum-heading-2 mb-3">Built for High Throughput & Enterprise Scalability</h2>
        <p class="lum-lead mb-4"><?= sanitize_string($product['full_desc']) ?></p>
        
        <h5 class="lum-heading-6 mb-3 text-white">Quantifiable Business Impact:</h5>
        <div class="row g-3">
          <?php foreach ($product['benefits'] as $benefit): ?>
            <div class="col-sm-6">
              <div class="d-flex align-items-center gap-2 p-3 rounded bg-dark border border-secondary border-opacity-25">
                <i class="bi bi-check-circle-fill text-info fs-5"></i>
                <span class="small text-white fw-semibold"><?= sanitize_string($benefit) ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="lum-card p-4">
          <h4 class="lum-heading-5 mb-3"><i class="bi bi-building text-info me-2"></i> Target Verticals & Industries</h4>
          <div class="d-flex flex-wrap gap-2 mb-4">
            <?php foreach ($product['industries'] as $ind): ?>
              <span class="badge bg-secondary bg-opacity-50 text-info border border-info border-opacity-25 px-3 py-2 fs-6"><?= sanitize_string($ind) ?></span>
            <?php endforeach; ?>
          </div>

          <h4 class="lum-heading-5 mb-3"><i class="bi bi-lightning text-info me-2"></i> Primary Use Cases</h4>
          <ul class="list-unstyled space-y-2 text-secondary small mb-0">
            <?php foreach ($product['use_cases'] as $uc): ?>
              <li><i class="bi bi-arrow-right-short text-info me-1 fs-5"></i> <?= sanitize_string($uc) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>

    <?php if (!empty($product['case_study'])): ?>
      <div class="mt-5 p-4 rounded bg-dark border border-secondary border-opacity-25">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="badge bg-primary text-white">Client Case Study</span>
          <strong class="text-white"><?= sanitize_string($product['case_study']['client']) ?></strong>
        </div>
        <p class="small text-secondary mb-0"><?= sanitize_string($product['case_study']['desc']) ?></p>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- 3. Key Product Features Grid -->
<section class="lum-section" id="features">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Engine Architecture',
      'title' => 'Core Capabilities of ' . $product['name'],
      'description' => 'Advanced software features engineered to automate complex enterprise operations.',
      'center' => true
    ]); ?>

    <div class="lum-grid lum-grid-2">
      <?php foreach ($product['features'] as $idx => $feat): ?>
        <div class="lum-card">
          <div class="d-flex align-items-start gap-3">
            <div class="lum-card__icon mb-0 flex-shrink-0"><i class="bi bi-cpu"></i></div>
            <div>
              <h4 class="lum-heading-5 mb-2"><?= sanitize_string($feat['title']) ?></h4>
              <p class="small text-muted mb-0"><?= sanitize_string($feat['desc']) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 4. Screenshots Gallery (GLightbox Enabled) -->
<?php if (!empty($product['screenshots'])): ?>
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Visual Interface',
      'title' => 'Product Gallery & Screen Previews',
      'description' => 'Click any screenshot to open the high-resolution lightbox view.',
      'center' => true
    ]); ?>

    <div class="row g-4 justify-content-center">
      <?php foreach ($product['screenshots'] as $idx => $img): ?>
        <div class="col-md-6 col-lg-4">
          <a href="<?= sanitize_string($img) ?>" class="glightbox d-block lum-card p-2 text-decoration-none overflow-hidden" data-gallery="product-gallery">
            <img src="<?= sanitize_string($img) ?>" alt="<?= sanitize_string($product['name']) ?> Screenshot <?= $idx + 1 ?>" class="img-fluid rounded border border-secondary border-opacity-25 mb-2" style="max-height: 220px; width: 100%; object-fit: cover;">
            <div class="p-2 text-center">
              <span class="small text-info fw-semibold"><i class="bi bi-aspect-ratio me-1"></i> Expand Screenshot</span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 5. Pre-Built Integrations -->
<section class="lum-section">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Ecosystem Sync',
      'title' => 'Pre-Integrated Connectors',
      'description' => 'Seamlessly hooks into your existing enterprise software stack.',
      'center' => true
    ]); ?>

    <div class="d-flex flex-wrap justify-content-center gap-3">
      <?php foreach ($product['integrations'] as $integ): ?>
        <div class="p-3 px-4 rounded bg-dark border border-secondary border-opacity-25 text-white fw-semibold">
          <i class="bi bi-plug text-info me-2"></i> <?= sanitize_string($integ) ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6. Product FAQ Accordion -->
<?php if (!empty($product['faq'])): ?>
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Product FAQ',
      'title' => 'Questions About ' . $product['name'],
      'description' => 'Common technical and deployment queries answered.',
      'center' => true
    ]); ?>

    <div class="max-w-3xl mx-auto">
      <div class="accordion lum-accordion" id="productFaq">
        <?php foreach ($product['faq'] as $f_idx => $faq_item): ?>
          <div class="accordion-item bg-dark border border-secondary border-opacity-25 mb-3 rounded overflow-hidden">
            <h2 class="accordion-header">
              <button class="accordion-button <?= $f_idx > 0 ? 'collapsed' : '' ?> bg-dark text-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#pfaq<?= $f_idx ?>">
                <?= sanitize_string($faq_item['q']) ?>
              </button>
            </h2>
            <div id="pfaq<?= $f_idx ?>" class="accordion-collapse collapse <?= $f_idx === 0 ? 'show' : '' ?>" data-bs-parent="#productFaq">
              <div class="accordion-body text-secondary small">
                <?= sanitize_string($faq_item['a']) ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 7. CTA -->
<div class="lum-container">
  <?php render_component('cta', [
    'title' => 'Ready to Deploy ' . $product['name'] . '?',
    'description' => 'Get a personalized demo and custom deployment quotation from our product team.',
    'btn_text' => 'Request Product Quotation'
  ]); ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
/**
 * Lumetech Dynamic Reusable Case Study Detail Template
 */
require_once __DIR__ . '/includes/data/portfolio.php';

$all_studies = get_portfolio_data();
$slug = $_GET['slug'] ?? 'fintech-credit-hub';

if (!isset($all_studies[$slug])) {
    $slug = 'fintech-credit-hub';
}

$cs = $all_studies[$slug];

$page_title = $cs['title'] . " | Lumetech Case Study";
$page_desc = $cs['short_desc'];
$current_page = "portfolio";

require_once __DIR__ . '/includes/header.php';
?>

<section class="lum-section pt-5 pb-5 position-relative overflow-hidden">
  <div class="lum-container">
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        'Case Studies' => SITE_URL . '/portfolio.php',
        $cs['client'] => ''
      ]
    ]); ?>

    <div class="row align-items-center g-5 py-4">
      <div class="col-lg-8">
        <div class="d-flex align-items-center gap-2 mb-3">
          <span class="badge bg-info text-dark font-mono"><?= sanitize_string($cs['category']) ?></span>
        </div>

        <h1 class="lum-heading-1 mb-3"><?= sanitize_string($cs['title']) ?></h1>
        <p class="lum-lead mb-4"><?= sanitize_string($cs['short_desc']) ?></p>

        <!-- Tech Tags Badges -->
        <div class="d-flex flex-wrap gap-2 mb-4">
          <?php foreach ($cs['tech_tags'] as $tag): ?>
            <span class="badge bg-dark border border-secondary border-opacity-25 text-info px-3 py-2"><?= sanitize_string($tag) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Results Metrics Grid Section -->
<section class="py-5 bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <div class="row g-4 text-center">
      <?php foreach ($cs['results'] as $res): ?>
        <div class="col-6 col-md-3">
          <div class="p-3 rounded bg-dark border border-secondary border-opacity-25 h-100">
            <strong class="h2 lum-heading-2 mb-1 text-info d-block"><?= sanitize_string($res['value']) ?></strong>
            <span class="small text-muted"><?= sanitize_string($res['label']) ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Challenge & Solution Breakdown -->
<section class="lum-section">
  <div class="lum-container">
    <div class="row g-5">
      <div class="col-lg-6">
        <div class="lum-card p-4 h-100 border-danger border-opacity-25">
          <div class="d-flex align-items-center gap-2 mb-3 text-danger">
            <i class="bi bi-exclamation-octagon-fill fs-3"></i>
            <h3 class="lum-heading-4 mb-0 text-white">The Challenge</h3>
          </div>
          <p class="lum-lead mb-0 text-secondary"><?= sanitize_string($cs['challenge']) ?></p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="lum-card p-4 h-100 border-success border-opacity-25">
          <div class="d-flex align-items-center gap-2 mb-3 text-success">
            <i class="bi bi-check-circle-fill fs-3"></i>
            <h3 class="lum-heading-4 mb-0 text-white">The Lumetech Solution</h3>
          </div>
          <p class="lum-lead mb-0 text-secondary"><?= sanitize_string($cs['solution']) ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Screenshot Lightbox Gallery -->
<?php if (!empty($cs['screenshots'])): ?>
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Visual Proof',
      'title' => 'Project Interface & Screenshots',
      'description' => 'Click to open full-screen high-resolution lightbox view.',
      'center' => true
    ]); ?>

    <div class="row g-4 justify-content-center">
      <?php foreach ($cs['screenshots'] as $idx => $img): ?>
        <div class="col-md-6 col-lg-4">
          <a href="<?= sanitize_string($img) ?>" class="glightbox d-block lum-card p-2 text-decoration-none" data-gallery="cs-gallery">
            <img src="<?= sanitize_string($img) ?>" alt="<?= sanitize_string($cs['client']) ?> Screenshot <?= $idx + 1 ?>" class="img-fluid rounded border border-secondary border-opacity-25 mb-2" style="max-height: 220px; width: 100%; object-fit: cover;">
            <div class="text-center p-2">
              <span class="small text-info"><i class="bi bi-aspect-ratio me-1"></i> Expand Screenshot</span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- CTA -->
<div class="lum-container">
  <?php render_component('cta', [
    'title' => 'Want similar operational scale for your business?',
    'description' => 'Schedule a case study briefing with our enterprise delivery leads.',
    'btn_text' => 'Request Case Study Scoping'
  ]); ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

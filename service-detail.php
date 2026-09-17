<?php
/**
 * Lumetech Dynamic Service Detail Template - Phase 4
 */
require_once __DIR__ . '/includes/data/services.php';

$all_services = get_services_data();
$slug = $_GET['slug'] ?? 'web-development';

// Fallback if slug not found
if (!isset($all_services[$slug])) {
    $slug = 'web-development';
}

$service = $all_services[$slug];

$page_title = $service['title'] . " Services | Lumetech Enterprise Solutions";
$page_desc = $service['short_desc'];
$current_page = "services";

require_once __DIR__ . '/includes/header.php';
?>

<section class="lum-section pt-5 pb-5">
  <div class="lum-container">
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        'Services' => SITE_URL . '/services.php',
        $service['title'] => ''
      ]
    ]); ?>

    <!-- Service Hero -->
    <div class="row align-items-center g-5 py-4">
      <div class="col-lg-8" data-aos="fade-right">
        <h1 class="lum-heading-1 mb-3"><?= sanitize_string($service['title']) ?></h1>
        <p class="lum-lead mb-4"><?= sanitize_string($service['full_desc']) ?></p>
        
        <div class="d-flex flex-wrap gap-3">
          <?php render_component('button', [
            'label' => 'Request Proposal for ' . $service['title'],
            'href' => SITE_URL . '/contact.php?service=' . urlencode($service['slug']),
            'variant' => 'primary',
            'size' => 'lg',
            'icon' => 'bi-send-fill'
          ]); ?>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-left">
        <div class="lum-card p-4">
          <h4 class="lum-heading-5 mb-3"><i class="bi bi-stack text-info me-2"></i> Tech Stack Integration</h4>
          <div class="d-flex flex-wrap gap-2 mb-4">
            <?php foreach ($service['technologies'] as $tech): ?>
              <span class="badge bg-dark border border-secondary border-opacity-25 text-white px-3 py-2"><?= sanitize_string($tech) ?></span>
            <?php endforeach; ?>
          </div>
          <div class="p-3 rounded bg-dark border border-secondary border-opacity-25 text-center">
            <span class="small text-muted d-block mb-1">Standard Delivery Timeline</span>
            <strong class="text-info fs-5">4 to 8 Weeks SLA</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Key Service Deliverables / Features -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Capability Matrix',
      'title' => 'What We Deliver in ' . $service['title'],
      'description' => 'Comprehensive enterprise capabilities engineered into every engagement.',
      'center' => true
    ]); ?>

    <div class="row g-4">
      <?php foreach ($service['features'] as $idx => $feat): ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $idx * 100 ?>">
          <div class="p-4 rounded-3 bg-dark border border-secondary border-opacity-25 h-100">
            <div class="d-flex align-items-center gap-3 mb-2">
              <i class="bi bi-check-circle-fill text-info fs-4"></i>
              <h4 class="lum-heading-6 mb-0"><?= sanitize_string($feat) ?></h4>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Related Services Switcher -->
<section class="lum-section">
  <div class="lum-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3 class="lum-heading-3 mb-0">Explore Other Engineering Services</h3>
      <a href="<?= SITE_URL ?>/services.php" class="lum-btn lum-btn-outline lum-btn-sm d-none d-md-inline-flex">View All Services</a>
    </div>

    <div class="lum-grid lum-grid-3">
      <?php 
      $other_services = array_filter($all_services, function($s) use ($slug) {
          return $s['slug'] !== $slug;
      });
      $random_others = array_slice($other_services, 0, 3, true);
      foreach ($random_others as $other): 
      ?>
        <div class="lum-card d-flex flex-column justify-content-between">
          <div>
            <div class="lum-card__icon"><i class="bi <?= $other['icon'] ?>"></i></div>
            <h4 class="lum-heading-5 mb-2"><?= sanitize_string($other['title']) ?></h4>
            <p class="small text-muted mb-4"><?= sanitize_string($other['short_desc']) ?></p>
          </div>
          <a href="<?= SITE_URL ?>/service-detail.php?slug=<?= $other['slug'] ?>" class="lum-btn lum-btn-outline lum-btn-sm">
            View Details <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Mobile-Only Bottom CTA Button -->
    <div class="text-center mt-4 d-md-none">
      <a href="<?= SITE_URL ?>/services.php" class="lum-btn lum-btn-outline lum-btn-sm w-100 justify-content-center">
        View All Services <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>
  </div>
</section>

<!-- CTA -->
<div class="lum-container">
  <?php render_component('cta', [
    'title' => 'Ready to Start Your ' . $service['title'] . ' Project?',
    'description' => 'Schedule a technical scoping call with Lumetech enterprise architects.',
    'btn_text' => 'Get Started'
  ]); ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

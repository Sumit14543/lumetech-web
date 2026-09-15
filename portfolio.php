<?php
/**
 * Lumetech Portfolio & Case Studies Listing
 */
$page_title = "Client Success Stories & Enterprise Case Studies | Lumetech";
$page_desc = "Explore real-world case studies demonstrating how Lumetech software architectures drive measurable operational ROI for enterprise clients.";
$current_page = "portfolio";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/data/portfolio.php';

$case_studies = get_portfolio_data();
$categories = array_unique(array_column($case_studies, 'category'));
?>

<!-- 1. Hero -->
<section class="lum-section pt-5 pb-5">
  <div class="lum-container">
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        'Case Studies' => ''
      ]
    ]); ?>

    <div class="row align-items-center g-5 py-4">
      <div class="col-lg-8">
        <h1 class="lum-heading-1 mb-3">Client Success Stories & Case Studies</h1>
        <p class="lum-lead mb-4">
          Discover how leading enterprises rely on Lumetech cloud platforms, custom software, and specialized SaaS engines to achieve high performance.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- 2. Portfolio Filter & Listing -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    
    <!-- Client-Side Vanilla JS Category Filter -->
    <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 mb-5">
      <button class="lum-btn lum-btn-primary lum-btn-sm lum-portfolio-filter active" data-filter="all">All Case Studies</button>
      <?php foreach ($categories as $cat): ?>
        <button class="lum-btn lum-btn-secondary lum-btn-sm lum-portfolio-filter" data-filter="<?= sanitize_string(strtolower(str_replace(' ', '-', $cat))) ?>"><?= sanitize_string($cat) ?></button>
      <?php endforeach; ?>
    </div>

    <!-- Case Studies Cards Grid -->
    <div class="lum-grid lum-grid-2" id="portfolio-grid">
      <?php foreach ($case_studies as $cs): ?>
        <div class="lum-card d-flex flex-column justify-content-between lum-portfolio-item" data-category="<?= sanitize_string(strtolower(str_replace(' ', '-', $cs['category']))) ?>">
          <div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <span class="badge bg-info text-dark font-mono"><?= sanitize_string($cs['category']) ?></span>
              <span class="small text-muted"><i class="bi bi-building me-1"></i> <?= sanitize_string($cs['client']) ?></span>
            </div>
            <h3 class="lum-heading-4 mb-3"><?= sanitize_string($cs['title']) ?></h3>
            <p class="small text-muted mb-4"><?= sanitize_string($cs['short_desc']) ?></p>

            <!-- Tech Tags -->
            <div class="d-flex flex-wrap gap-1 mb-4">
              <?php foreach ($cs['tech_tags'] as $tag): ?>
                <span class="badge bg-dark border border-secondary border-opacity-25 text-secondary small"><?= sanitize_string($tag) ?></span>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Highlight Results Grid -->
          <div class="pt-3 border-top border-secondary border-opacity-25 mt-auto">
            <div class="row g-2 mb-3 text-center">
              <?php foreach (array_slice($cs['results'], 0, 2) as $res): ?>
                <div class="col-6">
                  <strong class="text-info fs-5 d-block mb-0"><?= sanitize_string($res['value']) ?></strong>
                  <span class="small text-muted" style="font-size: 0.75rem;"><?= sanitize_string($res['label']) ?></span>
                </div>
              <?php endforeach; ?>
            </div>
            <a href="<?= SITE_URL ?>/case-study-detail.php?slug=<?= $cs['slug'] ?>" class="lum-btn lum-btn-primary lum-btn-sm w-100 justify-content-center">
              Read Full Case Study <i class="bi bi-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- Client-Side Vanilla JS Filter Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const filterBtns = document.querySelectorAll('.lum-portfolio-filter');
  const items = document.querySelectorAll('.lum-portfolio-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => {
        b.classList.remove('lum-btn-primary', 'active');
        b.classList.add('lum-btn-secondary');
      });
      btn.classList.remove('lum-btn-secondary');
      btn.classList.add('lum-btn-primary', 'active');

      const filter = btn.getAttribute('data-filter');

      items.forEach(item => {
        if (filter === 'all' || item.getAttribute('data-category') === filter) {
          item.style.display = 'flex';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
});
</script>

<!-- CTA -->
<div class="lum-container">
  <?php render_component('cta', [
    'title' => 'Ready to Achieve Similar Results for Your Business?',
    'description' => 'Connect with Lumetech enterprise architects to evaluate your project goals.',
    'btn_text' => 'Discuss Your Case Study Scoping'
  ]); ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

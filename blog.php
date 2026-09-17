<?php
/**
 * Lumetech Blog Hub & Research Index
 */
$page_title = "Enterprise Tech Blog & Research Insights | Lumetech";
$page_desc = "Read Lumetech's latest technical articles, cloud architecture guides, cybersecurity whitepapers, and AI agent frameworks.";
$current_page = "blog";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/data/blog.php';

$articles = get_blog_data();
$featured = reset($articles);
?>

<!-- 1. Hero -->
<section class="lum-section pt-5 pb-5">
  <div class="lum-container">
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        'Blog & Insights' => ''
      ]
    ]); ?>

    <div class="row align-items-center g-5 py-4">
      <div class="col-lg-8">
        <h1 class="lum-heading-1 mb-3">Enterprise Insights & Architecture Whitepapers</h1>
        <p class="lum-lead mb-4">
          Deep dives into cloud microservices, vector AI agent pipelines, payment gateway compliance, and high-load database optimization.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- 2. Featured Article Card -->
<?php if ($featured): ?>
<section class="lum-section pt-0 pb-5">
  <div class="lum-container">
    <div class="lum-card p-4 p-lg-5 border-info border-opacity-25">
      <div class="row align-items-center g-4">
        <div class="col-lg-7">
          <h2 class="lum-heading-2 mb-3">
            <a href="<?= SITE_URL ?>/blog-detail.php?slug=<?= $featured['slug'] ?>" class="text-white text-decoration-none hover-cyan">
              <?= sanitize_string($featured['title']) ?>
            </a>
          </h2>
          <p class="lum-lead small mb-4 text-secondary"><?= sanitize_string($featured['excerpt']) ?></p>

          <div class="d-flex align-items-center gap-3">
            <div>
              <strong class="d-block text-white small"><?= sanitize_string($featured['author']) ?></strong>
              <span class="small text-muted"><?= sanitize_string($featured['role']) ?> • <?= sanitize_string($featured['date']) ?> (<?= sanitize_string($featured['read_time']) ?>)</span>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <a href="<?= SITE_URL ?>/blog-detail.php?slug=<?= $featured['slug'] ?>">
            <img src="<?= sanitize_string($featured['image']) ?>" alt="<?= sanitize_string($featured['title']) ?>" class="img-fluid rounded border border-secondary border-opacity-25 shadow-lg" style="max-height: 280px; width: 100%; object-fit: cover;">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 3. Article Listing Grid -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <h3 class="lum-heading-3 mb-0">Recent Articles</h3>
      
      <!-- Search Filter Bar -->
      <div class="max-w-xs">
        <input type="text" id="blog-search" class="lum-form-control py-2 fs-6" placeholder="Filter articles..." aria-label="Search articles">
      </div>
    </div>

    <div class="lum-grid lum-grid-3" id="blog-grid">
      <?php foreach ($articles as $post): ?>
        <article class="lum-card d-flex flex-column justify-content-between lum-blog-item">
          <div>
            <img src="<?= sanitize_string($post['image']) ?>" alt="<?= sanitize_string($post['title']) ?>" class="img-fluid rounded mb-3 border border-secondary border-opacity-25" style="max-height: 180px; width: 100%; object-fit: cover;">
            <h4 class="lum-heading-5 mb-2">
              <a href="<?= SITE_URL ?>/blog-detail.php?slug=<?= $post['slug'] ?>" class="text-white text-decoration-none hover-cyan">
                <?= sanitize_string($post['title']) ?>
              </a>
            </h4>
            <p class="small text-muted mb-4"><?= sanitize_string($post['excerpt']) ?></p>
          </div>

          <div class="pt-3 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center small text-muted">
            <span>By <?= sanitize_string($post['author']) ?></span>
            <span><i class="bi bi-clock me-1"></i> <?= sanitize_string($post['read_time']) ?></span>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Simple Filter Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.getElementById('blog-search');
  const items = document.querySelectorAll('.lum-blog-item');

  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase();
      items.forEach(item => {
        const text = item.innerText.toLowerCase();
        item.style.display = text.includes(query) ? 'flex' : 'none';
      });
    });
  }
});
</script>

<!-- CTA -->
<div class="lum-container">
  <?php render_component('cta', [
    'title' => 'Stay Updated with Lumetech Engineering Insights',
    'description' => 'Subscribe to our quarterly architecture whitepapers delivered directly to your corporate inbox.',
    'btn_text' => 'Subscribe to Newsletter'
  ]); ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
/**
 * Lumetech Dynamic Reusable Blog Detail Template
 */
require_once __DIR__ . '/includes/data/blog.php';

$all_posts = get_blog_data();
$slug = $_GET['slug'] ?? 'zero-downtime-microservices';

if (!isset($all_posts[$slug])) {
    $slug = 'zero-downtime-microservices';
}

$post = $all_posts[$slug];

$page_title = $post['title'] . " | Lumetech Technical Insights";
$page_desc = $post['excerpt'];
$current_page = "blog";

require_once __DIR__ . '/includes/header.php';
?>

<section class="lum-section pt-5 pb-5">
  <div class="lum-container">
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        'Blog' => SITE_URL . '/blog.php',
        $post['title'] => ''
      ]
    ]); ?>

    <!-- Article Header -->
    <div class="max-w-4xl mx-auto text-center py-4">
      <span class="badge bg-info text-dark font-mono mb-3"><?= sanitize_string($post['category']) ?></span>
      <h1 class="lum-heading-1 mb-4"><?= sanitize_string($post['title']) ?></h1>
      
      <div class="d-flex align-items-center justify-content-center gap-4 text-muted small">
        <div><i class="bi bi-person-fill text-info me-1"></i> <?= sanitize_string($post['author']) ?> (<?= sanitize_string($post['role']) ?>)</div>
        <div><i class="bi bi-calendar3 text-info me-1"></i> <?= sanitize_string($post['date']) ?></div>
        <div><i class="bi bi-clock text-info me-1"></i> <?= sanitize_string($post['read_time']) ?></div>
      </div>
    </div>
  </div>
</section>

<!-- Featured Hero Image -->
<div class="lum-container">
  <div class="max-w-4xl mx-auto mb-5">
    <img src="<?= sanitize_string($post['image']) ?>" alt="<?= sanitize_string($post['title']) ?>" class="img-fluid rounded-4 border border-secondary border-opacity-25 shadow-lg w-100" style="max-height: 420px; object-fit: cover;">
  </div>
</div>

<!-- Main Content Body + Table of Contents -->
<section class="lum-section pt-0 pb-5">
  <div class="lum-container">
    <div class="row g-5 max-w-5xl mx-auto">
      
      <!-- Table of Contents Sidebar -->
      <div class="col-lg-4 d-none d-lg-block">
        <div class="lum-card p-4 position-sticky" style="top: 100px;">
          <h5 class="lum-heading-6 mb-3"><i class="bi bi-list-nested text-info me-2"></i> Table of Contents</h5>
          <ul class="list-unstyled space-y-2 small text-secondary mb-0">
            <li><a href="#article-body" class="lum-footer__link">Article Overview</a></li>
            <li><a href="#article-body" class="lum-footer__link">Key Engineering Insights</a></li>
            <li><a href="#article-body" class="lum-footer__link">Summary & Next Steps</a></li>
          </ul>
        </div>
      </div>

      <!-- Main Article Text -->
      <div class="col-lg-8" id="article-body">
        <div class="lum-card p-4 p-md-5">
          <?= $post['content'] ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Related Articles -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <h3 class="lum-heading-3 mb-4 text-center">Related Articles</h3>

    <div class="lum-grid lum-grid-3">
      <?php 
      $related = array_filter($all_posts, function($p) use ($slug) { return $p['slug'] !== $slug; });
      foreach (array_slice($related, 0, 3, true) as $rel): 
      ?>
        <div class="lum-card d-flex flex-column justify-content-between">
          <div>
            <span class="badge bg-secondary bg-opacity-50 text-info border border-info border-opacity-25 mb-2"><?= sanitize_string($rel['category']) ?></span>
            <h4 class="lum-heading-5 mb-2"><?= sanitize_string($rel['title']) ?></h4>
            <p class="small text-muted mb-4"><?= sanitize_string($rel['excerpt']) ?></p>
          </div>
          <a href="<?= SITE_URL ?>/blog-detail.php?slug=<?= $rel['slug'] ?>" class="lum-btn lum-btn-outline lum-btn-sm">
            Read Article <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<div class="lum-container">
  <?php render_component('cta', [
    'title' => 'Enjoyed This Technical Deep Dive?',
    'description' => 'Subscribe to our quarterly newsletter to receive new architecture whitepapers directly.',
    'btn_text' => 'Subscribe Now'
  ]); ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

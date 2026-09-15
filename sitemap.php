<?php
/**
 * Dynamic XML Sitemap Generator
 */
header('Content-Type: application/xml; charset=utf-8');

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data/services.php';
require_once __DIR__ . '/includes/data/products.php';
require_once __DIR__ . '/includes/data/portfolio.php';
require_once __DIR__ . '/includes/data/blog.php';

$urls = [
    SITE_URL . '/',
    SITE_URL . '/about.php',
    SITE_URL . '/services.php',
    SITE_URL . '/products.php',
    SITE_URL . '/industries.php',
    SITE_URL . '/portfolio.php',
    SITE_URL . '/blog.php',
    SITE_URL . '/contact.php',
    SITE_URL . '/privacy-policy.php',
    SITE_URL . '/terms.php',
];

// Add Services
foreach (get_services_data() as $slug => $s) {
    $urls[] = SITE_URL . '/service-detail.php?slug=' . $slug;
}

// Add Products
foreach (get_products_data() as $slug => $p) {
    $urls[] = SITE_URL . '/product-detail.php?slug=' . $slug;
}

// Add Portfolio
foreach (get_portfolio_data() as $slug => $cs) {
    $urls[] = SITE_URL . '/case-study-detail.php?slug=' . $slug;
}

// Add Blogs
foreach (get_blog_data() as $slug => $b) {
    $urls[] = SITE_URL . '/blog-detail.php?slug=' . $slug;
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $url): ?>
  <url>
    <loc><?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?></loc>
    <lastmod><?= date('Y-m-d') ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.80</priority>
  </url>
<?php endforeach; ?>
</urlset>

<?php
/**
 * Lumetech Breadcrumb Component with JSON-LD Schema
 * 
 * @var array $items Key-value pair array of label => url (last item URL can be empty)
 * @var bool $render_schema Whether to output JSON-LD structured data
 */

$items = $items ?? [
  'Home' => SITE_URL,
  'Page' => ''
];
$render_schema = $render_schema ?? true;

$schema_items = [];
$total = count($items);
$index = 0;
?>

<nav aria-label="Breadcrumb">
  <ol class="lum-breadcrumb">
    <?php 
    foreach ($items as $label => $url): 
      $index++;
      $is_last = ($index === $total);

      if ($render_schema && !empty($label)) {
        $schema_items[] = [
          '@type' => 'ListItem',
          'position' => $index,
          'name' => $label,
          'item' => !empty($url) ? $url : SITE_URL
        ];
      }
    ?>
      <li class="lum-breadcrumb__item <?= $is_last ? 'active' : '' ?>" <?= $is_last ? 'aria-current="page"' : '' ?>>
        <?php if (!$is_last && !empty($url)): ?>
          <a href="<?= sanitize_string($url) ?>"><?= sanitize_string($label) ?></a>
          <span class="lum-breadcrumb__separator"><i class="bi bi-chevron-right ms-2 me-1"></i></span>
        <?php else: ?>
          <span><?= sanitize_string($label) ?></span>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ol>
</nav>

<?php if ($render_schema && !empty($schema_items)): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": <?= json_encode($schema_items, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
}
</script>
<?php endif; ?>

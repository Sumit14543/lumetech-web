<?php
/**
 * Lumetech Button Base Component
 * 
 * @var string $label Button text
 * @var string $href Target URL (if element is <a>)
 * @var string $variant 'primary' | 'secondary' | 'outline'
 * @var string $size 'sm' | 'md' | 'lg'
 * @var string $icon Bootstrap icon class (e.g. 'bi-arrow-right')
 * @var string $type Button type if button tag
 */

$label = $label ?? 'Click Here';
$href = $href ?? '';
$variant = $variant ?? 'primary';
$size = $size ?? 'md';
$icon = $icon ?? '';
$type = $type ?? 'button';

$class_names = "lum-btn lum-btn-{$variant}";
if ($size !== 'md') {
  $class_names .= " lum-btn-{$size}";
}
?>

<?php if (!empty($href)): ?>
  <a href="<?= sanitize_string($href) ?>" class="<?= $class_names ?>">
    <?= sanitize_string($label) ?>
    <?php if (!empty($icon)): ?>
      <i class="bi <?= sanitize_string($icon) ?>"></i>
    <?php endif; ?>
  </a>
<?php else: ?>
  <button type="<?= sanitize_string($type) ?>" class="<?= $class_names ?>">
    <?= sanitize_string($label) ?>
    <?php if (!empty($icon)): ?>
      <i class="bi <?= sanitize_string($icon) ?>"></i>
    <?php endif; ?>
  </button>
<?php endif; ?>

<?php
/**
 * Lumetech Section Heading Base Component
 * 
 * @var string $badge Optional pill badge text
 * @var string $title Section title
 * @var string $description Optional subtitle/description text
 * @var bool $center Whether to center align heading
 */

$badge = $badge ?? '';
$title = $title ?? '';
$description = $description ?? '';
$center = $center ?? false;
$align_class = $center ? 'lum-section-heading--center' : '';
?>
<div class="lum-section-heading <?= $align_class ?>">

  <?php if (!empty($title)): ?>
    <h2><?= $title ?></h2>
  <?php endif; ?>

  <?php if (!empty($description)): ?>
    <p class="lum-lead max-w-2xl <?= $center ? 'mx-auto' : '' ?>"><?= sanitize_string($description) ?></p>
  <?php endif; ?>
</div>

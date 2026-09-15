<?php
/**
 * Lumetech CTA Shell Component
 * 
 * @var string $title Banner title
 * @var string $description Banner subtitle
 * @var string $btn_text Button text
 * @var string $btn_url Button destination
 */

$title = $title ?? 'Ready to Transform Your Enterprise Technology?';
$description = $description ?? 'Talk to our infrastructure architects and discover how Lumetech can optimize your operations today.';
$btn_text = $btn_text ?? 'Schedule a Consultation';
$btn_url = $btn_url ?? SITE_URL . '/contact.php';
?>

<div class="lum-cta-banner my-5 position-relative overflow-hidden">
  <!-- Ambient Floating Glow Blobs -->
  <div class="lum-blob lum-blob-orange" style="top: -100px; left: -100px;"></div>
  <div class="lum-blob lum-blob-cyan" style="bottom: -100px; right: -100px;"></div>

  <div class="row align-items-center g-4 position-relative z-1">
    <div class="col-lg-8">
      <h3 class="lum-heading-3 mb-2 text-white"><?= sanitize_string($title) ?></h3>
      <p class="lum-text-secondary mb-0 fs-5"><?= sanitize_string($description) ?></p>
    </div>
    <div class="col-lg-4 text-lg-end">
      <?php render_component('button', [
        'label' => $btn_text,
        'href' => $btn_url,
        'variant' => 'primary',
        'size' => 'lg',
        'icon' => 'bi-arrow-right-circle-fill'
      ]); ?>
    </div>
  </div>
</div>

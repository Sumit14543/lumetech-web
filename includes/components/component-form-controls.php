<?php
/**
 * Lumetech Form Controls Base Component
 * 
 * @var string $type 'text' | 'email' | 'select' | 'textarea'
 * @var string $name Field name
 * @var string $label Field label
 * @var string $placeholder Input placeholder
 * @var bool $required Whether required
 * @var array $options Options array if select
 */

$type = $type ?? 'text';
$name = $name ?? 'field_name';
$label = $label ?? 'Field Label';
$placeholder = $placeholder ?? '';
$required = $required ?? false;
$options = $options ?? [];
$id = 'field_' . sanitize_string($name);
?>

<div class="lum-form-group">
  <label for="<?= $id ?>" class="lum-form-label">
    <?= sanitize_string($label) ?>
    <?php if ($required): ?><span class="text-danger">*</span><?php endif; ?>
  </label>

  <?php if ($type === 'textarea'): ?>
    <textarea 
      id="<?= $id ?>" 
      name="<?= sanitize_string($name) ?>" 
      rows="4" 
      class="lum-form-control" 
      placeholder="<?= sanitize_string($placeholder) ?>" 
      <?= $required ? 'required' : '' ?>></textarea>

  <?php elseif ($type === 'select'): ?>
    <select 
      id="<?= $id ?>" 
      name="<?= sanitize_string($name) ?>" 
      class="lum-form-select" 
      <?= $required ? 'required' : '' ?>>
      <option value=""><?= !empty($placeholder) ? sanitize_string($placeholder) : 'Select an option' ?></option>
      <?php foreach ($options as $val => $opt_label): ?>
        <option value="<?= sanitize_string($val) ?>"><?= sanitize_string($opt_label) ?></option>
      <?php endforeach; ?>
    </select>

  <?php else: ?>
    <input 
      type="<?= sanitize_string($type) ?>" 
      id="<?= $id ?>" 
      name="<?= sanitize_string($name) ?>" 
      class="lum-form-control" 
      placeholder="<?= sanitize_string($placeholder) ?>" 
      <?= $required ? 'required' : '' ?>>
  <?php endif; ?>
</div>

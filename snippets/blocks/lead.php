<div
  class="<?= $block->size()->or('lead'); ?> <?= $block->font()->or('axios'); ?>"
  <?php if ($block->id()) echo 'id="' . $block->id() . '"'; ?>
>
  <?= $block->text()->kirbytextinline(); ?>
</div>

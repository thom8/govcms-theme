<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>


  <div class="card">
    <?php if ($content['image']): ?>
      <?php print $content['image']; ?>
    <?php endif; ?>

    <?php if ($content['title']): ?>
      <?php print $content['title']; ?>
    <?php endif; ?>

    <?php if ($content['description']): ?>
      <?php print $content['description']; ?>
    <?php endif; ?>
  </div>

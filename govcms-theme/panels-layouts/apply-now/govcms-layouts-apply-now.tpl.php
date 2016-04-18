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

<?php if ($content['intro']): ?>
  <section class="about move-to-top" id="about">
    <div class="container">
      <?php print $content['intro']; ?>
    </div>
  </section>
<?php endif; ?>


<?php if ($content['split']): ?>
<section class="split apply-now">
  <div class="container">
    <div class="row">
      <?php print $content['split']; ?>
    </div>
  </div>
</section>
<?php endif; ?>
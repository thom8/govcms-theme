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
    <div class="col-md-10 col-md-offset-1 move-into-top">
      <?php print $content['intro']; ?>
    </div>
<?php endif; ?>

<?php if ($content['pricing_table']): ?>
  <section class="pricingTable">
    <div class="container">
      <div class="row text-center">
        <?php print $content['pricing_table']; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($content['whats_included']): ?>
  <section class="icons-grid bg-primary">
    <div class="container">
      <div class="row text-center">
        <?php print $content['whats_included']; ?>
      </div>
    </div>
  </section>
<?php endif; ?>


<?php if ($content['additional_services']): ?>
  <section id="support-cats" class="icons-grid">
    <div class="container">
      <div class="row text-center">
        <?php print $content['additional_services']; ?>
      </div>
    </div>
  </section>
<?php endif; ?>


<?php if ($content['split']): ?>
  <section class="split">
    <div class="container">
      <div class="row">
        <?php print $content['split']; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

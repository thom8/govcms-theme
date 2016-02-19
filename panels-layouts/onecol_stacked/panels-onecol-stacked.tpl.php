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
    <section class="about" id="about">
      <div class="container">
          <?php print $content['intro']; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ($content['clients']): ?>
    <section class="clients light-bg" id="clients">
      <div class="container">
        <?php print $content['clients']; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ($content['testimonial']): ?>
    <section class="split testimonial">
      <div class="container">
        <?php print $content['testimonial']; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ($content['fourth']): ?>
    <section class="icons-grid bg-primary" id="services">
      <div class="container">
        <?php print $content['fourth']; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ($content['fifth']): ?>
    <section class="split">
      <div class="container">
        <?php print $content['fifth']; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ($content['sixth']): ?>
    <section class=""><?php print $content['sixth']; ?></section>
  <?php endif; ?>
  <?php if ($content['seventh']): ?>
    <section class=""><?php print $content['seventh']; ?></section>
  <?php endif; ?>
  <?php if ($content['eighth']): ?>
    <section class=""><?php print $content['eighth']; ?></section>
  <?php endif; ?>
  <?php if ($content['ninth']): ?>
    <section class=""><?php print $content['ninth']; ?></section>
  <?php endif; ?>

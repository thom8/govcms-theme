<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>

  <?php if ($content['top']): ?>
    <section class="news-item-header" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 text-center">
            <?php print $content['top']; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if ($content['left'] && $content['right']): ?>
  <div class="center-wrapper">
    <div class="panel-col-first panel-panel">
      <div class="inside"><?php print $content['left']; ?></div>
    </div>
    <div class="panel-col-last panel-panel">
      <div class="inside"><?php print $content['right']; ?></div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($content['bottom']): ?>
    <section class="news-item text-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <article>
              <p class="news-content">
                <?php print $content['bottom']; ?>
              </p>
            </article>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
</div>

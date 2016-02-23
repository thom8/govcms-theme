<div class="move-into-top">
  <?php

  print render(field_view_field('node', $node, 'field_summary', array(
    'label'=>'hidden',
    'type' => 'default',
  )));

  ?>
</div>

<div class="container">

  <div class="row">
    <!-- #main -->
    <div id="main" class="clearfix">

      <!-- EOF:#content-wrapper -->
      <div id="content-wrapper">
        <section class="col-md-8 col-md-offset-2" id="top">
          <article id="node-<?php print $node->nid; ?>"
                   class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

            <div class="content"<?php print $content_attributes; ?>>
              <?php
              // We hide the comments and links now so that we can render them later.
              hide($content['comments']);
              hide($content['links']);
              hide($content['field_tags']);
              print render(field_view_field('node', $node, 'body', array(
                'label'=>'hidden',
                'type' => 'default',
              )));
              ?>
            </div>

            <?php if (($tags = render($content['field_tags'])) || ($links = render($content['links']))): ?>
              <hr class="small">
              <div class="tags text-center">
                <?php print render($content['field_tags']); ?>
              </div>
            <?php endif; ?>

          </article>
        </section>
      </div>
    </div>
  </div>
</div>

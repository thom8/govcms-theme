<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix move-into-top"<?php print $attributes; ?>>
  <form action="/" method="post" id="<?php print $variables['block_html_id']; ?>" accept-charset="UTF-8">
    <div class="input-group">
      <input 	placeholder="Search..." class="form-control form-text" type="text" value=""
              id="<?php print $variables['elements']['keys_1']['#id']; ?>"
              name="<?php print $variables['elements']['keys_1']['#name']; ?>"
              size="<?php print $variables['elements']['keys_1']['#size']; ?>"
              maxlength="<?php print $variables['elements']['keys_1']['#maxlength']; ?>" />
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default form-submit" id="edit-submit-1" name="op" >
          <?php    // We can be sure that the font icons exist in CDN.
          if (theme_get_setting('bootstrap_cdn')) {
            print _bootstrap_icon('search');
          } else {
            print t('Search!');
          } ?>
        </button>
			</span>
    </div>
    <?php print $variables['elements']['base_1']['#children']; ?>
    <?php print $variables['elements']['id']['#children']; ?>
    <?php print $variables['elements']['form_build_id']['#children']; ?>
    <?php print $variables['elements']['form_token']['#children']; ?>
    <?php print $variables['elements']['form_id']['#children']; ?>
  </form>
</section>
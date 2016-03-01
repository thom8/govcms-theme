<div class="col-md-10 col-md-offset-1 text-center move-into-top">
  <form class="navbar-form">
    <div style="display:inline;" class="form-group">
      <div class="input-group">
        <input placeholder="Search for a topic or question here..." type="text"
               class="form-control input-lg"
               value=""
               id="<?php print $variables['elements']['keys_1']['#id']; ?>"
               name="<?php print $variables['elements']['keys_1']['#name']; ?>" />
        <button type="submit"
                class="input-group-addon btn-lg"
                id="edit-submit-1"
                name="op">
          <i class="icon-search"></i>
        </button>
      </div>
    </div>
    <?php print $variables['elements']['base_1']['#children']; ?>
    <?php print $variables['elements']['id']['#children']; ?>
    <?php print $variables['elements']['form_build_id']['#children']; ?>
    <?php print $variables['elements']['form_token']['#children']; ?>
    <?php print $variables['elements']['form_id']['#children']; ?>
  </form>

</div>

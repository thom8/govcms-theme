<header id="top">
  <div class="container">
    <div class="row">
      <div class="col-md-4 logos">
        <a href="/">
          <div class="coa-stacked">
            <div class="coa-coa">
              <span class="crest"></span>
            </div>
            <div class="coa-titles-stacked">
              <div class="coa-titles">
                <span class="coa-line-one coa-lines-1">Australian Government</span>
              </div>
            </div>
          </div>
          <img width="135" height="74" alt="govCMS" class="logo" src="<?php print '/' . path_to_theme(); ?>/img/govcms.svg" >
        </a>
      </div>
      <div class="col-md-8">
        <div class="cd-morph-dropdown">
          <a href="#0" class="nav-trigger"><div class="menu-text">Menu</div><span aria-hidden="true"></span></a>
          <?php
            // Navigation,
            // as per https://codyhouse.co/gem/stripe-navigation/

            // top level nav
            // print render($page['header_menu']);

            // sub nav html node
            print $main_menu;
          ?>
        </div>
      </div>
    </div>
  </div>
</header>

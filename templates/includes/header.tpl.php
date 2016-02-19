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
          <img width="74" height="74" alt="govCMS" class="logo" src="<?php print '/' . path_to_theme(); ?>/img/govcms.svg" />
        </a>
      </div>
      <div class="col-md-8">
        <?php print render($page['header_menu']); ?>
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">How it works</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Support</a></li>
          <li><a class="btn btn-default btn-light" href="#">Sign up</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>

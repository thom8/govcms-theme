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
        <!-- <div class="cd-morph-dropdown"> -->
          <?php
            // Navigation,
            // as per https://codyhouse.co/gem/stripe-navigation/

            // top level nav
            print render($page['header_menu']);

            // sub nav html node
            // print $sub_menu;

  // temp hard coded for now, once working use $sub_menu ******************************* - Tim TODO
          ?>

          <!-- <a href="#0" class="nav-trigger">Open Menu<span aria-hidden="true"></span></a>
          <nav class="main-nav">
            <ul class="nav nav-pills pull-right">
              <li class="first leaf has-children active"><a href="/" class="active">Home</a></li>
              <li class="has-dropdown links" data-content="menu1">
                <a href="#menu1">Menu 1</a>
              </li>
              <li class="has-dropdown links" data-content="menu2">
                <a href="#menu2">Menu 2</a>
              </li>
              <li class="has-dropdown links" data-content="menu3">
                <a href="#menu3">Menu 3</a>
              </li>
              <li class="last leaf has-children"><a href="/apply-now" class="btn btn-default btn-light">Apply now</a></li>
            </ul>
          </nav>

          <div class="morph-dropdown-wrapper">
        		<div class="dropdown-list">
        			<ul>
        				<li id="menu1" class="dropdown links">
                  <h2>1test1</h2>
        				</li>
        				<li id="menu2" class="dropdown links">
                  <h2>2test2</h2>
        				</li>
        				<li id="menu3" class="dropdown links">
                  <h2>3test3</h2>
        				</li>
        			</ul>
        			<div class="bg-layer" aria-hidden="true"></div>
        		</div>
        	</div>
        </div> -->
      </div>
    </div>
  </div>
</header>

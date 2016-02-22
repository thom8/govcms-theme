<div id="top-and-first-wrapper">
  <?php include "includes/header.tpl.php"; ?>
</div>
<?php if ($title): ?>
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<main>
  <!-- #page -->
  <div id="page" class="clearfix">
    <!-- #main-content -->
    <div id="main-content">

      <div class="container">
        <div class="col-md-8 col-md-offset-2">
          <!-- #messages-console -->
          <?php if ($messages): ?>
            <div id="messages-console" class="clearfix">
              <div class="row">
                <div class="col-md-12">
                  <?php print $messages; ?>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <!-- EOF: #messages-console -->
          <?php if ($breadcrumb && theme_get_setting('breadcrumb_display')): ?>
            <div id="breadcrumb" class="clearfix">
              <div id="breadcrumb-inside" class="clearfix">
                <?php print $breadcrumb; ?>
              </div>
            </div>
          <?php endif; ?>

          <!-- #tabs -->
          <?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>
          <!-- EOF: #tabs -->

          <!-- #action links -->
          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>
          <!-- EOF: #action links -->
        </div>
      </div>

      <!-- Main page content if not homepage -->
      <?php print render($page['content']); ?>

    </div>
    <!-- EOF:#main-content -->

  </div>
  <!-- EOF:#page -->
</main>

<?php include "includes/footer.tpl.php"; ?>
<!-- EOF:#footer -->

<div id="top-and-first-wrapper">
  <?php include "includes/header.tpl.php"; ?>
</div>
<main>
  <!-- #page -->
  <div id="page" class="clearfix">


    <!-- #main-content -->
    <div id="main">



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



      <section id="posts">


        <h2 class="sr-only">Latest posts</h2>
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

        <?php if ($page['content']): ?>
          <section id="region-content" class="container">
            <?php print render($page['content']); ?>
          </section>
        <?php endif; ?>


      </section>

    </div>
    <!-- EOF:#main-content -->

  </div>
  <!-- EOF:#page -->
</main>

<?php include "includes/footer.tpl.php"; ?>

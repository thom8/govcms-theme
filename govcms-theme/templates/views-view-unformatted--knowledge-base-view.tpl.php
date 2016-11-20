<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $id => $row): ?>
  <a href="<?php $row[1]?>" class="media">
    <?php print $row; ?>
  </a>
<?php endforeach; ?>

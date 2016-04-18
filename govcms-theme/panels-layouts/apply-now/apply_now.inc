<?php

/**
 * @file
 * One column stacked panel layout.
 */

/**
 * Implements hook_panels_layouts().
 */
// Plugin definition.
$plugin = array(
  'title' => t('govCMS Apply Now Page'),
  'category' => t('Columns: 1'),
  'icon' => 'front.png',
  'theme' => 'govcms-layouts-front',
  'admin css' => 'front.admin.css',
  'regions' => array(
    'intro' => t('Introduction'),
    'split' => t('Split'),
  ),
);

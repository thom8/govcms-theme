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
  'title' => t('govCMS Front Page'),
  'category' => t('Columns: 1'),
  'icon' => 'front.png',
  'theme' => 'govcms-layouts-front',
  'admin css' => 'front.admin.css',
  'regions' => array(
    'intro' => t('Introduction'),
    'clients' => t('Clients / Trusted By'),
    'whos_using' => t('Who is using govCMS?'),
    'testimonial_split' => t('Testimonial Split'),
    'why_use' => t('Why use govCMS?'),
    'more_information_split' => t('More Information / Calculate Costs'),
  ),
);

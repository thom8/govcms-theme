<?php

/**
 * @file
 * preprocess.inc
 */

// Load the ACSF site path fix helper.
require_once './' . drupal_get_path('theme', 'govcmstheme_bootstrap') . '/helpers/acsffix.inc';

/**
 * Implement hook_preprocess_field().
 */
function govcmstheme_bootstrap_preprocess_field(&$variables) {
  // Get the field element.
  $element = $variables['element'];

  // Provides a hook function for each field name.
  $function = 'govcmstheme_bootstrap_preprocess_field__' . $element['#field_name'];
  if (function_exists($function)) {
    $function($variables);
  }
}

/**
 * Preprocess the body field.
 */
function govcmstheme_bootstrap_preprocess_field__body(&$variables) {
  // Get the field element.
  $element = $variables['element'];
  $items = $element['#items'];

  // Looping on field items.
  foreach ($items as $delta => $item) {
    if (!empty($items[$delta]['#markup'])) {
      // Process ACSF site path.
      $content = _govcmstheme_bootstrap_acsffix_path($items[$delta]['#markup']);
      // Apply token replace function to updated content.
      $variables['items'][$delta]['#markup'] = token_replace($content);
    }
    elseif (!empty($items[$delta]['value'])) {
      // Process ACSF site path.
      $content = _govcmstheme_bootstrap_acsffix_path($items[$delta]['value']);
      // Apply token replace function to updated content.
      $variables['items'][$delta]['value'] = token_replace($content);
      $variables['items'][$delta]['#markup'] = token_replace($content);
    }
  }
}

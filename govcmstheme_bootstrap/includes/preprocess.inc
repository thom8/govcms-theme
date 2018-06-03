<?php

/**
 * @file
 * preprocess.inc
 */

/**
 * Preprocess the field.
 *
 * @param $vars
 */
function govcmstheme_bootstrap_preprocess_field(&$vars) {
  $function = 'govcmstheme_bootstrap_preprocess_field__' . $vars['element']['#field_name'];
  if (function_exists($function)) {
    $function($vars);
  }
}

/**
 * Preprocess the body field.
 *
 * @param $vars
 */
function govcmstheme_bootstrap_preprocess_field__body(&$vars) {
  // Process ACSF site path.
  if (!empty($vars['items'][0]['#markup'])) {
    $content = $vars['items'][0]['#markup'];

    // Fix the ACSF site path.
    require_once './' . drupal_get_path('theme', 'govcmstheme_bootstrap') . '/helpers/acsffix.inc';
    $content = _govcmstheme_bootstrap_acsffix_path($content);

    // Apply tokens to body field.
    $vars['items'][0]['#markup'] = token_replace($content);
  }
}

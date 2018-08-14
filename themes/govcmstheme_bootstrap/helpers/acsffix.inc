<?php

/**
 * Fix ACSF site paths issue.
 *
 * This arises when an ACSF site is cloned, and links to files already saved in
 * the database retain their existing Acquia site ID. While this is an accurate
 * clone, this prevents the previous site from being safely deleted, as doing
 * so would cause all static links on the new site to break.
 */

/**
 * Fix the ACSF paths.
 *
 * @param $text
 *
 * @return mixed
 */
function _govcmstheme_bootstrap_acsffix_path($text) {
  // Return the text as quick as possible.
  if (FALSE === strpos($text, 'sites/g/files/net')) {
    return $text;
  }

  $theme_repo_name = 'govcms-theme';

  // Find all ACSF links in $content.
  preg_match_all('@/sites/g/files/(net[a-zA-Z0-9]+)/(f|themes/site/' . $theme_repo_name . ')/@', $text, $matches);

  // Return the text if no matches.
  if (empty($matches) || !isset($matches[0])) {
    return $text;
  }

  // Get ACSF net paths.
  $acsf_paths = $matches[0];

  // Replace the paths to current site path.
  $text = str_replace($acsf_paths, _govcmstheme_bootstrap_file_path($acsf_paths), $text);

  return $text;
}

/**
 * Return the current Drupal site file paths.
 */
function _govcmstheme_bootstrap_file_path($acsf_paths) {
  $replaced_path = [];

  foreach ($acsf_paths as $acsf_path) {
    if (FALSE === strpos($acsf_path, '/themes/')) {
      $replaced_path[] = '/' . variable_get('file_public_path', conf_path() . '/files') . '/';
    }
    else {
      $replaced_path[] = '/' . drupal_get_path('theme', $GLOBALS['theme']) . '/';
    }
  }
  return $replaced_path;
}

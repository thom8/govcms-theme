<?php

/**
 * Page alter.
 */
function govcmstheme_bootstrap_page_alter($page) {
  $mobileoptimized = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'MobileOptimized',
      'content' => 'width'
    )
  );
  $handheldfriendly = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'HandheldFriendly',
      'content' => 'true'
    )
  );
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1, maximum-scale=2, user-scalable=0'
    )
  );
  drupal_add_html_head($mobileoptimized, 'MobileOptimized');
  drupal_add_html_head($handheldfriendly, 'HandheldFriendly');
  drupal_add_html_head($viewport, 'viewport');
}

/**
 * Override or insert variables into the html template.
 */
function govcmstheme_bootstrap_process_html(&$vars) {
  // Hook into color.module
  if (module_exists('color')) {
    _color_html_alter($vars);
  }
}


/**
 * Preprocess variables for block.tpl.php
 */
function govcmstheme_bootstrap_preprocess_block(&$variables) {
  $variables['classes_array'][] = 'clearfix';
}

/**
 * Preprocess Views exposed form
 */
function govcmstheme_bootstrap_preprocess_views_exposed_form(&$vars, $hook) {

  if (strrpos($vars['form']['#id'], 'views-exposed-form', -strlen($vars['form']['#id'])) !== FALSE) {
    $vars['form']['submit']['#attributes']['class'] = array('btn btn-info');
    $vars['form']['submit']['#value'] = "Filter";
    $vars['form']['reset']['#attributes']['class'] = array('btn btn-info');
    unset($vars['form']['submit']['#printed']);
    unset($vars['form']['reset']['#printed']);
    $vars['button'] = drupal_render($vars['form']['submit']);
    $vars['reset_button'] = drupal_render($vars['form']['reset']);
  }
}


function govcmstheme_bootstrap_js_alter(&$javascript) {
  $node_admin_paths = array(
    'node/*/edit',
    'node/add',
    'node/add/*',
  );
  $replace_jquery = TRUE;
  if (path_is_admin(current_path())) {
    $replace_jquery = FALSE;
  }
  else {
    foreach ($node_admin_paths as $node_admin_path) {
      if (drupal_match_path(current_path(), $node_admin_path)) {
        $replace_jquery = FALSE;
      }
    }
  }
  // Swap out jQuery to use an updated version of the library.
  if ($replace_jquery) {
    $javascript['misc/jquery.js']['data'] = '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js';
  }
}

function govcmstheme_bootstrap_html_tag($vars) {
  if ($vars['element']['#tag'] == 'script') {
    unset($vars['element']['#value_prefix']);
    unset($vars['element']['#value_suffix']);
  }
  return theme_html_tag($vars);
}

function govcmstheme_bootstrap_menu_tree__main_menu($variables) {
  return '<ul class="nav nav-pills pull-right">' . $variables['tree'] . '</ul>';
}

function govcmstheme_bootstrap_menu_link__main_menu($variables) {
  //unset all the classes
  if (!empty($element['#attributes']['class'])) {
    foreach ($element['#attributes']['class'] as $key => $class) {
      if ($class != 'active') {
        unset($element['#attributes']['class'][$key]);
      }
    }
  }

  $element = $variables['element'];
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . "</li>\n";
}

function govcmstheme_bootstrap_menu_tree__menu_footer_sub_menu($variables) {
  return '<ul class="list-inline small-links">' . $variables['tree'] . '</ul>';
}


function govcmstheme_bootstrap_form_alter(&$form, &$form_state, $form_id) {
  if (!empty($form['actions']) && $form['actions']['submit']) {
    $form['actions']['submit']['#attributes'] = array('class' => array('btn', 'btn-primary'));
    if(isset($form_id) && ($form_id == 'webform_client_form_126' || $form_id == 'webform_client_form_131')) {
      $form['actions']['submit']['#suffix'] = '<br /><small>Once we\'ve review your applicaiton and be in contact with you shortly.</small>';
    }
  }
}

function govcmstheme_bootstrap_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $crumbs = '';
    foreach($breadcrumb as $value) {
      $temp = substr($value, 0, strpos($value, '>') + 1);
      $temp .= "← Back to ";
      $temp .= get_between('>', '</', $value);
      $temp .= " page</a>";
      $crumbs .= $temp;
    }
  }
  return $crumbs;
}

function get_between($var1="",$var2="",$pool){
  $temp1 = strpos($pool,$var1)+strlen($var1);
  $result = substr($pool,$temp1,strlen($pool));
  $dd=strpos($result,$var2);
  if($dd == 0){
    $dd = strlen($result);
  }

  return substr($result,0,$dd);
}

/**
 * Returns HTML for a date element formatted as an interval.
 */
function govcmstheme_bootstrap_display_interval($variables) {
  $entity = $variables['entity'];
  $options = $variables['display']['settings'];
  $dates = $variables['dates'];
  $attributes = $variables['attributes'];

  // Get the formatter settings, either the default settings for this node type
  // or the View settings stored in $entity->date_info.
  if (!empty($entity->date_info) && !empty($entity->date_info->formatter_settings)) {
    $options = $entity->date_info->formatter_settings;
  }

  $time_ago_vars = array(
    'start_date' => $dates['value']['local']['object'],
    'end_date' => $dates['value2']['local']['object'],
    'interval' => $options['interval'],
    'interval_display' => $options['interval_display'],
  );

  if ($return = theme('date_time_ago', $time_ago_vars)) {
    $return = get_between(">", "</", $return);
    return '<p class="post-meta"' . drupal_attributes($attributes) . ">$return</p>";
  }
  else {
    return '';
  }
}

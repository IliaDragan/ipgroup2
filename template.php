<?php

/**
 * @file
 *
 * Various theme related logic.
 */

/**
 * Implements hook_preprocess_page().
 */
function ipgroup_preprocess_page(&$vars) {
  $header = drupal_get_http_header('status');

  // Use custom page template for 404 (not found) errors.
  if ($header == '404 Not Found') {
    $vars['theme_hook_suggestions'][] = 'page__404';
  }
}

/**
 * Implements hook_preprocess_field().
 */
function ipgroup_preprocess_field(&$variables) {
  $element = $variables['element'];
  // If you have devel enabled, otherwise:
  // var_dump($element['#field_name']);
//  var_dump($element['#field_name']);

  // You may also want to check the existing suggestions:
//  var_dump($variables['theme_hook_suggestions']);
}

/**
 * Implements hook_form_alter().
 */
//function ipgroup_form_user_login_alter(array &$form, array &$form_state) {
//  $form['name']['#title_display'] = 'after';
//  $form['pass']['#title_display'] = 'after';
//}

/**
 * Implements hook_theme().
 */
function ipgroup_theme() {
  $items = [];

  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'ipgroup') . '/templates',
    'template' => 'system/user-login',
    'preprocess functions' => array(
      'ipgroup_preprocess_user_login'
    ),
  );

  return $items;
}

/**
 * Allows to make modifications prior to login page render.
 */
function ipgroup_preprocess_user_login(&$vars) {
  $form = &$vars['form'];

  $form['name']['#title_display'] = 'after';
  $form['pass']['#title_display'] = 'after';
}

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
 * Implements hook_theme().
 */
function ipgroup_theme() {
  $items = [];

  $items['user_login'] = [
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'ipgroup') . '/templates',
    'template' => 'user/user-login',
//    'preprocess functions' => [
//      'ipgroup_preprocess_user_login',
//    ],
  ];

  $items['user_pass'] = [
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'ipgroup') . '/templates',
    'template' => 'user/user-pass',
//    'preprocess functions' => [
//      'ipgroup_preprocess_user_pass',
//    ],
  ];

  return $items;
}

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Make modifications to the user password reminder form.
 */
function ipgroup_form_user_pass_alter(&$form, &$form_state) {
  $form['name']['#title_display'] = 'after';
}

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Make modifications to the user login form.
 */
function ipgroup_form_user_login_alter(&$form, &$form_state) {
  $form['name']['#title_display'] = 'after';
  $form['pass']['#title_display'] = 'after';
}

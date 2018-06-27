<?php

/**
 * @file
 * Stub file for bootstrap_textfield().
 */

/**
 * Returns HTML for a password form element.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #title, #value, #description, #size, #maxlength,
 *     #required, #attributes, #autocomplete_path.
 *
 * @return string
 *   The constructed HTML.
 *
 * @see theme_password()
 *
 * @ingroup theme_functions
 */
function ipgroup_password(array $variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'password';
  element_set_attributes($element, array(
    'id',
    'name',
    'value',
    'size',
    'maxlength',
  ));
  _form_set_class($element, array('form-password'));

  if (isset($element['#required']) && TRUE === $element['#required']) {
    $element['#attributes']['required'] = NULL;
  }

  $output = '<input' . drupal_attributes($element['#attributes']) . ' />';
  $output .= '<span class="input-bar"></span>';

  return $output;
}

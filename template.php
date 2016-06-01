<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */

/**
 * Theme preprocessing function for region 'branding'.
 * @param array $variables
 *   Region specific variables.
 */
function ctda_theme_preprocess_page(&$variables) {
  $variables['branding_text_link'] = theme_get_setting('uconn_branding_text_link');
}

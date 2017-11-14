<?php

/**
 * Implements hook_preprocess_page().
 */
function cbu_scholar_preprocess_page(&$variables) {
    // You can use preprocess hooks to modify the variables before they are passed
    //drupal_add_js('jQuery.extend(Drupal.settings, { "pathToTheme": "' . path_to_theme() . '" });', 'inline');
    drupal_add_js('jQuery.extend(Drupal.settings, { "pathToTheme": "' . file_create_url(path_to_theme()) . '" });', 'inline');
    // to the theme function or template file.
}

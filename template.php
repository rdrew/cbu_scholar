<?php

function cbu_islandscholar_css_alter(&$css) {
 // unset($css[drupal_get_path('module', 'room_reservations') . '/room_reservations.css']);
  //unset($css[drupal_get_path('theme', 'omega') . '/omega/css/modules/system/system.messages.theme.css']);
}

/**
 * Returns HTML for an islandora_solr_facet_wrapper.
 *
 * @param array $variables
 *   An associative array containing:
 *   - title: A string to use as the header/title.
 *   - content: A string containing the content being wrapped.
 *
 * @ingroup themeable
 */
function cbu_islandscholar_islandora_solr_facet_wrapper($variables) {
  //$output = '<div class="islandora-solr-facet-wrapper">';
  //$output .= '<h3>' . $variables['title'] . '</h3>';
  //$output .= $variables['content'];
  //$output .= '</div>';
  //return $output;

if ( $variables['title'] == "Date" ) {
  $output = '<li class="islandora-solr-facet-wrapper">';
  $output .= '<a href="#" class="button">' . $variables['title'] . '</a>';
  $output .= '<ul><li>';
  $output .= $variables['content'];
  $output .= '</li></ul>';
  $output .= '</li>';
} else {
  $output = '<li class="islandora-solr-facet-wrapper">';
  $output .= '<a href="#" class="button">' . $variables['title'] . '</a>';
  $output .= $variables['content'];
  $output .= '</li>';
}

  return $output;




}

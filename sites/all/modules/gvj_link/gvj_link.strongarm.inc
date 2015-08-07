<?php
/**
 * @file
 * gvj_link.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function gvj_link_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_link_pattern';
  $strongarm->value = 'link/[node:title]';
  $export['pathauto_node_link_pattern'] = $strongarm;

  return $export;
}

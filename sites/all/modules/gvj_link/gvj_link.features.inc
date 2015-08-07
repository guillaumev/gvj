<?php
/**
 * @file
 * gvj_link.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function gvj_link_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function gvj_link_views_api() {
  return array("api" => "3.0");
}

<?php
/**
 * @file
 * gvj_contact.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function gvj_contact_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

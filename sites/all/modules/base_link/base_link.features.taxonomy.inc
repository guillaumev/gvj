<?php
/**
 * @file
 * base_link.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function base_link_taxonomy_default_vocabularies() {
  return array(
    'link_categories' => array(
      'name' => 'Link categories',
      'machine_name' => 'link_categories',
      'description' => '',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
    ),
  );
}

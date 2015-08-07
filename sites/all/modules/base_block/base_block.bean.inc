<?php
/**
 * @file
 * base_block.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function base_block_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'block';
  $bean_type->label = 'Block';
  $bean_type->options = '';
  $bean_type->description = 'A block type to replace default Drupal blocks';
  $export['block'] = $bean_type;

  return $export;
}

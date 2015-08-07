<?php
/**
 * @file
 * base_block.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function base_block_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create any block bean'.
  $permissions['create any block bean'] = array(
    'name' => 'create any block bean',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'delete any block bean'.
  $permissions['delete any block bean'] = array(
    'name' => 'delete any block bean',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'edit any block bean'.
  $permissions['edit any block bean'] = array(
    'name' => 'edit any block bean',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'bean',
  );

  // Exported permission: 'view any block bean'.
  $permissions['view any block bean'] = array(
    'name' => 'view any block bean',
    'roles' => array(
      'administrator' => 'administrator',
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
      'manager' => 'manager',
    ),
    'module' => 'bean',
  );

  return $permissions;
}

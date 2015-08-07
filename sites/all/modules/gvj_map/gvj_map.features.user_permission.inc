<?php
/**
 * @file
 * gvj_map.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function gvj_map_user_default_permissions() {
  $permissions = array();

  // Exported permission: create any map bean.
  $permissions['create any map bean'] = array(
    'name' => 'create any map bean',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'bean',
  );

  // Exported permission: delete any map bean.
  $permissions['delete any map bean'] = array(
    'name' => 'delete any map bean',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'bean',
  );

  // Exported permission: edit any map bean.
  $permissions['edit any map bean'] = array(
    'name' => 'edit any map bean',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'bean',
  );

  // Exported permission: view any map bean.
  $permissions['view any map bean'] = array(
    'name' => 'view any map bean',
    'roles' => array(
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'bean',
  );

  return $permissions;
}

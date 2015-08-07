<?php
/**
 * @file
 * base_apps.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function base_apps_user_default_permissions() {
  $permissions = array();

  // Exported permission: administer apps.
  $permissions['administer apps'] = array(
    'name' => 'administer apps',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'apps',
  );

  return $permissions;
}

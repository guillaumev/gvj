<?php
/**
 * @file
 * gvj_social.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function gvj_social_user_default_permissions() {
  $permissions = array();

  // Exported permission: administer follow.
  $permissions['administer follow'] = array(
    'name' => 'administer follow',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'follow',
  );

  // Exported permission: administer sharethis.
  $permissions['administer sharethis'] = array(
    'name' => 'administer sharethis',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'sharethis',
  );

  // Exported permission: change follow link titles.
  $permissions['change follow link titles'] = array(
    'name' => 'change follow link titles',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'follow',
  );

  // Exported permission: edit any user follow links.
  $permissions['edit any user follow links'] = array(
    'name' => 'edit any user follow links',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'follow',
  );

  // Exported permission: edit own follow links.
  $permissions['edit own follow links'] = array(
    'name' => 'edit own follow links',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'follow',
  );

  // Exported permission: edit site follow links.
  $permissions['edit site follow links'] = array(
    'name' => 'edit site follow links',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'follow',
  );

  return $permissions;
}

<?php
/**
 * @file
 * gvj_slideshow.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function gvj_slideshow_user_default_permissions() {
  $permissions = array();

  // Exported permission: create any beanslide bean.
  $permissions['create any beanslide bean'] = array(
    'name' => 'create any beanslide bean',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'bean',
  );

  // Exported permission: delete any beanslide bean.
  $permissions['delete any beanslide bean'] = array(
    'name' => 'delete any beanslide bean',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'bean',
  );

  // Exported permission: edit any beanslide bean.
  $permissions['edit any beanslide bean'] = array(
    'name' => 'edit any beanslide bean',
    'roles' => array(
      'administrator' => 'administrator',
      'manager' => 'manager',
    ),
    'module' => 'bean',
  );

  // Exported permission: view any beanslide bean.
  $permissions['view any beanslide bean'] = array(
    'name' => 'view any beanslide bean',
    'roles' => array(
      'administrator' => 'administrator',
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'bean',
  );

  return $permissions;
}

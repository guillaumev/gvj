<?php
/**
 * @file
 * gvj_social.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function gvj_social_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'sharethis_button_option';
  $strongarm->value = 'stbc_large';
  $export['sharethis_button_option'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'sharethis_location';
  $strongarm->value = 'block';
  $export['sharethis_location'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'sharethis_service_option';
  $strongarm->value = '"LinkedIn:linkedin","Google +:googleplus","Tweet:twitter","Facebook:facebook","ShareThis:sharethis"';
  $export['sharethis_service_option'] = $strongarm;

  return $export;
}

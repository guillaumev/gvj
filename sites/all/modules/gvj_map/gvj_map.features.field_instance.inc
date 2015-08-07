<?php
/**
 * @file
 * gvj_map.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function gvj_map_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'bean-map-field_map'
  $field_instances['bean-map-field_map'] = array(
    'bundle' => 'map',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'leaflet',
        'settings' => array(
          'height' => 200,
          'icon' => array(
            'iconAnchor' => array(
              'x' => '',
              'y' => '',
            ),
            'iconSize' => array(
              'x' => '',
              'y' => '',
            ),
            'iconUrl' => '',
            'popupAnchor' => array(
              'x' => '',
              'y' => '',
            ),
            'shadowAnchor' => array(
              'x' => '',
              'y' => '',
            ),
            'shadowUrl' => '',
          ),
          'leaflet_map' => 'OSM Mapnik',
          'popup' => 0,
        ),
        'type' => 'geofield_leaflet',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'bean',
    'field_name' => 'field_map',
    'label' => 'Map',
    'required' => FALSE,
    'settings' => array(
      'local_solr' => array(
        'enabled' => FALSE,
        'lat_field' => 'lat',
        'lng_field' => 'lng',
      ),
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'module' => 'geofield',
      'settings' => array(),
      'type' => 'geofield_latlon',
      'weight' => 11,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Map');

  return $field_instances;
}

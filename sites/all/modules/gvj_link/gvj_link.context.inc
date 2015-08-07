<?php
/**
 * @file
 * gvj_link.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function gvj_link_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'link-content-type';
  $context->description = 'When viewing a link';
  $context->tag = 'Content types';
  $context->conditions = array(
    'node' => array(
      'values' => array(
        'link' => 'link',
      ),
      'options' => array(
        'node_form' => '1',
      ),
    ),
  );
  $context->reactions = array(
    'breadcrumb' => 'link',
    'menu' => 'link',
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Content types');
  t('When viewing a link');
  $export['link-content-type'] = $context;

  return $export;
}

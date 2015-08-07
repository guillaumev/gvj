<?php
/**
 * @file
 * gvj_news.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function gvj_news_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_article_pattern';
  $strongarm->value = 'news/[node:title]';
  $export['pathauto_node_article_pattern'] = $strongarm;

  return $export;
}

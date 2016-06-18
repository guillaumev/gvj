<?php

/**
 * @file
 * Definition of Views\user\Plugin\views\access\Role.
 */

namespace Views\user\Plugin\views\access;

use Drupal\Core\Annotation\Plugin;
use Drupal\views\Plugin\views\access\AccessPluginBase;
use Drupal\Core\Annotation\Translation;

/**
 * Access plugin that provides role-based access control.
 *
 * @ingroup views_access_plugins
 *
 * @Plugin(
 *   id = "role",
 *   title = @Translation("Role"),
 *   help = @Translation("Access will be granted to users with any of the specified roles.")
 * )
 */
class Role extends AccessPluginBase {

  /**
   * Overrides Drupal\views\Plugin\Plugin::$usesOptions.
   */
  protected $usesOptions = TRUE;

  public function access($account) {
    return views_check_roles(array_filter($this->options['role']), $account);
  }

  function get_access_callback() {
    return array('views_check_roles', array(array_filter($this->options['role'])));
  }

  public function summaryTitle() {
    $count = count($this->options['role']);
    if ($count < 1) {
      return t('No role(s) selected');
    }
    elseif ($count > 1) {
      return t('Multiple roles');
    }
    else {
      $rids = user_roles();
      $rid = reset($this->options['role']);
      return check_plain($rids[$rid]);
    }
  }


  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['role'] = array('default' => array());

    return $options;
  }

  public function buildOptionsForm(&$form, &$form_state) {
    parent::buildOptionsForm($form, $form_state);
    $form['role'] = array(
      '#type' => 'checkboxes',
      '#title' => t('Role'),
      '#default_value' => $this->options['role'],
      '#options' => array_map('check_plain', $this->getRoles()),
      '#description' => t('Only the checked roles will be able to access this display. Note that users with "access all views" can see any view, regardless of role.'),
    );
  }

  public function validateOptionsForm(&$form, &$form_state) {
    if (!array_filter($form_state['values']['access_options']['role'])) {
      form_error($form['role'], t('You must select at least one role if type is "by role"'));
    }
  }

  public function submitOptionsForm(&$form, &$form_state) {
    // I hate checkboxes.
    $form_state['values']['access_options']['role'] = array_filter($form_state['values']['access_options']['role']);
  }

}

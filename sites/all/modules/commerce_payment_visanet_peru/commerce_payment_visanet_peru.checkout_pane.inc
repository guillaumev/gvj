<?php
/**
 * @file
 * Checkout pane callback functions for the commerce_payment_visanet_peru module.
 *
 * @todo Maybe re-write the pane output to use tokens and implement checkout
 * pane callback settings_form to choose the tokens.
 */

/**
 * Checkout pane callback: presents a completion message on the complete page.
 */
function commerce_payment_visanet_peru_checkout_completion_visanet_pane_checkout_form($form, &$form_state, $checkout_pane, $order) {
  global $base_url;
  $pane_form = array();
  // Make sure function from other pane is loaded.
  module_load_include('inc', 'commerce_checkout', 'includes/commerce_checkout.checkout_pane');

  $payment_method = commerce_payment_method_load(substr($order->data['payment_method'], 0, strpos($order->data['payment_method'], '|', 0)));
  if ($payment_method['method_id'] != 'commerce_payment_visanet_peru') {
    // Nothing to show.
    return $pane_form;
  }

  $order_wrapper = entity_metadata_wrapper('commerce_order', $order);
  $store_name = variable_get('site_name', 'Drupal');
  if (theme_get_setting('toggle_logo')) {
    $logo = array(
      'path' => theme_get_setting('logo'),
      'alt' => $store_name,
    );
    $logo_image = theme('image', $logo);
    $variables['logo'] = l($logo_image, '<front>', array('html' => TRUE));
  }
  $data[t('Store')] = $store_name;
  $data[t('Domain')] = $base_url;
  $data[t('Order number')] = $order->order_id;
  $order_total = $order_wrapper->commerce_order_total->value();
  $transactions = commerce_payment_transaction_load_multiple(array(), array('order_id' => $order->order_id, 'status' => COMMERCE_PAYMENT_STATUS_SUCCESS));
  // @todo Better way to retrieve last transaction?
  $current_transaction = array_shift($transactions);
  $data[t('Card')] = $current_transaction->payload['card_number'];
  $data[t('Card owner')] = $current_transaction->payload['card_owner'];
  $data[t('Date')] = $current_transaction->payload['tx_datetime'];
  $amount = commerce_currency_decimal_to_amount($current_transaction->payload['authorized_amount'], $order_total['currency_code']);
  $data[t('Authorized amount')] = commerce_currency_format($amount, $order_total['currency_code']);
  $visanet_terms_link = variable_get('commerce_payment_visanet_peru_global_terms_link', FALSE);
  $legal_links = array(
    l(t('Terms and conditions'), $visanet_terms_link),
  );
  $data[t('Useful links')] = theme('item_list', array('items' => $legal_links));
  $data[t('Notes')] = t('Please save this information.');

  // Re-use the review page.
  $pane_form = commerce_checkout_review_pane_checkout_form($form, $form_state, $checkout_pane, $order);
  // Add custom information required by visanet.
  $pane_form['review']['#data']['completion_visanet'] = array(
    'title' => t('Payment transaction'),
    'data' => $data,
  );

  return $pane_form;
}

<?php
// woocommerce

/**
 * Remove breadcrumbs
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10, 0);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10, 0);

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0);

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10, 0);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5, 0);

add_action('woocommerce_before_main_content', function () {
	// tutaj możemy modyfikować html przyczepiając go do odpowiedniej akcji
	echo '<div class="product-list">';
});

add_action('woocommerce_after_main_content', function () {
	// tutaj zamykamy poprzedni div
	echo '</div>';
});

add_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 5, 0);
add_action('woocommerce_sidebar', 'woocommerce_catalog_ordering', 15, 0);

// my account
function my_account_menu_order() {
 	$menuOrder = array(
    'edit-account'    	=> __( 'Szczegóły konta', '--nazwa-firmy--' ),
    'orders'             => __( 'Orders', 'woocommerce' ),
    'edit-address'       => __( 'Addresses', 'woocommerce' ),
    'customer-logout'    => __( 'Logout', 'woocommerce' ),
  );
  return $menuOrder;
 }
 add_filter ( 'woocommerce_account_menu_items', 'my_account_menu_order' );

// content-product
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10, 0);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_show_product_loop_sale_flash', 20);

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10, 0);
add_action('woocommerce_before_shop_loop_item_title', function() {
  echo '<div class="store-item__image">';
    echo woocommerce_get_product_thumbnail();
  echo '</div>';
});

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10, 0);
add_action('woocommerce_shop_loop_item_title', function() {
  echo '<div class="store-item__title"><p>' . get_the_title() . '</p></div>';
});

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5, 0);

// content single product

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10, 0);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10, 0);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20, 0);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10);
add_action('woocommerce_before_add_to_cart_button', 'woocommerce_template_single_price', 10);

remove_action('woocommerce_single_variation', 'woocommerce_single_variation', 10, 0);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40, 0);

// reviews
remove_action('woocommerce_review_before', 'woocommerce_review_display_gravatar', 10, 0);
remove_action('woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10, 0);

add_action('woocommerce_review_before_comment_text', 'woocommerce_review_display_rating', 10, 0);

// cart

remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10, 0);
add_action('woocommerce_after_cart_table', 'woocommerce_cross_sell_display', 10, 0);

// checkout

remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10, 0);
remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10, 0);
remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20, 0);

add_action('woocommerce_checkout_before_order_review', 'woocommerce_checkout_coupon_form', 10, 0);
add_action('woocommerce_checkout_after_customer_details', 'woocommerce_checkout_payment', 10, 0);

add_filter( 'woocommerce_checkout_fields', function($fields) {

  $fields['billing']['billing_address_2']['label'] = 'Nr mieszkania';
  $fields['shipping']['shipping_address_2']['label'] = 'Nr mieszkania';

  $fields['shipping']['shipping_phone'] = array(
    'label' => __('Phone', 'woocommerce'),
    'placeholder' => '',
    'required' => false,
    'priority' => 75,
    'clear' => true
  );

  $fields['shipping']['shipping_email'] = array(
    'label' => __('Email', 'woocommerce'),
    'placeholder' => '',
    'required' => false,
    'priority' => 80,
    'clear' => true
  );

  $order = array(
    'first_name',
    'last_name',
    'company',
    'address_1',
    'address_2',
    'city',
    'postcode',
    'country',
    'state',
    'email',
    'phone'
  );
  $types = ['billing', 'shipping'];
  $fields_ordered = [];
  foreach ($types as $type) {
    foreach ($order as $index => $field) {
      $fields_ordered[$type][$type.'_'.$field] = $fields[$type][$type.'_'.$field]; 
      $fields_ordered[$type][$type.'_'.$field]['priority'] = $index + 1;
      if ($index % 2 == 0) {
        $fields_ordered[$type][$type.'_'.$field]['class'] = array('form-element form-row-first');
      }
      if ($index % 2 == 1) {
        $fields_ordered[$type][$type.'_'.$field]['class'] = array('form-element form-row-last');
      }
      if ($type.'_'.$field == $type.'_country') {
        $fields_ordered[$type][$type.'_'.$field]['class'][] = 'update_totals_on_change';
      }
    }
  }

  $fields['billing'] = $fields_ordered['billing'];
  $fields['shipping'] = $fields_ordered['shipping'];

  return $fields;
} );

add_filter( 'woocommerce_default_address_fields', function( $fields ) {
  $fields['state']['priority'] = 9;
  $fields['address_1']['priority'] = 4;
  $fields['address_2']['priority'] = 5;
  return $fields;
} );


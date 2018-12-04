<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="shop_table woocommerce-checkout-review-order-table">
	<div class="checkout-summary__labels">
		<p><?php _e( 'Product', 'woocommerce' ); ?></p>
		<p><?php _e( 'Price', 'woocommerce' ); ?></p>
		<p><?php _e( 'Shipping', 'woocommerce' ); ?></p>
		<p><?php _e( 'Total', 'woocommerce' ); ?></p>
	</div>
	<?php
		do_action( 'woocommerce_review_order_before_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
				<div class="checkout-summary__item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
					<p><?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>, <?php echo __('Ilość', '--nazwa-firmy--'); ?>: <span><?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <span class="product-quantity">' . sprintf( $cart_item['quantity'] ) . '</span>', $cart_item, $cart_item_key ); ?></span></p>
					<p><?php echo apply_filters( 'woocommerce_cart_item_price', $_product->get_price(), $cart_item, $cart_item_key ) . '&nbsp;'; ?> <?php echo get_woocommerce_currency_symbol(); ?></p>
					<p><?php echo (floatval(WC()->cart->get_shipping_total())) ? number_format(WC()->cart->get_shipping_total()) . get_woocommerce_currency_symbol() : __('gratis', '--nazwa-firmy--') ?></p>
					<p><?php echo apply_filters( 'woocommerce_cart_item_price', $_product->get_price() * $cart_item['quantity'], $cart_item, $cart_item_key ) . '&nbsp;'; ?> <?php echo get_woocommerce_currency_symbol(); ?></p>
				</div>
				<?php
			}
		}

		do_action( 'woocommerce_review_order_after_cart_contents' );
	?>
	<div class="checkout-summary__total-price">
		<p><?php wc_cart_totals_order_total_html(); ?></p>
	</div>
</div>



<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
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
 * @version     2.3.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>

	<div class="content-box content-box--narrow">
		<h1 class="content-box__title">Dostawa</h1>
		<div class="cart-delivery">
			<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

				<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

				<?php wc_cart_totals_shipping_html(); ?>

				<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>

			<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

				<tr class="shipping">
					<th><?php _e( 'Shipping', 'woocommerce' ); ?></th>
					<td data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
				</tr>

			<?php endif; ?>

			<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>
		</div>
	</div>
	<div class="content-box content-box--narrow cart-summary">
		<h1 class="content-box__title">Łączna kwota</h1>
		<div class="cart-summary__breakdown">
			<div class="cart-summary__row">
				<span><?php echo __('Wartość produktów', '--nazwa-firmy--'); ?></span><span><?php wc_cart_totals_subtotal_html(); ?></span>
			</div>
			<div class="cart-summary__row">
				<span><?php echo __('Dostawa', '--nazwa-firmy--'); ?></span><span>{{ WC()->cart->get_shipping_total() }} {!! get_woocommerce_currency_symbol() !!}</span>
			</div>
		</div>
		<div class="cart-summary__total">
			<div class="cart-summary__row">
				<span><?php echo __('Kwota do zapłaty', '--nazwa-firmy--'); ?></span><?php wc_cart_totals_order_total_html(); ?><span</span>
			</div>
			<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
		</div>
	</div>

	<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
		<div class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
			<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
			<td data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>"><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
		</div>
	<?php endforeach; ?>

	<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>

	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

</div>

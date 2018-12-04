<?php
/**
 * Output a single payment method
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment-method.php.
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
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<li class="wc_payment_method payment_method_<?php echo $gateway->id; ?>">
	<label class="delivery-option" for="payment_method_<?php echo $gateway->id; ?>">
    <div class="delivery-option-wrapper">
      <input id="payment_method_<?php echo $gateway->id; ?>" type="radio" class="delivery-option__default-input input-radio" name="payment_method" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />
      <span class="delivery-option__styled-input"></span>
      <p class="delivery-option__name">
        <?php echo $gateway->get_title(); ?>
      </p>
      <div class="delivery-option__logo">
        <?php echo $gateway->get_icon(); ?>
      </div>
    </div>
    <?php if ( $gateway->has_fields() || $gateway->get_description() ) : ?>
        <div class="delivery-option_desc payment_box payment_method_<?php echo $gateway->id; ?>" <?php if ( ! $gateway->chosen ) : ?>style="display:none;"<?php endif; ?>>
          <?php $gateway->payment_fields(); ?>
        </div>
      <?php endif; ?>
	</label>
</li>
<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="single-product-content">
		<div class="single-product-content-nav">
			<?php $i = 0; foreach ( $tabs as $key => $tab ) : ?>
				<div class="single-product-content-nav__button {!! ($i == 0) ? 'single-product-content-nav__button--active' : '' !!}" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
					<p><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></p>
				</div>
			<?php $i++; endforeach; ?>
		</div>
		<div class="single-product-content-wrapper">
		<?php $i = 0; foreach ( $tabs as $key => $tab ) : ?>
			<div class="single-product-content-section single-product-content-section--<?php echo esc_attr( $key ); ?> <?php echo ($i == 0) ? 'single-product-content-section--active' : ''; ?>" id="singleProductContentSection_<?php echo $i; ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<?php if ( isset( $tab['callback'] ) ) { call_user_func( $tab['callback'], $key, $tab ); } ?>
			</div>
		<?php $i++; endforeach; ?>
		</div>
	</div>

<?php endif; ?>

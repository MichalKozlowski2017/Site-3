
<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<section class="cart-wrapper">
  <div class="content-container">
    <div class="cart-header">!!!!!!</div>
    <div class="white-container white-container--transparent cart-wrapper__flex-container">
      <div class="cart-wrapper__main">
        <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
          <?php do_action( 'woocommerce_before_cart_table' ); ?>

          <div class="shop_table cart shop_table_responsive woocommerce-cart-form__contents" cellspacing="0">
            <?php do_action( 'woocommerce_before_cart_contents' ); ?>
            <div class="content-box">
              <h1 class="content-box__title">
                <?php echo __('Cart', 'woocommerce'); ?> <span> (<?php echo __('Przedmioty: '); ?><?php echo WC()->cart->get_cart_contents_count(); ?>)</span>
              </h1>
              <ul class="cart-list">
                <?php
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                  $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                  $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                  if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                    $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                    ?>
                    <li class="cart-item woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

                      <div class="cart-item__image product-thumbnail">
                      <?php
                      $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                      if ( ! $product_permalink ) {
                        echo wp_kses_post( $thumbnail );
                      } else {
                        printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), wp_kses_post( $thumbnail ) );
                      }
                      ?>
                      </div>

                      <div class="cart-item__text">
                        <p class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                          <?php
                          if ( ! $product_permalink ) {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                          } else {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                          }

                          do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                          // Meta data.
                          echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                          // Backorder notification.
                          if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>' ) );
                          }
                          ?>
                        </p>
                        <p class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                          <?php
                            echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                          ?>
                        </p>
                      </div>

                      <div class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                      <?php
                      if ( $_product->is_sold_individually() ) {
                        $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                      } else {
                        $product_quantity = woocommerce_quantity_input( array(
                          'input_name'   => "cart[{$cart_item_key}][qty]",
                          'input_value'  => $cart_item['quantity'],
                          'max_value'    => $_product->get_max_purchase_quantity(),
                          'min_value'    => '0',
                          'product_name' => $_product->get_name(),
                        ), $_product, false );
                      }

                      echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                      ?>
                      </div>

                      <div class="product-remove">
                        
                        <?php
                          // @codingStandardsIgnoreLine
                          echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                            '<a href="%s" class="cart-item__remove remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><img src="/wp-content/themes/--nazwa-firmy--/dist/images/remove_btn.png" alt=""></a>',
                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                            __( 'Remove this item', 'woocommerce' ),
                            esc_attr( $product_id ),
                            esc_attr( $_product->get_sku() )
                          ), $cart_item_key );
                        ?>
                      </div>
                    </li>
                    <?php
                  }
                }
                ?>
              </ul>
              <button class="btn btn-yellow" type="submit" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
            </div>
            <?php do_action( 'woocommerce_cart_contents' ); ?>
            
            <?php if ( wc_coupons_enabled() ) { ?>
              <div class="content-box cart-voucher actions">
                <h1 class="content-box__title"><?php echo __('Kod rabatowy', '--nazwa-firmy--'); ?></h1>
                <input class="cart-voucher__fake-checkbox" type="checkbox" id="checkbox-toggle">
                <label href="#" class="cart-voucher__expand-btn" for="checkbox-toggle">+</label>
                <div class="cart-voucher__input">
                  <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" />
                  <button type="submit" class="btn btn-yellow" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
                  <?php do_action( 'woocommerce_cart_coupon' ); ?>
                </div>
                <div class="cart-voucher__text">
                  <p>(opcjonalnie)</p>
                </div>

                <?php do_action( 'woocommerce_cart_actions' ); ?>

                <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
              </div>
            <?php } ?>

            <?php do_action( 'woocommerce_after_cart_contents' ); ?>
          </div>
          <div class="content-box cart-payment-methods">
            <h1 class="content-box__title"><?php echo __('Akceptujemy', '--nazwa-firmy--'); ?></h1>
            <ul class="cart-list cart-payment-methods__list">
              <li>
                <a href="#">
                  <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/payment_logo_01.png" alt="">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/payment_logo_02.png" alt="">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/payment_logo_03.png" alt="">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/payment_logo_04.png" alt="">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/payment_logo_05.png" alt="">
                </a>
              </li>
            </ul>
          </div>

          <?php
           /**
             * woocommerce_after_cart_table
             *
             * @hooked woocommerce_cross_sell_display
             */
            do_action( 'woocommerce_after_cart_table' );
          ?>
        </form>
      </div>
      <div class="cart-wrapper__sidebar">
        <?php
          /**
           * Cart collaterals hook.
           *
           * @hooked woocommerce_cart_totals - 10
           */
          do_action( 'woocommerce_cart_collaterals' );
        ?>
      </div>
    </div>
  </div>
</section>

<?php do_action( 'woocommerce_after_cart' ); ?>

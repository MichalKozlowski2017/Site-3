<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
?>
@extends('layouts.app')
@section('content')

<?php
  /**
   * woocommerce_before_main_content hook.
   *
   * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
   * @hooked woocommerce_breadcrumb - 20
   */
  do_action( 'woocommerce_before_main_content' );
?>

<section class="single-product-section">
  <div class="content-container">
    <div class="content-container__wrapper white-container">
      {{-- HEADER --}}
      <div class="single-product-header">
        <a href="#" class="single-product-header__button">
          <div class="single-product-header__left">
            <div class="single-product-header-wrapper">
              <div class="single-product-header__left__icon"></div>
              <p>Darmowa dostawa na terenie Polski</p>
            </div>
          </div>
        </a>
        <a href="#" class="single-product-header__button">
          <div class="single-product-header__right">
            <div class="single-product-header-wrapper">
              <div class="single-product-header__right__icon"></div>
              <p>Porównaj produkty</p>
            </div>
          </div>
        </a>
      </div>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php wc_get_template_part( 'content', 'single-product' ); ?>

      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</section>
<?php
  /**
   * woocommerce_after_main_content hook.
   *
   * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
   */
  do_action( 'woocommerce_after_main_content' );
?>
@endsection

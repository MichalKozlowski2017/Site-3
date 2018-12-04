<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
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

global $wp;

switch ($orderby) {
  case 'rating':
    $orderby_nice = __('średnia ocena', '--nazwa-firmy--');
    break;
  case 'popularity':
    $orderby_nice = __('popularność', '--nazwa-firmy--');
    break;
  case 'date':
    $orderby_nice = __('data dodania', '--nazwa-firmy--');
    break;
  case 'price':
    $orderby_nice = __('od najniższej ceny', '--nazwa-firmy--');
    break;
  case 'price-desc':
    $orderby_nice = __('od najwyższej ceny', '--nazwa-firmy--');
    break;
  default:
    $orderby_nice = '';
    break;
}

?>

<div class="store-menu">
  <input class="store-menu__fake-checkbox" type="checkbox" id="sorting-toggle">
  <label class="store-menu__expand" for="sorting-toggle">
    <p>Sortowanie: {{ $orderby_nice }}</p>
    <i class="fas fa-caret-down"></i>
  </label>
  <ul class="store-menu__list">
    <?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
      <li class="store-menu__item <?php echo ( selected( $orderby, $id, false ) == " selected='selected'" ) ? 'store-menu__item--is-active' : '' ?>">
        <a href="{!! home_url( $wp->request ) !!}?orderby={{ esc_attr( $id ) }}">{{ esc_html( $name ) }}</a>
      </li>
      <?php endforeach; ?>
  </ul>
</div>
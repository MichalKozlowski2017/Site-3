<?php
/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<?php

  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty,
         'exclude'      => '15'
  );
  $all_categories = get_categories( $args );

  $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<div class="store-menu">
  <input class="store-menu__fake-checkbox" type="checkbox" id="categories-toggle">
  <label class="store-menu__expand" for="categories-toggle">
    <p>Kategoria: {!! ($term) ? $term->name : '' !!}</p>
    <i class="fas fa-caret-down"></i>
  </label>
  <ul class="store-menu__list">
    <li class="store-menu__item {!! (!$term) ? 'store-menu__item--is-active' : '' !!}">
      <a href="/sklep">Wszystkie</a>
    </li>
    @foreach ($all_categories as $cat)
      <li class="store-menu__item {!! ($term->term_id == $cat->term_id) ? 'store-menu__item--is-active' : '' !!}">
        <a href="{!! get_term_link($cat->slug, 'product_cat') !!}">{!! $cat->name !!}</a>
      </li>
    @endforeach
  </ul>
</div>


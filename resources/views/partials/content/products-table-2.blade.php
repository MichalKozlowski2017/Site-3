@php
  $title = get_sub_field('title');
  $section_bg = get_sub_field('section_bg');
  $products = get_sub_field('products');
@endphp
<section class="products-table-2">
  <div class="content-container">
    <div class="content-container__wrapper">
      <div class="content-title">
        <h2>{!! $title !!}</h2>
      </div>
      <div class="products-table-2-wrapper">
        @foreach ($products as $product)
          <div class="products-table-product">
            <div class="products-table-product__image" style="background-image: url({{ $product['image']['sizes']['products_table_badge'] }});">
              <div class="products-table-product__image__name">
                <h3>{!! $product['name'] !!}</h3>
              </div>
            </div>
            <div class="products-table-product__badges">
            @foreach ($product['badges'] as $badge)
              <div class="products-table-product__badges__badge" style="background-image: url({{ $badge['image']['sizes']['products_table_badge'] }});">

              </div>
            @endforeach
            </div>
            <div class="products-table-product__buttons">
              @foreach ($product['buttons'] as $button)
                <a href="{{$button['button_link']}}" class="btn btn--{{ $button['button_style'] }}">{{$button['button_text']}}</a>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<script>
    jQuery(document).ready(function () {


      $window = jQuery(window);
      $products_slider = jQuery('.products-table-2-wrapper');
      settings = {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        adaptiveHeight: true,
        dots: true,
        mobileFirst: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        nextArrow: '<div class="slider-arrow slider-arrow--next"><i class="fa fa-caret-right"></i>',
        prevArrow: '<div class="slider-arrow slider-arrow--prev"><i class="fa fa-caret-left"></i>',
        responsive: [
          {
            breakpoint: 992,
            settings: "unslick",
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
      };

      $products_slider.slick(settings);

      jQuery('.products-table-product').hover(function(){
        jQuery(this).siblings().toggleClass('product-hovered');
      });
    });
  </script>

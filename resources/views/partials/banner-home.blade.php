@php
  $banner_1_title = get_field('banner_1_title');
  $banner_1_text = get_field('banner_1_text');
  $banner_1_buttons = get_field('banner_1_buttons');
  $banner_2_title = get_field('banner_2_title');
  $banner_2_text = get_field('banner_2_text');
  $banner_2_buttons = get_field('banner_2_buttons');
  $banner_products_badge = get_field('banner_products_badge');
  $banner_products = get_field('banner_products');
@endphp
@if ($banner_1_title && $banner_1_text)
<section class="banner banner--home">
  <div class="banner-moon">
    <div class="banner-moon__moon"></div>
  </div>
  <div class="content-container">
    <div class="banner-text-content">
      <div class="banner-text-content__title">
        <h1>{!!$banner_1_title!!}</h1>
      </div>
      <div class="banner-text-content__text">
        <p>{!!$banner_1_text!!}</p>
      </div>
      @if ($banner_1_buttons)
      <div class="banner-text-content__buttons">
        @foreach ($banner_1_buttons as $button)
          <a href="{{$button['btn_link']}}" class="btn btn--{{$button['kolor']}}">{{$button['btn_text']}}</a>
        @endforeach
      </div>
      @endif
      
    </div>
  </div>
  <div class="banner-product-content banner-product-content--product">
    <div class="banner-product-content--product__badge" style="background-image: url({{$banner_products_badge['sizes']['banner_home_products_badge']}});">
    
    </div>
    <div class="banner-product-content--product__product" style="background-image: url({{$banner_products['sizes']['banner_home_products']}});">
      
    </div>
  </div>
</section>
@endif
@if ($banner_2_title && $banner_2_text)
<section class="banner banner--home">
  <div data-relative-input="true" class="scene" id="treesBanner">
    <div data-depth="0.01" class="trees-1"></div>
    <div data-depth="0.04" class="trees-2"></div>
  </div>
  <div class="villages">
    <div class="village village-1"></div>
    <div class="village village-2"></div>
    <div class="village village-3"></div>
    <div class="village village-4"></div>
    <div class="village village-5"></div>
  </div>
  <div class="waves">
    <div class="wave wave-2"></div>
    <div class="wave wave-1"></div>
  </div>
  <div class="content-container">
    <div class="banner-text-content">
      <div class="banner-text-content__title">
        <h1>{!!$banner_2_title!!}</h1>
      </div>
      <div class="banner-text-content__text">
        <p>{!!$banner_2_text!!}</p>
      </div>
      @if ($banner_2_buttons)
      <div class="banner-text-content__buttons">
        @foreach ($banner_2_buttons as $button)
            <a href="{{$button['btn_link']}}" class="btn btn--{{$button['kolor']}}">{{$button['btn_text']}}</a>
        @endforeach
      </div>
      @endif
      
    </div>
  </div>
  <div class="banner-product-content banner-product-content--audio">
    <div class="banner-product-content--audio__audio">
      
    </div>
  </div>
  
</section>
@endif
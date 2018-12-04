@php
  $banners = get_sub_field('banners');
@endphp


@foreach ($banners as $banner)
  @if ($banner['banner_type'] != 'slider')
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
    <div class="banner-moon">
      <div class="banner-moon__moon"></div>
    </div>
    <div class="content-container">
      <div class="banner-text-content">
        @if ($banner['title'])
          <div class="banner-text-content__title">
            <h1>{!! $banner['title'] !!}</h1>
          </div>
        @endif
        @if ($banner['text'])
          <div class="banner-text-content__text">
            <p>{!! $banner['text'] !!}</p>
          </div>
        @endif
        @if ($banner['buttons'])
        <div class="banner-text-content__buttons">
          @foreach ($banner['buttons'] as $button)
            <a href="{{$button['button_link']}}" class="btn btn--{{$button['button_style']}}">{{$button['button_text']}}</a>
          @endforeach
        </div>
        @endif
      </div>
    </div>
    @if ($banner['banner_type'] == 'image')
      <div class="banner-product-content banner-product-content--product">
        <div class="banner-product-content--product__product" style="background-image: url({{$banner['image']['sizes']['banner_home_products']}});">

        </div>
      </div>
    @elseif ($banner['banner_type'] == 'sound')
      <div class="banner-product-content banner-product-content--audio">
        <div class="banner-product-content--audio__audio">

        </div>
      </div>
    @elseif ($banner['banner_type'] == 'video')
      <div class="banner-product-content banner-product-content--video">
        <div class="banner-product-content--video__video" style="background-image: url({{ $banner['video_placeholder'] }});">
          <div class="btn btn--play"></div>
        </div>
      </div>
    @endif
  </section>
  @else
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
    <div class="banner-moon">
      <div class="banner-moon__moon"></div>
    </div>
    <div class="content-container content-container--slick">
      @foreach ($banner['slider'] as $slide)
      <div>
        <div class="content-container-slide">
          <div class="banner-text-content content-container-slide__text">
            <div class="banner-text-content__title">
              <h2>{!! $slide['title'] !!}</h2>
            </div>
            <div class="banner-text-content__text">
              <p>{!! $slide['text'] !!}</p>
            </div>
          </div>
          <div class="content-container-slide__image">
            <img src="{{ $slide['image']['sizes']['banner_home_products'] }}" alt="{{ $slide['title'] }}">
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <script>
      jQuery(document).ready(function () {
        jQuery('.content-container--slick').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: false,
          autoplay: false,
          autoplaySpeed: 2000,
          infinite: true,
          dots: true,
          speed: 500,
          fade: true,
          adaptiveHeight: true,
          nextArrow: '<div class="slider-arrow slider-arrow--next"><i class="fa fa-caret-right"></i>',
          prevArrow: '<div class="slider-arrow slider-arrow--prev"><i class="fa fa-caret-left"></i>',
        });
      });
    </script>
  </section>
  @endif

@endforeach


@php
  $title = get_sub_field('title');
  $image = get_sub_field('image');
  $slides = get_sub_field('slides');
@endphp

<section class="slider-niedoskonale">
  <div class="content-container">
    <div class="content-container__left">
       <div class="slider-niedoskonale-wrapper" id="niedoskonaleSlider">
        @foreach ($slides as $slide)
          <div class="slider-niedoskonale-slide">
            <div class="content-title">
              <h2>
                {!! $slide['title'] !!}
              </h2>
            </div>
            <div class="content-text">
              {!! $slide['text'] !!}
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="content-container__right" style="background-image: url({{ $image['sizes']['slider_niedoskonale'] }})">
      
    </div>
  </div>
</section>

<script>
  jQuery(document).ready(function () {
    jQuery('.slider-niedoskonale-wrapper').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: false,
      autoplay: false,
      autoplaySpeed: 2000,
      infinite: true,
      dots: true,
      speed: 500,
      fade: false,
      nextArrow: '<div class="slider-arrow slider-arrow--next"><i class="fa fa-caret-right"></i>',
      prevArrow: '<div class="slider-arrow slider-arrow--prev"><i class="fa fa-caret-left"></i>',
    });
  });
</script>
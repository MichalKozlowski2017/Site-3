@php
  $title = get_sub_field('title');
  $slides = get_sub_field('slides');
@endphp

<section class="slider-timeline">
  <div class="content-container">
    <div class="content-container__left">
      <div class="content-title">
        <h2>{!!$title!!}</h2>
      </div>
    </div>
    <div class="content-container__right">
      <div class="slider-timeline-wrapper" id="timelineSlider">
        @foreach ($slides as $slide)
          <div class="slider-timeline-slide">
            <div class="slider-timeline-slide__date" style="background-image: url({{ $slide['background'] }});">
              <div>
                {!!$slide['date']!!}
              </div>
            </div>
            <div class="slider-timeline-slide__text">
              <p>{!!$slide['text']!!}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    
  </div>
</section>

<script>
  jQuery(document).ready(function () {
    jQuery('.slider-timeline-wrapper').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: false,
      autoplay: false,
      autoplaySpeed: 2000,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      nextArrow: '<div class="slider-arrow slider-arrow--next"><i class="fa fa-caret-right"></i>',
      prevArrow: '<div class="slider-arrow slider-arrow--prev"><i class="fa fa-caret-left"></i>',
    });
  });
</script>
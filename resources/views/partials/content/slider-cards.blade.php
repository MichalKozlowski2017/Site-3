@php
  $section_bg = get_sub_field('section_bg');
  $slides = get_sub_field('slides');
@endphp
@if ($slides)
<section class="slider-cards" style="background-image: url({{$section_bg}});">
  <div class="content-container">
    <div class="slider-cards-wrapper" id="cardsSlider">
      @foreach ($slides as $slide)
        <div class="slider-cards-card">
          <div class="slider-cards-card__title">
            <h2>{!!$slide['title']!!}</h2>
          </div>
          <div class="slider-cards-card__text">
            <p>{!!$slide['text']!!}</p>
          </div>
          <div class="slider-cards-card__footer">
            <a href="{{$slide['btn_link']}}" class="btn btn--yellow">{{$slide['btn_text']}}</a>
          </div>
        </div>
      @endforeach
    </div>
    <div class="slider-cards-backslide-1"></div>
    <div class="slider-cards-backslide-2"></div>
  </div>
</section>
<script>
  jQuery(document).ready(function () {
    jQuery('.slider-cards-wrapper').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      autoplay: false,
      autoplaySpeed: 2000,
      dots: true,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      nextArrow: '<div class="slider-cards-next"><i class="fa fa-caret-right"></i>',
      prevArrow: '<div class="slider-cards-prev"><i class="fa fa-caret-left"></i>',
    });

    // Slider card animation
    cardsAnimation(cardsSlider);

    function cardsAnimation(sliderId) {
      const backslide1 = jQuery('.slider-cards-backslide-1');
      const backslide2 = jQuery('.slider-cards-backslide-2');

      backslide1.css('height', '100px');
    };


    jQuery('.slider-cards-wrapper').on('beforeChange', function(){
      cardsAnimation(cardsSlider);
    });

  });
</script>
@endif
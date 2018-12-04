@extends('layouts.app')

@section('content')
  <section class="blog">
    <div class="blog-moon">
      <div class="blog-moon__moon"></div>
    </div>
    <div class="wide-container">
      @php $ID = get_option( 'page_for_posts' ); $slider = get_field('slider', $ID) @endphp
      <div class="blog-slider">
        @foreach ($slider as $slide)
          <div class="wide-container__wrapper">
            <div class="blog-slider-content">
              <div class="blog-slider-content__details">
                <p> {!! get_the_date('j.m.Y', $item) !!}</p>
                @php $categories = get_the_category($item->ID); $category = array_shift($categories) @endphp
                <p>{!! $category->name !!}</p>
              </div>
              <div class="blog-slider-content__title">
                <h1>{!! $slide->post_title !!}</h1>
              </div>
              <div class="blog-slider-content__buttons">
                <a href="{!! get_the_permalink($slide->ID) !!}" class="btn btn-yellow">
                  Przejdź do artykułu
                </a>
              </div>
            </div>
            <div class="blog-slider-img">
              {!! get_the_post_thumbnail($post->ID, 'slider_blog') !!}
            </div>
          </div>
        @endforeach
      </div>
      <div class="blog-menu">
        <input class="blog-menu__fake-checkbox" type="checkbox" id="blog-categories-toggle">
        <label class="blog-menu__expand" for="blog-categories-toggle">
          <div class="cat-item blog-menu__current">
            <i class="fas fa-caret-down"></i>
            <p>
              Wybrana kategoria: <span>
                @if (!empty(get_queried_object()->name))
                  {!! get_queried_object()->name !!}
                @else
                  Wszystkie
                @endif
              </span>
            </p>
          </div>
        </label>
        <ul class="blog-menu__list">
          {!! wp_list_categories(array(
              'hide_empty' => 0,
              'exclude' => '1',
              'show_option_all' => 'Wszystkie',
              'title_li' => ''
            )) !!}
        </ul>
      </div>
      <div class="blog-list">
        @while (have_posts()) @php(the_post())
          @include('partials.content-'.get_post_type())
        @endwhile
      </div>
      {!! get_the_posts_navigation() !!}
    </div>
  </section>
  <script>
    jQuery(document).ready(function () {
      jQuery('.blog-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        autoplay: false,
        autoplaySpeed: 2000,
        adaptiveHeight: true,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        nextArrow: '<div class="slider-arrow slider-arrow--next"><i class="fa fa-caret-right"></i>',
        prevArrow: '<div class="slider-arrow slider-arrow--prev"><i class="fa fa-caret-left"></i>',
      });
    });
  </script>

@endsection



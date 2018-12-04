@php
  $banner_title = get_field('banner_title');
  $banner_text = get_field('banner_text');
  $banner_buttons = get_field('banner_buttons');
  $banner_option = get_field('banner_option');
  $banner_video_placeholder = get_field('banner_video_placeholder');
@endphp
@if ($banner_title)
<section class="banner banner--about">
  <div class="banner-moon">
    <div class="banner-moon__moon"></div>
  </div>
  <div class="content-container">
    <div class="banner-text-content">
      <div class="banner-text-content__title">
        <h1>{!!$banner_title!!}</h1>
      </div>
      @if ($banner_text)
        <div class="banner-text-content__text">
          <p>{!! $banner_text !!}!!}</p>
        </div>
      @endif
      
      @if ($banner_buttons)
      <div class="banner-text-content__buttons">
        @foreach ($banner_buttons as $button)
          <a href="{{$button['btn_link']}}" class="btn btn--{{$button['kolor']}}">{{$button['btn_text']}}</a>
        @endforeach
      </div>
      @endif
      
    </div>
  </div>
  @if ($banner_option == 'video')
    <div class="banner-product-content banner-product-content--video">
      <div class="banner-product-content--video__video" style="background-image: url({{ $banner_video_placeholder }});">
        <div class="btn btn--play"></div>
      </div>
    </div>
  @else
    <div class="banner-product-content banner-product-content--image">
      <div class="banner-product-content--video__image">
      </div>
    </div>
  @endif
  
</section>
@endif
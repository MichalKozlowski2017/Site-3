@php
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $btn_text = get_sub_field('btn_text');
  $btn_link = get_sub_field('btn_link');
  $section_image = get_sub_field('section_image')['sizes']['banner_home_products'];
@endphp
<section class="section-company">
  <div class="content-container">
    <div class="content-container__wrapper">
      <div class="content-title">
        <h2>{!!$title!!}</h2>
      </div>
      <div class="content-text">
        <p>{!!$text!!}</p>
      </div>
     <a href="{{$btn_link}}" class="btn btn--yellow">{{$btn_text}}</a>
    </div>
  </div>
  <div class="section-image" style="background-image: url({{$section_image}})">

  </div>
</section>
@php
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $background = get_sub_field('background_color');
  $buttons = get_sub_field('buttons');
  $image = get_sub_field('image')['sizes']['section_image'];
@endphp

<section class="section-standard" style="background-color: {{ $background }}">
  <div class="content-container">
    <div class="content-container__wrapper">
      <div class="content-title">
        <h2>{!!$title!!}</h2>
      </div>
      <div class="content-text">
        {!!$text!!}
      </div>
      @if ($buttons)
        <div class="content-buttons">
          @foreach ($buttons as $button)
            <a href="{{$button['button_link']}}" class="btn btn--{{ $button['button_style'] }}">{{$button['button_text']}}</a>
          @endforeach
        </div>
      @endif
    </div>
  </div>
  <div class="content-image">
    <img src="{{$image}}" alt="{!! $title !!}">
  </div>
</section>

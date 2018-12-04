@php
  $title = get_sub_field('title');
  $badge = get_sub_field('badge')['sizes']['landing_title_badge'];
  $text = get_sub_field('text');
  $image_type = get_sub_field('image_type');
  $background_image = get_sub_field('background_image');
  $regular_image = get_sub_field('regular_image')['sizes']['section_image'];
  $background_color = get_sub_field('background_color');
  $buttons = get_sub_field('buttons');
  $left_or_right = get_sub_field('left_or_right');
@endphp
@if ($image_type == 'background')
  <section class="section-landing section-landing--{{ $left_or_right }}" style="background-color: {{ $background_color }}; background-image: url({{ $background_image }});">
@else
  <section class="section-landing section-landing--{{ $left_or_right }}" style="background-color: {{ $background_color }};">
@endif
  <div class="content-container">
    <div class="content-container__wrapper">
      @if ($title)
        <div class="content-title">
          <h2>{!!$title!!}</h2>
          @if ($badge)
            <div class="content-title__badge" style="background: url({{ $badge }});"></div>
          @endif
        </div>
      @endif
      @if ($text)
        <div class="content-text">
          {!!$text!!}
        </div>
      @endif
      @if ($buttons)
        <div class="content-buttons">
          @foreach ($buttons as $button)
            <a href="{{$button['button_link']}}" class="btn btn--{{ $button['button_style'] }}">{{$button['button_text']}}</a>
          @endforeach
        </div>
      @endif
    </div>
  </div>
  @if ($image_type == 'regular')
    <div class="content-image-section">
      <img src="{{$regular_image}}" alt="{!! $title !!}">
    </div>
  @endif
</section>



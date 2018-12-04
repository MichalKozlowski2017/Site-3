@php
  $title = get_sub_field('title');
  $awards = get_sub_field('awards');
@endphp
<section class="awards">
  <div class="content-container">
    <div class="content-title">
      <h2>
        {!! $title !!}
      </h2>
      <div class="awards__wrapper">
        @foreach ($awards as $award)
          <div class="award-logo" style="background-image: url({{ $award['logo']['sizes']['partner'] }})">
          </div>
        @endforeach
        <a class="load-more-awards load-more-logos btn btn--white">
          <h3 class="rest-awards" id="restAwards">+25</h3>
          Pokaz wszystkie
        </a>
      </div>
    </div>
  </div>
</section>

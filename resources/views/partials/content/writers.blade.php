@php
  $title = get_sub_field('title');
  $writers = get_sub_field('writers');
@endphp
<section class="writers">
  <div class="content-container">
    <div class="content-title">
      <h2>
        {!! $title !!}
      </h2>
      <div class="writers__wrapper">
        @foreach ($writers as $writer)
          <div class="writer-logo" style="background-image: url({{ $writer['logo']['sizes']['partner'] }})">
          </div>
        @endforeach
        <a class="load-more-writers load-more-logos btn btn--white">
          <h3 class="rest-writers" id="restWriters"></h3>
          <button>Pokaz wszystkie</button>
        </a>
      </div>
    </div>
  </div>
</section>

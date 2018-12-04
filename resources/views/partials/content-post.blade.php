<div @php post_class('blog-list__entry') @endphp >
  <div class="blog-entry-image" style="background-image: url({!! get_the_post_thumbnail_url($post->ID, 'thumbnail') !!});">

  </div>
  <div class="blog-entry-content">
    <div class="blog-entry-content__details">
      <span>{!! get_the_date() !!}</span>,&nbsp;
      @php $categories = get_the_category(); $category = array_shift($categories) @endphp
      <span>{!! $category->name !!}</span>
    </div>
    <span class="blog-entry-content__title">
      <h3>{!! get_the_title() !!}</h3>
    </span>
  </div>
  <a href="{!! get_the_permalink() !!}" class="blog-entry-content__overlay">
    <span class="btn btn--blue">
      Przejdź do artykułu
    </span>
  </a>
</div>

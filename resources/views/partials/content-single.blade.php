<article @php post_class() @endphp>
  <div class="blog-single">
    <div class="blog-moon-single">
      <div class="blog-moon-single__moon"></div>
    </div>
    <div class="wide-container blog-single__entry-background">
      <div class="header-image">
        // change src
        <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/resources/assets/images/placeholder-image.jpg">
      </div>
      <div class="wide-container__wrapper">
        <header class="blog-single__header">
          <h1 class="entry-title">{{ get_the_title() }}</h1>
          @include('partials/entry-meta')
        </header>
        <div class="blog-single__main">
          <div class="blog-single__entry-content">
            @php the_content() @endphp
          </div>
          {{-- html do tych quotations i pola z autorem na dole strony
          <div class="bloc-highlight">
            <div class="bloc-highlight__image">
              <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/resources/assets/images/quotation_mark.png" alt="">
            </div>
            <div class="bloc-highlight__text">
              <p>Oczywiście przy małym dziecku jest stale coś do zrobienia. Ale postaraj się ograniczyć męczące czynności. Mały ssak pewnie będzie całkiem zadowolony, jeśli będziesz z nim przez cały dzień polegiwać.</p>
            </div>
            <div class="bloc-highlight__author">
              <p><strong>Lorem ipsum</strong>, lekarz w lorem ipsum</p>
            </div>
          </div>
          --}}
          <aside class="blog-single__sidebar">
            <div class="store-item">
          <div class="store-item__on-offer">
            <p>-25%</p>
          </div>
          <div class="store-item__image">
            <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/leniwiec.jpg">
          </div>
          <div class="store-item__options">
            <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/option_yellow.png" alt="">
            <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/option_blue.png" alt="">
            <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/option_red.png" alt="">
          </div>
          <div class="store-item__title">
            <p>Mis więcej więcej tekstu lorem ipsum adca acqce</p>
          </div>
          <div class="store-item__price">
            <p>299.00 PLN</p>
          </div>
          <div class="store-item__buttons">
            <a href="" class="btn btn-yellow">
              Dodaj do koszyka
            </a>
            <a href="" class="btn btn--noborder">
              Dowiedz się więcej
            </a>
          </div>
          </aside>
        </div>
        <footer>
          {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>
        {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
      </div>
    </div>
  </div>
</article>

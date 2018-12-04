<footer class="footer homepage-footer">
  {{-- <div  class="scene" id="sceneFooter">
    <div class="trees-1 parallax-window"></div>
    <div class="trees-2"></div>
  </div> --}}
  <div class="content-container">
    <div class="countdown">
      <div class="countdown-left">
        <div class="countdown__title">
          Zamów przed 12:00 <br>
          i odbierz swojego<br>
          pomocnika już pojutrze!
        </div>
        <div class="countdown__button">
          <a href="#" class="btn btn--yellow">Wybierz pomocnika</a>
        </div>
      </div>
      <div class="countdown-right">
        <div class="countdown-timer">
          <div id="timerHours" class="countdown-timer__digit ountdown-timer__digit--hours">04</div>
          <div class="countdown-timer__separator">:</div>
          <div id="timerMinutes" class="countdown-timer__digit ountdown-timer__digit--minutes">20</div>
          <div class="countdown-timer__separator">:</div>
          <div id="timerSeconds" class="countdown-timer__digit ountdown-timer__digit--seconds">16</div>
        </div>
        <div class="countdown__button">
          <a href="#" class="btn btn--yellow">Wybierz pomocnika</a>
        </div>
      </div>
    </div>

  </div>
  <div class="content-container">
    <div class="content-container__wrapper white-container white-container--footer">
      <div class="footer-nav">
        <div class="footer-nav__above-section">
          <div class="breadcrumbs">{{ App\get_breadcrumb() }}</div>
          <div class="back-to-top"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
        </div>
        <div class="footer-nav__below-section">
          @php wp_nav_menu( array('theme_location' => 'footer-menu' ) )
          @endphp
        </div>

      </div>
    </div>
  </div>
</footer>

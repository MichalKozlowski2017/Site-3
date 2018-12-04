<header class="header-nav">
  <div class="content-container">
    <div class="header-nav__wrapper">
      @if ( function_exists( 'the_custom_logo' ) )
      {!!the_custom_logo()!!}
      @endif
      <div class="mobile-btn" id="mobileBtn">
        <div class="mobile-btn__hamburger">
          <div class="hamburger hamburger--collapse">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div>
        </div>
        <div class="mobile-btn__text">Menu</div>
      </div>
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
      @if (!is_cart() && !is_checkout())
        <div class="cart-btn">
          <div class="cart-btn__popup">
            <a href="{{wc_get_cart_url()}}" class="cart-btn__icon">

            </a>
          </div>
        </div>
      @endif
    </div>
  </div>
  {{-- <div class="login-btn">

  </div> --}}
</header>

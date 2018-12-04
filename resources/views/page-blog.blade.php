{{--
  Template Name: Blog
--}}
@extends('layouts.app')
@section('content')

<section class="blog">
  <div class="blog-moon">
    <div class="blog-moon__moon"></div>
  </div>
  <div class="wide-container">
    <div class="blog-slider">
      <div class="slider-arrow slider-arrow--prev slick-arrow">
          <i class="fa fa-caret-left"></i>
      </div>
      <div class="wide-container__wrapper">
        <div class="blog-slider-content">
          <div class="blog-slider-content__details">
            <p>01.01.2001</p>
            <p>Porady & opinie</p>
          </div>
          <div class="blog-slider-content__title">
            <h1>Słomkowo: szumiący miś to szansa na lepszy sen!</h1>
          </div>
          <div class="blog-slider-content__buttons">
            <a href="#" class="btn btn-yellow">
              Przejdź do artykułu
            </a>
          </div>
        </div>
        <div class="blog-slider-img">
          <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/blog-slider.jpg" alt="">
        </div>
      </div>
      <div class="slider-arrow slider-arrow--next slick-arrow">
          <i class="fa fa-caret-right"></i>
      </div>
    </div>
    <ul class="blog-menu">
      <li class="blog-menu__item">Wszystkie wpisy</li>
      <li class="blog-menu__item">Porady & opinie</li>
      <li class="blog-menu__item">Recenzje użytkowników</li>
      <li class="blog-menu__item">Recenzje specjalistów</li>
      <li class="blog-menu__item">media & aktualności</li>
    </ul>
    <div class="blog-list">

      <a class="blog-list__entry">
        <div class="blog-entry-image">
          <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/blog-thumbnail.jpg" alt="">
        </div>
        <div class="blog-entry-content">
          <div class="blog-entry-content__details">
            <p>01.01.2001, <span>Recenzje użytkowników</span></p>
          </div>
          <div class="blog-entry-content__title">
            <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed...</h3>
          </div>
        </div>
        <div class="blog-entry-content__overlay">
          <p>Przejdź do artykułu</p>
        </div>
      </a>

      <div class="blog-list__entry">
        <div class="blog-entry-image">
          {{-- src do zmiany --}}
          <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/blog-thumbnail.jpg" alt="">
        </div>
        <div class="blog-entry-content">
          <div class="blog-entry-content__details">
            <p>01.01.2001,</p>
            <p>Recenzje użytkowników</p>
          </div>
          <div class="blog-entry-content__title">
            <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed...</h3>
          </div>
        </div>
      </div>
      <div class="blog-list__entry">
        <div class="blog-entry-image">
          {{-- src do zmiany --}}
          <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/blog-thumbnail.jpg" alt="">
        </div>
        <div class="blog-entry-content">
          <div class="blog-entry-content__details">
            <p>01.01.2001,</p>
            <p>Recenzje użytkowników</p>
          </div>
          <div class="blog-entry-content__title">
            <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed...</h3>
          </div>
        </div>
      </div>
      <div class="blog-list__entry">
        <div class="blog-entry-image">
          {{-- src do zmiany --}}
          <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/blog-thumbnail.jpg" alt="">
        </div>
        <div class="blog-entry-content">
          <div class="blog-entry-content__details">
            <p>01.01.2001,</p>
            <p>Recenzje użytkowników</p>
          </div>
          <div class="blog-entry-content__title">
            <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed...</h3>
          </div>
        </div>
      </div>
      <div class="blog-list__entry">
        <div class="blog-entry-image">
          {{-- src do zmiany --}}
          <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/blog-thumbnail.jpg" alt="">
        </div>
        <div class="blog-entry-content">
          <div class="blog-entry-content__details">
            <p>01.01.2001,</p>
            <p>Recenzje użytkowników</p>
          </div>
          <div class="blog-entry-content__title">
            <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed...</h3>
          </div>
        </div>
      </div>
      <div class="blog-list__entry">
        <div class="blog-entry-image">
          {{-- src do zmiany --}}
          <img src="//localhost:3000/wp-content/themes/--nazwa-firmy--/dist/images/blog-thumbnail.jpg" alt="">
        </div>
        <div class="blog-entry-content">
          <div class="blog-entry-content__details">
            <p>01.01.2001,</p>
            <p>Recenzje użytkowników</p>
          </div>
          <div class="blog-entry-content__title">
            <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed...</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

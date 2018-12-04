@php
  $products = get_sub_field('product');
  $section_bg = get_sub_field('section_bg');
@endphp
<section class="products-table" style="background-image: url({{$section_bg}});">
  <div class="content-container">
    <div class="content-title">
      <h2><b>Wybierz</b> idealnego pomocnika</h2>
    </div>

    <div class="products-table-wrapper">
      <div class="products-table-wrapper-products">
        <div class="products-table-wrapper-products__desc products-table-wrapper-products-list">
          <ul>
            <li>&nbsp;</li>
            <li>Aplikacja z asystentem rodzica</li>
            <li>CRYsensor</li>
            <li>Szumienie z regulacją głośności</li>
            <li>Dożywotnia gwarancja</li>
          </ul>
        </div>
        @foreach ($products as $product)
        <div class="products-table-wrapper-products__product products-table-wrapper-products-list">
          <div class="products-table-wrapper-products-list__image" style="background-image: url({{$product['image']['sizes']['products_table_image']}})">
          </div>
          <ul>
            <li>{{$product['product_name']}}</li>
            @foreach ($product['product_options'] as $option)
              <li>
                @if ($option['opcja'])
                  <div class="products-table-wrapper-products-list__tick"></div>
                @else
                  <div class="products-table-wrapper-products-list__cross"></div>
                @endif
              </li>
            @endforeach
          </ul>
          <div class="products-table-wrapper-products-list__buttons">
            <a href="{{$product['button_1_link']}}" class="btn btn--yellow">{{$product['button_1_text']}}</a>
            <a href="{{$product['button_2_link']}}" class="btn btn--noborder">{{$product['button_2_text']}}</a>
          </div>
        </div>
        @endforeach
       
        
      </div>
      <div class="products-table-wrapper-products-mobile">
      <div class="products-table-wrapper-products-mobile__next slider-arrow" id="productsNext"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
      <div class="products-table-wrapper-products-mobile__prev slider-arrow" id="productsPrev"><i class="fa fa-caret-left" aria-hidden="true"></i></div>
        @foreach ($products as $product)
        <div class="products-table-wrapper-products-list products-table-wrapper-products-list-mobile">
          <div class="products-table-wrapper-products-list__image products-table-wrapper-products-list-mobile__image" style="background-image: url({{$product['image']['sizes']['products_table_image']}})">
          </div>
          <ul>
            <li>{{$product['product_name']}}</li>
            @foreach ($product['product_options'] as $option)
              <li>
                {{$option['option']}}
                @if ($option['opcja'])
                  <div class="products-table-wrapper-products-list__tick"></div>
                @else
                  <div class="products-table-wrapper-products-list__cross"></div>
                @endif
              </li>
            @endforeach
          </ul>
          <div class="products-table-wrapper-products-list__buttons">
            <a href="{{$product['button_1_link']}}" class="btn btn--yellow">{{$product['button_1_text']}}</a>
            <a href="{{$product['button_2_link']}}" class="btn btn--noborder">{{$product['button_2_text']}}</a>
          </div>
        </div>
        @endforeach
      </div>
      <div class="products-table-wrapper__footer">
        <p>Kupując u nas wspierasz Ośrodek Preadopcyjny w Otwocku</p>
      </div>
    </div>
  </div>
</section>
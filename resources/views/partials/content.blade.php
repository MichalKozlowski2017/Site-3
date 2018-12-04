@if( have_rows('content') )

{{-- loop through the rows of data --}}
@while (have_rows('content')) @php(the_row())

@if( get_row_layout() == 'products_table' )
@include('partials/content/products_table')

@elseif( get_row_layout() == 'products_table_2' )
@include('partials/content/products-table-2')

@elseif( get_row_layout() == 'banner_big' )
@include('partials/content/banner')

@elseif( get_row_layout() == 'cards-slider' )
@include('partials/content/slider-cards')

@elseif( get_row_layout() == 'slider_timeline' )
@include('partials/content/slider-timeline')

@elseif( get_row_layout() == 'slider_niedoskonale' )
@include('partials/content/slider-niedoskonale')

@elseif( get_row_layout() == 'section_standard' )
@include('partials/content/section-standard')

@elseif( get_row_layout() == 'section_landing' )
@include('partials/content/section-landing')

@elseif( get_row_layout() == 'section_products_slick' )
@include('partials/content/section-products-slick')

@elseif( get_row_layout() == 'awards' )
@include('partials/content/awards')

@elseif( get_row_layout() == 'writers' )
@include('partials/content/writers')

@elseif( get_row_layout() == 'faq' )
@include('partials/content/faq')

@elseif( get_row_layout() == 'store_locator' )
@include('partials/content/store-locator')

@endif

@endwhile

@else

{{-- no layouts found --}}

@endif

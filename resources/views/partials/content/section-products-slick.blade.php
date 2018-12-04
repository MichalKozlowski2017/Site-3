@php
  $title = get_sub_field('title');
  $btn_text = get_sub_field('btn_text');
  $btn_link = get_sub_field('btn_link');
  $slides = get_sub_field('slides');
@endphp
<section class="section-products-slick">
  <div class="content-container">
    <div class="content-container__wrapper">
      <div class="content-title">
        <h2>{!!$title!!}</h2>
      </div>
      <div class="content-text">
        <p>{!!$text!!}</p>
      </div>
      <a href="{{$btn_link}}" class="btn btn--yellow">{{$btn_text}}</a>
    </div>

    <div class="slick-container">
      <?php
        $args = array(
          'post_type' => 'product',
          'post__in' => get_sub_field('products')
          );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
          while ( $loop->have_posts() ) : $loop->the_post();
            ?> <div class="products-slide"> <?php
            wc_get_template_part( 'content', 'product' );
            ?> </div> <?php
          endwhile;
        } else {
          echo __( 'No products found' );
        }
        wp_reset_postdata();
      ?>
    </div>
  </div>
  <script>
    jQuery(document).ready(function () {
      jQuery('.slick-container').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
      });

    });
  </script>
</section>
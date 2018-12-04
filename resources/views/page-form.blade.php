{{--
  Template Name: Form
--}}
@extends('layouts.app')

@section('content')
	@while(have_posts()) @php the_post() @endphp
		<section class="my-account register-receipt-form">
			<div class="content-container">
				<div class="content-container__wrapper white-container">
					<div class="register-receipt-form-header">
						<div class="register-receipt-form-header__left">
							{!! apply_filters('the_content', get_field('text', $post->ID)) !!}
						</div>
						<div class="register-receipt-form-header__right">
							@php $image = get_field('image1', $post->ID); @endphp
							<div class="register-receipt-form-header-image" style="background-image: url({{ $image['sizes']['large']  }});">
								@php $image = get_field('image2', $post->ID); @endphp
								<div class="register-receipt-form-header-badge" style="background-image: url({{ $image['sizes']['large']  }});"></div>
							</div>
						</div>
					</div>
					<div class="content-box--white content-box">
						@php the_content() @endphp
					</div>
				</div>
			</div>
		</section>
	@endwhile
@endsection

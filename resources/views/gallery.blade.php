@extends('layouts.static')
@section('homeContent')

		<!-- BANNER -->
		<div class="blog_banner">
			<div class="container">
				<div class="blog_banner_info">
					<div class="blog_banner_info_title pad_b20">
						<h2>Gallery</h2>
					</div>
					<div class="blog_title_btm">
						<ul class="blog_title_btm_ul dis_flx">
							<li>
								<a href="{{ route('home.index') }}">
									Home<i class="fa fa-angle-right"></i>
								</a>
							</li>
							<li>
								<a href="">
									Blog
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- BANNER -->

		<!-- BODY -->
		
		<div class="home_body">
			<div class="container">
				<div class="latest_post">
					<div class="latest_post_top">
						<h1 class="latest_post_h1 brdr_line"></h1>
					</div>
					
					<div class="row">

						@foreach ($gallery as $gal)
						<div class="col-12 col-md-6 col-lg-4">
							<a href="{{ $gal->projectLink }}">
								<div class="home_card">
									<div class="home_card_top_gallery">
									<img src="{{ asset('uploads/categories/'.$gal->iconImage) }}" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<p class="author_name">{{ $gal->categoryName }}</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						@endforeach
					</div>
					
			
					</div>
				</div>
			</div>
		
		<!-- BODY -->

@endsection
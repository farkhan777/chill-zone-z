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
						<div class="col-12 col-md-6 col-lg-4">
							<a href="blog_post.html">
								<div class="home_card">
									<div class="home_card_top_gallery">
										<img src="{{ asset('img/Flutter Flight.jpg') }}" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<p class="author_name">© Flutter Flight</p>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="col-12 col-md-6 col-lg-4">
							<a href="blog_post.html">
								<div class="home_card">
									<div class="home_card_top_gallery">
										<img src="{{ asset('img/Calling Arcadia.jpg') }}" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<p class="author_name">© Calling Arcadia</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<a href="blog_post.html">
								<div class="home_card">
									<div class="home_card_top_gallery">
										<img src="{{ asset('img/Cobalt Cot.jpg') }}" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<p class="author_name">© Cobalt Cot</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<a href="blog_post.html">
								<div class="home_card">
									<div class="home_card_top_gallery">
										<img src="img/Felicity.jpg" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<p class="author_name">© Felicity</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<a href="blog_post.html">
								<div class="home_card">
									<div class="home_card_top_gallery">
										<img src="{{ asset('img/Let_s Isolate.jpg') }}" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<p class="author_name">© Let_s Isolate</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<a href="blog_post.html">
								<div class="home_card">
									<div class="home_card_top_gallery">
										<img src="{{ asset('img/Jagged Edge.png') }}" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<p class="author_name">© Jagged Edge</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<a href="blog_post.html">
								<div class="home_card">
									<div class="home_card_top_gallery">
										<img src="{{ asset('img/Sour Tower.png') }}" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<p class="author_name">© Sour Tower</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<a href="blog_post.html">
								<div class="home_card">
									<div class="home_card_top_gallery">
										<img src="{{ asset('img/Overbooked.jpg') }}" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<p class="author_name">© Overbooked</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<a href="blog_post.html">
								<div class="home_card">
									<div class="home_card_top_gallery">
										<img src="{{ asset('img/Rite of Passage.jpg') }}" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<p class="author_name">© Rite of Passage</p>
										</div>
									</div>
								</div>
							</a>
						</div>


					</div>
				</div>
			</div>

		<!-- BODY -->

@endsection

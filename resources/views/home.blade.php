@extends('layouts.static')
@section('homeContent')

		<!-- ======= Hero Section ======= -->
		<section id="hero" class="hero d-flex align-items-center">

			<div class="container">
			  <div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center">
				  <h1 data-aos="fade-up">Download free & premium website templates!</h1>
				  <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
				  <div data-aos="fade-up" data-aos-delay="600">
					<div class="text-lg-start cntr-btn">
					  <a href="{{ route('gallery.index') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
						<span>Get Started</span>
					  </a>
					</div>
				  </div>
				</div>
				<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
				  <img src="{{ asset('img/hero-img.png') }}" class="img-fluid" alt="">
				</div>
			  </div>
			</div>
		
		  </section><!-- End Hero -->

		<!-- BANNER -->
		<section class="banner_sec" id="banner-id">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10 col-lg-8">
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4">
								<a href="{{ route('blog.index') }}">
									<div class="banner_box">
										<i class="fab fa-laravel"></i>
										<h3 class="banner_box_h3">Laravel</h3>
										<p>The Toptal Blog is the top hub for developers.</p>
									</div>
								</a>
							</div>

							<div class="col-12 col-md-4 col-lg-4">
								<a href="{{ route('blog.index') }}">
									<div class="banner_box">
										<i class="fab fa-bootstrap"></i>
										<h3 class="banner_box_h3">Bootstrap</h3>
										<p>The Toptal Blog is the top hub for developers.</p>
									</div>
								</a>
							</div>

							<div class="col-12 col-md-4 col-lg-4">
								<a href="{{ route('blog.index') }}">
									<div class="banner_box">
										<i class="fab fa-angular"></i>
										<h3 class="banner_box_h3">Angular</h3>
										<p>The Toptal Blog is the top hub for developers.</p>
									</div>
								</a>
							</div>

							<div class="col-12 col-md-4 col-lg-4">
								<a href="{{ route('blog.index') }}">
									<div class="banner_box">
										<i class="fab fa-vuejs"></i>
										<h3 class="banner_box_h3">Vue JS</h3>
										<p>The Toptal Blog is the top hub for developers.</p>
									</div>
								</a>
							</div>

							<div class="col-12 col-md-4 col-lg-4">
								<a href="{{ route('blog.index') }}">
									<div class="banner_box">
										<i class="fab fa-react"></i>
										<h3 class="banner_box_h3">React</h3>
										<p>The Toptal Blog is the top hub for developers.</p>
									</div>
								</a>
							</div>

							<div class="col-12 col-md-4 col-lg-4">
								<a href="{{ route('blog.index') }}">
									<div class="banner_box">
										<i class="fab fa-node-js"></i>
										<h3 class="banner_box_h3">Node JS</h3>
										<p>The Toptal Blog is the top hub for developers.</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- BANNER -->

		<!-- BODY -->
		<div class="home_body">
			<div class="container">
				<div class="latest_post">
					<div class="latest_post_top">
						<h1 id="latest-template" class="latest_post_h1 brdr_line">Latest Blog</h1>
					</div>
					<div class="row">

					@foreach ($home as $homee)
						<div class="col-12 col-md-6 col-lg-4">
							<a href="{{ route('blog.index') }}">
								<div class="home_card">
									<div class="home_card_top">
										<img src="{{ asset($homee->featuredImage) }}" alt="image">
									</div>
									<div class="home_card_bottom">
										<div class="home_card_bottom_text">
											<ul class="home_card_bottom_text_ul">
												<li>
													<a href="{{ route('blog.index') }}">{{ $homee->metaDescription }}</a>
													<span><i class="fas fa-angle-right"></i></span>
												</li>
												<li><a href="{{ route('blog.index') }}">{{ $homee->slug }}</a></li>
											</ul>
											<a href="{{ route('blog.index') }}">
												<h2 class="home_card_h2">{{ $homee->title }}</h2>
											</a>
											<p class="post_p">{{ $homee->post }}</p>
											<div class="home_card_bottom_tym">
												<div class="home_card_btm_r8">
												<a href="contact_me.html"><p class="author_name">Cz</p></a>
													<ul class="home_card_btm_r8_ul">
														<li>{{ $homee->created_at }}</li>
														<li><span class="dot"></span>3 Min Read</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						@endforeach
                        
					</div>
				</div>
			</div>
					<!-- PAGINATION -->
			<div class="pagination">
				<ul class="pagination_ul d-flex">
					<li>
						{{ $home->links() }}
					</li>
					<!-- <li>
						<a aria-label='One' href="./index.html">1</a>
					</li>
					<li>
						<a aria-label='Two' href="./index.html">2</a>
					</li>
					<li>
						<a aria-label='Three' href="./index.html">3</a>
					</li>
					<li>
						<a aria-label='Next' href="./index.html">
							<i class="fas fa-chevron-right"></i>
						</a>
					</li>

					<span>
						
					</span>
					-->
					
				</ul>
			</div>
			<!-- PAGINATION -->
		</div>
		<!-- BODY -->

@endsection
<!DOCTYPE HTML>
<html lang="zxx">
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Author: Farkhan, Taufik, Nizar">
		<title>Chillzone</title>
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<!-- BOOTSTRAP GRID CSS -->
		<link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<!-- COMMON CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/common.css') }}" />
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<!-- Icon -->
		<link rel="Icon" href="{{ asset('img/cz.png') }}">
		<!-- RESPONSIVE CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />	

	</head>

	<body>

		<!-- ======= Header Baru ======= -->

		<header id="header" class="header fixed-top">
			<div class="container-fluid  container-xl d-flex align-items-center justify-content-between">
		
			  <a href="index.html" class="logo d-flex align-items-center">
				<img src="{{ asset('img/Chillzone.png') }}" alt="">
			  </a>
		
			  <nav id="navbar" class="navbar">
				<ul>
				  <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
				  <li><a class="nav-link scrollto" href="gallery.html">Gallery</a></li>
				  <li><a class="nav-link scrollto" href="about_us.html">About</a></li>
				  <li><a class="nav-link scrollto" href="contact.html">Contact</a></li>
				  <li><a class="nav-link scrollto" href="contact_me.html">Author</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle">
					<img src="{{ asset('img/hamburger.png') }}" alt="">
				</i>
			  </nav><!-- navbar -->
		
			</div>
		  </header>
		  
		  <!-- End Header Baru -->
		
        <!-- Static -->

        <article>
            @yield('homeContent')
        </article>

        <!-- Static -->


		<!-- FOOTER -->
		<div class="footer_section">

			<a aria-label='ChillZone' href="index.html"><img class="footer-logo" src="{{ asset('img/chillzoneWhite.png') }}" alt=""></a>
			

			<div class="footer_section_social">
				<ul class="footer_section_social_ul">
					   <li>
                            <a aria-label='facebook' href="https://facebook.com" title='facebook'><i class="fab fa-facebook-f"></i></a>
                        </li>

                        <li>
                            <a aria-label='instagram' href="https://instagram.com/" title='instagram'><i class="fab fa-instagram"></i></a>
                        </li>

                        <li>
                            <a aria-label='twitter' href="https://twitter.com" title='twitter'><i class="fab fa-twitter"></i></a>
                        </li>

                        <li>
                            <a aria-label='google' href="https://google.com/" title='google'><i class="fab fa-google-plus-g"></i></a>
                        </li>
				</ul>
			</div>
			<div class="footer_section_mnu">
				<ul class="footer_section_ul">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="gallery.html">Gallery</a>
					</li>
					<li>
						<a href="faq.html">FAQ</a>
					</li>
					<li>
						<a href="about_us.html">About</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer_copy_right">
			<p>©2021 ChillZone. All rights reserved</p>
		</div>
		<!-- FOOTER -->


	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
	
    
	</body>
</html>

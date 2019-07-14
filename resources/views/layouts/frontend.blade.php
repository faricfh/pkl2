<!DOCTYPE html>
<html lang="en">
<head>
	<title>MagNews2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/util.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/main.css') }}">
    @yield('css')
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								New York, NY
							</span>

							<img class="m-b-1 m-rl-8" src="{{ asset('assets/frontend/images/icons/icon-night.png') }}" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>

						<a href="{{ url('/about') }}" class="left-topbar-item">
							About
						</a>

						<a href="{{ url('/contact') }}" class="left-topbar-item">
							Contact
						</a>

						<a href="#" class="left-topbar-item">
							Sing up
						</a>

						<a href="#" class="left-topbar-item">
							Log in
						</a>
					</div>

					<div class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>


			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->
				<div class="logo">
					<a href="{{ url('/') }}"><img src="{{ asset('assets/frontend/images/icons/logo-01.png') }}" alt="LOGO"></a>
				</div>
			</div>

			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="{{ url('/') }}">
							<img src="{{ asset('assets/frontend/images/icons/logo-01.png') }}" alt="LOGO">
						</a>

						<ul class="main-menu">
							<li class="mega-menu-item">
									<a href="{{ url('/') }}">Home</a>
							</li>

							<li class="mega-menu-item">
								<a href="{{ url('/kategori') }}">News</a>
							</li>

							<li>
								<a href="{{ url('/blog-grid') }}">Blog</a>
							</li>
							<li class="mega-menu-item">
								<a href="{{ url('kategori/adventure') }}">Adventure</a>
							</li>
							<li class="mega-menu-item">
								<a href="{{ url('kategori/strategi') }}">Strategi</a>
							</li>
							<li class="mega-menu-item">
								<a href="{{ url('kategori/rpg') }}">RPG</a>
							</li>
							<li class="mega-menu-item">
								<a href="{{ url('kategori/sport') }}">Sport</a>
							</li>
							<li class="mega-menu-item">
								<a href="{{ url('kategori/racing') }}">Racing</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

    @yield('content')

	<!-- Footer -->
	<footer>
		<div class="bg2 p-t-40 p-b-25">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<a href="{{ url('/') }}">
								<img class="max-s-full" src="{{ asset('assets/frontend/images/icons/logo-02.png') }}" alt="LOGO">
							</a>
						</div>

						<div>
							<p class="f1-s-1 cl11 p-b-16">
								Website ini kami menyediakan bermacam macam video game, Website kami akan merekomendasikan para pengunjung bisa mencari video game yang menurut pengunjung sekalian menarik di Website ini 
							</p>

							<p class="f1-s-1 cl11 p-b-16">
								Ada Pertanyaan? Hubungi kami di (+62)xxxxxxx
							</p>

							<div class="p-t-15">
								<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-facebook-f"></span>
								</a>

								<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-twitter"></span>
								</a>

								<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-pinterest-p"></span>
								</a>

								<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-vimeo-v"></span>
								</a>

								<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-youtube"></span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<h5 class="f1-m-7 cl0">
								Category
							</h5>
						</div>

						<ul class="m-t--12 footer_kategori">
							
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="bg11">
			<div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">
					Copyright © 2018

					<a href="#" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template edit <i class="fa fa-heart" aria-hidden="true"></i> by <a href="{{url('/about')}}" target="_blank">Ousama</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</span>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="{{ asset('assets/frontend/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/frontend/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/frontend/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
	<script src="{{ asset('js/frontend.js') }}"></script>
    @stack('script')
    @yield('js')
</body>
</html>

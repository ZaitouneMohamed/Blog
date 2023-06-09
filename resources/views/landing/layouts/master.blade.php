<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Revolve - Personal Magazine blog Template</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Favicon-->
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<!-- THEME CSS
	================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<!-- Themify -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @livewireStyles
	<link rel="stylesheet" href="{{asset('assets/plugins/themify/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/slick-carousel/slick-theme.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/slick-carousel/slick.css')}}">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/magnific-popup/magnific-popup.css')}}">
	<!-- manin stylesheet -->
	@yield("styles")
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>


	@include("landing.layouts.navbar")

	<!--search overlay end-->
	@yield("content")


	<!--footer start-->
	<footer class="footer-section bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="mb-4">
						<h2 class="footer-logo">Revolve.</h2>
					</div>
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="#"><i class="ti-facebook mr-2"></i>Facebook</a></li>
						<li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2"></i>Twitter</a></li>
						<li class="list-inline-item"><a href="#"><i class="ti-linkedin mr-2"></i>Linkedin</a></li>
						<li class="list-inline-item"><a href="#"><i class="ti-pinterest mr-2"></i>Pinterest</a></li>
						<li class="list-inline-item"><a href="#"><i class="ti-github mr-2"></i>Github</a></li>
						<li class="list-inline-item"><a href="#"><i class="ti-instagram mr-2"></i>Instrgram</a></li>
						<li class="list-inline-item"><a href="#"><i class="ti-rss mr-2"></i>rss</a></li>
					</ul>
				</div>

				<div class="col-md-12 text-center">
					<p class="copyright">© Copyright 2019 - Revolve. All Rights Reserved. Distribution <a class="text-white"
							href="https://themewagon.com">ThemeWagon.</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!--footer end-->

	<!-- THEME JAVASCRIPT FILES
================================================== -->
	<!-- initialize jQuery Library -->
	@yield("scripts")
	<script src="{{asset('assets/plugins/jquery/jquery.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="{{asset('assets/plugins/slick-carousel/slick.min.js')}}"></script>
	<script src="{{asset('assets/plugins/magnific-popup/magnific-popup.js')}}"></script>
	<script src="{{asset('assets/plugins/instafeed-js/instafeed.min.js')}}"></script>
	<!-- Google Map -->
    @livewireScripts
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="{{asset('assets/plugins/google-map/gmap.js')}}"></script>
	<!-- main js assets/-->
	<script src="{{asset('assets/js/custom.js')}}"></script>


</body>

</html>

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

	<!-- THEME CSS
	================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<!-- Themify -->
	<link rel="stylesheet" href="assets/plugins/themify/css/themify-icons.css">
	<link rel="stylesheet" href="assets/plugins/slick-carousel/slick-theme.css">
	<link rel="stylesheet" href="assets/plugins/slick-carousel/slick.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/plugins/magnific-popup/magnific-popup.css">
	<!-- manin stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


	@include("landing.layouts.navbar")
	
	<!--search overlay end-->
	@yield("content")


	<!--footer start-->
	<footer class="footer-section bg-grey">
		<div class="instagram-photo-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="text-center">Follow in Instagram</h4>
					</div>
				</div>

				<div class="row no-gutters" id="instafeed">

				</div>
			</div>
		</div>
		</div>

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
	<script src="assets/plugins/jquery/jquery.js"></script>
	<!-- Bootstraassets/p jQuery -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
	<!-- Owl caeoassets/usel -->
	<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets/plugins/slick-carousel/slick.min.js"></script>
	<script src="assets/plugins/magnific-popup/magnific-popup.js"></script>
	<!-- Instagraassets/m Feed Js -->
	<script src="assets/plugins/instafeed-js/instafeed.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="assets/plugins/google-map/gmap.js"></script>
	<!-- main js assets/-->
	<script src="assets/js/custom.js"></script>


</body>

</html>
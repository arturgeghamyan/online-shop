<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home || Hurst</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
	<!-- Place favicon.ico in the root directory -->

	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

	<!-- all css here -->
	<!-- bootstrap v3.3.6 css -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- jquery-ui.min css -->
	<link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
	<!-- meanmenu css -->
	<link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
	<!-- nivo-slider css -->
	<link rel="stylesheet" href="{{asset('lib/css/nivo-slider.css')}}">
	<link rel="stylesheet" href="{{asset('lib/css/preview.css')}}">
	<!-- slick css -->
	<link rel="stylesheet" href="{{asset('css/slick.css')}}">
	<!-- lightbox css -->
	<link rel="stylesheet" href="{{asset('css/lightbox.min.css')}}">
	<!-- material-design-iconic-font css -->
	<link rel="stylesheet" href="{{asset('css/material-design-iconic-font.css')}}">
	<!-- All common css of theme -->
	<link rel="stylesheet" href="{{asset('css/default.css')}}">
	<!-- style css -->
	<link rel="stylesheet" href="{{asset('style.css')}}">
	<!-- shortcode css -->
	<link rel="stylesheet" href="{{asset('css/shortcode.css')}}">
	<!-- responsive css -->
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<!-- modernizr css -->
	<script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
	<input type="hidden" id="token" value="{{csrf_token()}}">
	<!-- WRAPPER START -->
	
	<!-- Mobile-header-top Start -->
	<div class="mobile-header-top hidden-lg hidden-md hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<!-- header-search-mobile start -->
					<div class="header-search-mobile">
						<div class="table">
							<div class="table-cell">
								<ul>
									<li><a class="search-open" href="#"><i class="zmdi zmdi-search"></i></a></li>
									<li><a href="{{url('/')}}"><i class="zmdi zmdi-lock"></i></a></li>
									<li><a href="my-{{url('/my-account')}}"><i class="zmdi zmdi-account"></i></a></li>
									<li><a href="{{url('/product/wishlist')}}"><i class="zmdi zmdi-favorite"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- header-search-mobile start -->
				</div>
			</div>
		</div>
	</div>
	<!-- Mobile-header-top End -->

	<header id="sticky-menu" class="header">
		<div class="header-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4 col-xs-7">
						<div class="logo text-center">
							<a href="{{url('/product/home')}}"><img src="{{asset('img/logo/logo.png')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-4 col-xs-5">
						<div class="mini-cart text-right">
							<ul>
								<li>
									<a class="cart-icon" href="#">
										<i class="zmdi zmdi-shopping-cart"></i>
										<span class="total-count"></span>
									</a>
									@if (Session::get('id'))
									<div class="mini-cart-brief text-left">
										<div class="cart-items">
											<p class="mb-0">You have <span class="total-count">0</span> items in your shopping bag</p>
										</div>
										<div class="all-cart-product clearfix">
											<!-- <div class="single-cart clearfix">
												<div class="cart-photo">
													<a href="#"><img src="{{asset('img/cart/1.jpg')}}" alt="" /></a>
												</div>
												<div class="cart-info">
													<h5><a href="#">dummy product name</a></h5>
													<p class="mb-0">Price : $ 100.00</p>
													<p class="mb-0">Qty : 02 </p>
													<span class="cart-delete"><a href="#"><i class="zmdi zmdi-close"></i></a></span>
												</div>
											</div>-->
										</div>
										<div class="cart-totals">
											<h5 class="mb-0">Total<span class="floatright total-price">$0.00</span></h5>
										</div>
										<div class="cart-bottom  clearfix">
											<a href="#" class="button-one floatleft text-uppercase" data-text="View cart">View cart</a>
											<a href="#" class="button-one floatright text-uppercase" data-text="Check out">Check out</a>
										</div>
									</div>
									@endif
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- MAIN-MENU START -->
		<div class="menu-toggle hamburger hamburger--emphatic hidden-xs">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</div>
		<div class="main-menu  hidden-xs">
			<nav>
				<ul>
					<li><a href="{{url('/product/home')}}">home</a></li>
					<li><a href="{{url('/product/shop')}}">accesories</a></li>
					<li><a href="{{url('/product/shop')}}">lookbook</a></li>
					<li><a href="blog.html">blog</a></li>
					<li><a href="#">pages</a>
						<div class="sub-menu menu-scroll">
							<ul>
								<li class="menu-title">Page's</li>
								<li><a href="{{url('/product/shop')}}">Shop</a></li>
								<li><a href="{{url('/product/my-product')}}">My Product</a></li>
								<li><a href="{{url('/product/cart')}}">Shopping Cart</a></li>
								<li><a href="{{url('/product/wishlist')}}">Wishlist</a></li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="{{url('/product/order')}}">Order</a></li>
								<li><a href="{{url('/')}}">login / Registration</a></li>
								<li><a href="{{url('/my-account')}}">My Account</a></li>
								<li><a href="404.html">404</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="single-blog.html">Single Blog</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</li>
					<li><a href="about.html">about us</a></li>
					<li><a href="contact.html">contact</a></li>
					<li><a href="{{url('/logout')}}">Log out</a></li>
				</ul>
			</nav>
		</div>
		<!-- MAIN-MENU END -->
	</header>
	<div class="mobile-menu-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 hidden-lg hidden-md hidden-sm">
				<div class="mobile-menu">
					<nav id="dropdown">
						<ul>
							<li><a href="{{url('/product/home')}}">home</a></li>
							<li><a href="{{url('/product/shop')}}">products</a></li>
							<li><a href="{{url('/product/shop')}}">accesories</a></li>
							<li><a href="{{url('/product/shop')}}">lookbook</a></li>
							<li><a href="blog.html">blog</a></li>
							<li><a href="#">pages</a>
								<ul>
									<li><a href="{{url('/product/shop')}}">Shop</a></li>
									<li><a href="{{url('/product/my-product')}}">My Product</a></li>
									<li><a href="{{url('/product/cart')}}">Shopping Cart</a></li>
									<li><a href="{{url('/product/wishlist')}}">Wishlist</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="{{url('/product/order')}}">Order</a></li>
									<li><a href="{{url('/')}}">login / Registration</a></li>
									<li><a href="{{url('/my-account')}}">My Account</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="single-blog.html">Single Blog</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</li>
							<li><a href="about.html">about us</a></li>
							<li><a href="contact.html">contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
	<h1></h1>
	@yield("content")

	<footer>
		<!-- Footer-area start -->
		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="single-footer">
							<h3 class="footer-title  title-border">Contact Us</h3>
							<ul class="footer-contact">
								<li><span>Address :</span>28 Green Tower, Street Name,<br>New York City, USA</li>
								<li><span>Cell-Phone :</span>012345 - 123456789</li>
								<li><span>Email :</span>your-email@gmail.com</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
						<div class="single-footer">
							<h3 class="footer-title  title-border">accounts</h3>
							<ul class="footer-menu">
								<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Account</a></li>
								<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Wishlist</a></li>
								<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>My Cart</a></li>
								<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Sign In</a></li>
								<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Check out</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
						<div class="single-footer">
							<h3 class="footer-title  title-border">shipping</h3>
							<ul class="footer-menu">
								<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>New Products</a></li>
								<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Top Sellers</a></li>
								<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Manufactirers</a></li>
								<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Suppliers</a></li>
								<li><a href="#"><i class="zmdi zmdi-dot-circle"></i>Specials</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
						<div class="single-footer">
							<h3 class="footer-title  title-border">your choice Products</h3>
							<div class="footer-product">
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<div class="footer-thumb">
											<a href="#"><img src="{{asset('img/footer/1.jpg')}}" alt="" /></a>
											<div class="footer-thumb-info">
												<p><a href="#">Furniture Product<br>Name</a></p>
												<h4 class="price-3">$ 60.00</h4>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="footer-thumb">
											<a href="#"><img src="{{asset('img/footer/1.jpg')}}" alt="" /></a>
											<div class="footer-thumb-info">
												<p><a href="#">Furniture Product<br>Name</a></p>
												<h4 class="price-3">$ 60.00</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer-area end -->
		<!-- Copyright-area start -->
		<div class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="copyright">
							<p class="mb-0">Copyright <i class="fa fa-copyright"></i> 2018 <span><a href="https://freethemescloud.com/" target="_blank" >Free Themes Cloud</a></span> . All rights reserved. </p>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="payment  text-right">
							<a href="#"><img src="{{asset('img/payment/1.png')}}" alt="" /></a>
							<a href="#"><img src="{{asset('img/payment/2.png')}}" alt="" /></a>
							<a href="#"><img src="{{asset('img/payment/3.png')}}" alt="" /></a>
							<a href="#"><img src="{{asset('img/payment/4.png')}}" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Copyright-area start -->
	</footer>

	<!-- all js here -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="{{asset('js/layouts.js')}}"></script>
	<script src="{{asset('js/product.js')}}"></script>
	<!-- jquery latest version -->
	<script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
	<!-- bootstrap js -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- jquery.meanmenu js -->
	<script src="{{asset('js/jquery.meanmenu.js')}}"></script>
	<!-- slick.min js -->
	<script src="{{asset('js/slick.min.js')}}"></script>
	<!-- jquery.treeview js -->
	<script src="{{asset('js/jquery.treeview.js')}}"></script>
	<!-- lightbox.min js -->
	<script src="{{asset('js/lightbox.min.js')}}"></script>
	<!-- jquery-ui js -->
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<!-- jquery.nivo.slider js -->
	<script src="{{asset('lib/js/jquery.nivo.slider.js')}}"></script>
	<script src="{{asset('lib/home.js')}}"></script>
	<!-- jquery.nicescroll.min js -->
	<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
	<!-- countdon.min js -->
	<script src="{{asset('js/countdon.min.js')}}"></script>
	<!-- wow js -->
	<script src="{{asset('js/wow.min.js')}}"></script>
	<!-- plugins js -->
	<script src="{{asset('js/plugins.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('js/main.js')}}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html>
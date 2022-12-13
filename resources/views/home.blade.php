@extends("layouts.layout")
@section("content")
<div class="wrapper">

	<!-- SLIDER-BANNER-AREA START -->
	<section class="slider-banner-area clearfix">
		<!-- Sidebar-social-media start -->
		<div class="sidebar-social hidden-xs">
			<div class="table">
				<div class="table-cell">
					<ul>
						<li><a href="#" target="_blank" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>
						<li><a href="#" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
						<li><a href="#" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
						<li><a href="#" target="_blank" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Sidebar-social-media start -->
		<div class="banner-left floatleft">
			<!-- Slider-banner start -->
			<div class="slider-banner">
				<div class="single-banner banner-1">
					<a class="banner-thumb" href="#"><img src="{{asset('img/banner/1.jpg')}}" alt="" /></a>
					<span class="pro-label new-label hidden-md">new</span>
					<span class="price hidden-md">$50.00</span>
					<div class="banner-brief">
						<h2 class="banner-title hidden-md"><a href="#">Product name</a></h2>
						<p class="mb-0 hidden-md">Furniture</p>
					</div>
					<a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
				</div>
				<div class="single-banner banner-2">
					<a class="banner-thumb" href="#"><img src="{{asset('img/banner/2.jpg')}}" alt="" /></a>
					<div class="banner-brief">
						<h2 class="banner-title hidden-md"><a href="#">New Product 2017</a></h2>
						<p class="hidden-md hidden-sm hidden-xs">Lorem Ipsum is simply dummy text of the printing and types sate industry. Lorem Ipsum has been the industry.</p>
						<a href="#" class="button-one font-16px" data-text="Buy now">Buy now</a>
					</div>
				</div>
			</div>
			<!-- Slider-banner end -->
		</div>
		<div class="slider-right floatleft">
			<!-- Slider-area start -->
			<div class="slider-area">
				<div class="bend niceties preview-2">
					<div id="ensign-nivoslider" class="slides">
						<img src="{{asset('img/slider/slider-1/1.jpg')}}" alt="" title="#slider-direction-1"  />
						<img src="{{asset('img/slider/slider-1/2.jpg')}}" alt="" title="#slider-direction-1"  />
						<img src="{{asset('img/slider/slider-1/3.jpg')}}" alt="" title="#slider-direction-1"  />
					</div>
					<!-- direction 1 -->
					<div id="slider-direction-1" class="t-cn slider-direction">
						<div class="slider-progress"></div>
						<div class="slider-content t-lfl s-tb slider-1">
							<div class="title-container s-tb-c title-compress">
								<div class="layer-1">
									<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
										<h2 class="slider-title3 text-uppercase mb-0" >welcome to our</h2>
									</div>
									<div class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
										<h2 class="slider-title1 text-uppercase mb-0">furniture</h2>
									</div>
									<div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2.5s">
										<h3 class="slider-title2 text-uppercase" >gallery 2017</h3>
									</div>
									<div class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="3.5s">
										<a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- direction 2 -->
					<div id="slider-direction-2" class="slider-direction">
						<div class="slider-progress"></div>
						<div class="slider-content t-lfl s-tb slider-1">
							<div class="title-container s-tb-c title-compress">
								<div class="layer-1">
									<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
										<h2 class="slider-title3 text-uppercase mb-0" >welcome to our</h2>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
										<h2 class="slider-title1 text-uppercase">furniture</h2>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
										<p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
										<a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- direction 3 -->
					<div id="slider-direction-3" class="slider-direction">
						<div class="slider-progress"></div>
						<div class="slider-content t-lfl s-tb slider-1">
							<div class="title-container s-tb-c title-compress">
								<div class="layer-1">
									<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
										<h2 class="slider-title3 text-uppercase mb-0" >welcome to our</h2>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
										<h2 class="slider-title1 text-uppercase mb-0">furniture</h2>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
										<h3 class="slider-title2 text-uppercase" >gallery 2017</h3>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
										<p class="slider-pro-brief">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
									</div>
									<div class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="0.5s">
										<a href="#" class="button-one style-2 text-uppercase mt-20" data-text="Shop now">Shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider-area end -->
		</div>
		<!-- Sidebar-social-media start -->
		<div class="sidebar-account hidden-xs">
			<div class="table">
				<div class="table-cell">
					<ul>
						<li><a class="search-open" href="#" title="Search"><i class="zmdi zmdi-search"></i></a></li>
						<li><a href="#" title="Login"><i class="zmdi zmdi-lock"></i></a>
							<div class="customer-login text-left">
								<form action="#">
									<h4 class="title-1 title-border text-uppercase mb-30">Registered customers</h4>
									<p class="text-gray">If you have an account with us, Please login!</p>
									<input type="text" name="email" placeholder="Email here..." />
									<input type="password" placeholder="Password" />
									<p><a class="text-gray" href="#">Forget your password?</a></p>
									<button class="button-one submit-button mt-15" data-text="login" type="submit">login</button>
								</form>
							</div>
						</li>
						<li><a href="my-{{url('/my-account')}}" title="My-Account"><i class="zmdi zmdi-account"></i></a></li>
						<li><a href="{{url('/product/wishlist')}}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Sidebar-social-media start -->
	</section>
	<!-- End Slider-section -->
	<!-- sidebar-search Start -->
	<div class="sidebar-search animated slideOutUp">
		<div class="table">
			<div class="table-cell">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2 p-0">
							<div class="search-form-wrap">
								<button class="close-search"><i class="zmdi zmdi-close"></i></button>
								<form action="#">
									<input type="text" placeholder="Search here..." />
									<button class="search-button" type="submit">
										<i class="zmdi zmdi-search"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- sidebar-search End -->
	<!-- PRODUCT-AREA START -->
	<div class="product-area pt-80 pb-35">
		<div class="container">
			<!-- Section-title start -->
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h2 class="title-border">Featured Products</h2>
					</div>
				</div>
			</div>
			<!-- Section-title end -->
			<div class="row cus-row-30">
				<div class="product-slider arrow-left-right">
					<!-- Single-product start -->
					<div class="single-product col-lg-12">
						<div class="product-img">
							<span class="pro-label new-label">new</span>
							<a href="single-product.html"><img src="{{asset('img/product/1.jpg')}}" alt="" /></a>
							<div class="product-action clearfix">
								<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
								<p class="floatright hidden-sm hidden-xs">Furniture</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">$ 56.20</span>
								<span class="pro-rating floatright">
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product col-lg-12">
						<div class="product-img">
							<span class="pro-label sale-label">Sale</span>
							<a href="single-product.html"><img src="{{asset('img/product/2.jpg')}}" alt="" /></a>
							<div class="product-action clearfix">
								<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
								<p class="floatright hidden-sm hidden-xs">Furniture</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">$ 56.20</span>
								<span class="pro-rating floatright">
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product col-lg-12">
						<div class="product-img">
							<a href="single-product.html"><img src="{{asset('img/product/3.jpg')}}" alt="" /></a>
							<div class="product-action clearfix">
								<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
								<p class="floatright hidden-sm hidden-xs">Furniture</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">$ 56.20</span>
								<span class="pro-rating floatright">
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product col-lg-12">
						<div class="product-img">
							<a href="single-product.html"><img src="{{asset('img/product/4.jpg')}}" alt="" /></a>
							<div class="product-action clearfix">
								<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
								<p class="floatright hidden-sm hidden-xs">Furniture</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">$ 56.20</span>
								<span class="pro-rating floatright">
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single-product end -->
					<!-- Single-product start -->
					<div class="single-product col-lg-12">
						<div class="product-img">
							<span class="pro-label new-label">new</span>
							<a href="single-product.html"><img src="{{asset('img/product/3.jpg')}}" alt="" /></a>
							<div class="product-action clearfix">
								<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
								<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
							</div>
						</div>
						<div class="product-info clearfix">
							<div class="fix">
								<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
								<p class="floatright hidden-sm hidden-xs">Furniture</p>
							</div>
							<div class="fix">
								<span class="pro-price floatleft">$ 56.20</span>
								<span class="pro-rating floatright">
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
									<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single-product end -->
				</div>
			</div>
		</div>
	</div>
	<!-- PRODUCT-AREA END -->
	<!-- DISCOUNT-PRODUCT START -->
	<div class="discount-product-area">
		<div class="container">
			<div class="row">
				<div class="discount-product-slider dots-bottom-right">
					<!-- single-discount-product start -->
					<div class="col-lg-12">
						<div class="discount-product">
							<img src="{{asset('img/discount/1.jpg')}}" alt="" />
							<div class="discount-img-brief">
								<div class="onsale">
									<span class="onsale-text">On Sale</span>
									<span class="onsale-price">$ 80.00</span>
								</div>
								<div class="discount-info">
									<h1 class="text-dark-red hidden-xs">Discount 50%</h1>
									<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
									<a href="#" class="button-one font-16px style-3 text-uppercase mt-5" data-text="Buy now">Buy now</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single-discount-product end -->
					<!-- single-discount-product start -->
					<div class="col-lg-12">
						<div class="discount-product">
							<img src="{{asset('img/discount/2.jpg')}}" alt="" />
							<div class="discount-img-brief">
								<div class="onsale">
									<span class="onsale-text">On Sale</span>
									<span class="onsale-price">$ 80.00</span>
								</div>
								<div class="discount-info">
									<h1 class="text-dark-red hidden-xs">Discount 50%</h1>
									<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
									<a href="#" class="button-one font-16px style-3 text-uppercase mt-5" data-text="Buy now">Buy now</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single-discount-product end -->
					<!-- single-discount-product start -->
					<div class="col-lg-12">
						<div class="discount-product">
							<img src="{{asset('img/discount/3.jpg')}}" alt="" />
							<div class="discount-img-brief">
								<div class="onsale">
									<span class="onsale-text">On Sale</span>
									<span class="onsale-price">$ 80.00</span>
								</div>
								<div class="discount-info">
									<h1 class="text-dark-red hidden-xs">Discount 50%</h1>
									<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
									<a href="#" class="button-one font-16px style-3 text-uppercase mt-5" data-text="Buy now">Buy now</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single-discount-product end -->
					<!-- single-discount-product start -->
					<div class="col-lg-12">
						<div class="discount-product">
							<img src="{{asset('img/discount/4.jpg')}}" alt="" />
							<div class="discount-img-brief">
								<div class="onsale">
									<span class="onsale-text">On Sale</span>
									<span class="onsale-price">$ 80.00</span>
								</div>
								<div class="discount-info">
									<h1 class="text-dark-red hidden-xs">Discount 50%</h1>
									<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris.</p>
									<a href="#" class="button-one font-16px style-3 text-uppercase mt-5" data-text="Buy now">Buy now</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single-discount-product end -->
				</div>
			</div>
		</div>
	</div>
	<!-- DISCOUNT-PRODUCT END -->
	<!-- PURCHASE-ONLINE-AREA START -->
	<div class="purchase-online-area pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h2 class="title-border">Purchase Online on Hurst</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<!-- Nav tabs -->
					<ul class="tab-menu clearfix">
						<li class="active"><a href="#new-arrivals" data-toggle="tab">New Arrivals</a></li>
						<li><a href="#best-seller"  data-toggle="tab">Best Seller </a></li>
						<li><a href="#most-view" data-toggle="tab">Most View </a></li>
						<li><a href="#discounts" data-toggle="tab">Discounts</a></li>
					</ul>
				</div>
				<div class="col-lg-12">
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="new-arrivals">
							<div class="row">
								<!-- Single-product start -->
								@foreach($products as $product)
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="{{url('/product/single/'.$product['id'])}}"><img src="{{asset('img/product/'.$product['photo'][0]['address'])}}"
											alt="" /></a>
										<div class="product-action clearfix">
											<a data-toggle="tooltip" data-placement="top" title="Wishlist"><button class="add_wishlist" data-id="{{$product['id']}}"><i class="zmdi zmdi-favorite-outline"></i></button></a>
											<a data-toggle="modal" data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a data-toggle="tooltip" data-placement="top" title="Add To Cart"><button class="add_cart" data-id="{{$product['id']}}"><i class="zmdi zmdi-shopping-cart-plus"></i></button></a>	
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">{{$product['name']}}</a></h4>
											<p class="floatright hidden-sm">{{$product['category']}}</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ {{$product['price']}}</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<div class="tab-pane" id="best-seller">
							<div class="row">
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="single-product.html"><img src="{{asset('img/product/2.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label sale-label">Sale</span>
										<a href="single-product.html"><img src="{{asset('img/product/9.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 36.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/8.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 66.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/6.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 57.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="single-product.html"><img src="{{asset('img/product/4.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 55.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label sale-label">Sale</span>
										<a href="single-product.html"><img src="{{asset('img/product/3.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 65.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-xs-12 hidden-md hidden-sm">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/7.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 60.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-xs-12 hidden-md hidden-sm">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/5.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 66.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
							</div>
						</div>
						<div class="tab-pane" id="most-view">
							<div class="row">
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="single-product.html"><img src="{{asset('img/product/1.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label sale-label">Sale</span>
										<a href="single-product.html"><img src="{{asset('img/product/3.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 36.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/5.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 66.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/9.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 57.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="single-product.html"><img src="{{asset('img/product/7.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 55.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label sale-label">Sale</span>
										<a href="single-product.html"><img src="{{asset('img/product/5.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 65.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-xs-12 hidden-md hidden-sm">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/7.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 60.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-xs-12 hidden-md hidden-sm">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/8.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 66.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
							</div>
						</div>
						<div class="tab-pane" id="discounts">
							<div class="row">
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="single-product.html"><img src="{{asset('img/product/8.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 56.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label sale-label">Sale</span>
										<a href="single-product.html"><img src="{{asset('img/product/9.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 36.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/7.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 66.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/6.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 57.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label new-label">new</span>
										<a href="single-product.html"><img src="{{asset('img/product/3.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 55.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-md-4 col-sm-4 col-xs-12">
									<div class="product-img">
										<span class="pro-label sale-label">Sale</span>
										<a href="single-product.html"><img src="{{asset('img/product/4.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 65.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-xs-12 hidden-md hidden-sm">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/5.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 60.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
								<!-- Single-product start -->
								<div class="single-product col-lg-3 col-xs-12 hidden-md hidden-sm">
									<div class="product-img">
										<a href="single-product.html"><img src="{{asset('img/product/2.jpg')}}" alt="" /></a>
										<div class="product-action clearfix">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
											<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
										</div>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
											<p class="floatright hidden-sm">Furniture</p>
										</div>
										<div class="fix">
											<span class="pro-price floatleft">$ 66.20</span>
											<span class="pro-rating floatright">
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
												<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											</span>
										</div>
									</div>
								</div>
								<!-- Single-product end -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- PURCHASE-ONLINE-AREA END -->
	<!-- BLGO-AREA START -->
	<div class="blog-area pt-55">
		<div class="container">
			<!-- Section-title start -->
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h2 class="title-border">From The Blog</h2>
					</div>
				</div>
			</div>
			<!-- Section-title end -->
			<div class="row">
				<!-- Single-blog start -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="single-blog mt-30">
						<div class="row">
							<div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
								<div class="blog-info">
									<div class="post-meta fix">
										<div class="post-date floatleft"><span class="text-dark-red">30</span></div>
										<div class="post-year floatleft">
											<p class="text-uppercase text-dark-red mb-0">June, 2017</p>
											<h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2017</a></h4>
										</div>
									</div>
									<div class="like-share fix">
										<a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
										<a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
										<a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
									</div>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage  Lorem Ipsum, you alteration in some form.</p>
									<a href="#" class="button-2 text-dark-red">Read more...</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
								<div class="blog-photo">
									<a href="#"><img src="{{asset('img/blog/1.jpg')}}" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single-blog end -->
				<!-- Single-blog start -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="single-blog mt-30">
						<div class="row">
							<div class="col-lg-6 col-md-7 col-sm-7 col-xs-12">
								<div class="blog-info">
									<div class="post-meta fix">
										<div class="post-date floatleft"><span class="text-dark-red">30</span></div>
										<div class="post-year floatleft">
											<p class="text-uppercase text-dark-red mb-0">June, 2017</p>
											<h4 class="post-title"><a href="#" tabindex="0">Farniture drawing 2017</a></h4>
										</div>
									</div>
									<div class="like-share fix">
										<a href="#"><i class="zmdi zmdi-favorite"></i><span>89 Like</span></a>
										<a href="#"><i class="zmdi zmdi-comments"></i><span>59 Comments</span></a>
										<a href="#"><i class="zmdi zmdi-share"></i><span>29 Share</span></a>
									</div>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered If you are going to use a passage  Lorem Ipsum, you alteration in some form.</p>
									<a href="#" class="button-2 text-dark-red">Read more...</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
								<div class="blog-photo">
									<a href="#"><img src="{{asset('img/blog/2.jpg')}}" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single-blog end -->
			</div>
		</div>
	</div>
	<!-- BLGO-AREA END -->
	<!-- SUBSCRIVE-AREA START -->
	<div class="subscribe-area pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="subscribe">
						<form action="#">
							<input type="text" placeholder="Enter your email address"/>
							<button class="submit-button submit-btn-2 button-one" data-text="subscribe" type="submit" >subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- SUBSCRIVE-AREA END -->
	<!-- FOOTER START -->
	<!-- FOOTER END -->
	<!-- QUICKVIEW PRODUCT -->
	<div id="quickview-wrapper">
		<!-- Modal -->
		<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="modal-product">
							<div class="product-images">
								<div class="main-image images">
									<img alt="#" src="{{asset('img/product/quickview-photo.jpg')}}"/>
								</div>
							</div><!-- .product-images -->

							<div class="product-info">
								<h1>Aenean eu tristique</h1>
								<div class="price-box-3">
									<hr />
									<div class="s-price-box">
										<span class="new-price">$160.00</span>
										<span class="old-price">$190.00</span>
									</div>
									<hr />
								</div>
								<a href="{{url('/product/shop')}}" class="see-all">See all features</a>
								<div class="quick-add-to-cart">
									<form method="post" class="cart">
										<div class="numbers-row">
											<input type="number" id="french-hens" value="3">
										</div>
										<button class="single_add_to_cart_button" type="submit">Add to cart</button>
									</form>
								</div>
								<div class="quick-desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
								</div>
								<div class="social-sharing">
									<div class="widget widget_socialsharing_widget">
										<h3 class="widget-title-modal">Share this product</h3>
										<ul class="social-icons">
											<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="zmdi zmdi-google-plus"></i></a></li>
											<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="zmdi zmdi-twitter"></i></a></li>
											<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="zmdi zmdi-facebook"></i></a></li>
											<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div><!-- .product-info -->
						</div><!-- .modal-product -->
					</div><!-- .modal-body -->
				</div><!-- .modal-content -->
			</div><!-- .modal-dialog -->
		</div>
		<!-- END Modal -->
	</div>
	<!-- END QUICKVIEW PRODUCT -->

</div>
<!-- WRAPPER END -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/product.js')}}"></script>
@endsection
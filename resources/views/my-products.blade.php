@extends("layouts.layout")
@section("content")
<!-- Mobile-menu end -->
<!-- HEADING-BANNER START -->
<div class="heading-banner-area overlay-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-banner">
					<div class="heading-banner-title">
						<h2>My Product</h2>
					</div>
					<div class="breadcumbs pb-15">
						<ul>
							<li><a href="#">Home</a></li>
							<li>My Product</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- HEADING-BANNER END -->
<!-- PRODUCT-AREA START -->
<div class="product-area pt-80 pb-80 product-style-2">
	<div class="container">
		<!-- Shop-Content End -->
		<div class="shop-content">
			<div class="row">
				<div class="col-md-12">
					<div class="product-option mb-30 clearfix">
						<!-- Categories start -->
						<div class="dropdown floatleft">
							<button class="option-btn" >
								Categories
							</button>
							<div class="dropdown-menu dropdown-width" >
								<!-- Widget-Categories start -->
								<aside class="widget widget-categories">
									<div class="widget-title">
										<h4>Categories</h4>
									</div>
									<div id="cat-treeview"  class="widget-info product-cat boxscrol2">
										<ul>
											<li><span>Chair</span>
												<ul>
													<li><a href="#">T-Shirts</a></li>
													<li><a href="#">Striped Shirts</a></li>
													<li><a href="#">Half Shirts</a></li>
													<li><a href="#">Formal Shirts</a></li>
													<li><a href="#">Bilazers</a></li>
												</ul>
											</li>          
											<li class="open"><span>Furniture</span>
												<ul>
													<li><a href="#">Men Bag</a></li>
													<li><a href="#">Shoes</a></li>
													<li><a href="#">Watch</a></li>
													<li><a href="#">T-shirt</a></li>
													<li><a href="#">Shirt</a></li>
												</ul>
											</li>          
											<li><span>Accessories</span>
												<ul>
													<li><a href="#">T-Shirts</a></li>
													<li><a href="#">Striped Shirts</a></li>
													<li><a href="#">Half Shirts</a></li>
													<li><a href="#">Formal Shirts</a></li>
													<li><a href="#">Bilazers</a></li>
												</ul>
											</li>
											<li><span>Top Brands</span>
												<ul>
													<li><a href="#">T-Shirts</a></li>
													<li><a href="#">Striped Shirts</a></li>
													<li><a href="#">Half Shirts</a></li>
													<li><a href="#">Formal Shirts</a></li>
													<li><a href="#">Bilazers</a></li>
												</ul>
											</li>
											<li><span>Jewelry</span>
												<ul>
													<li><a href="#">T-Shirts</a></li>
													<li><a href="#">Striped Shirts</a></li>
													<li><a href="#">Half Shirts</a></li>
													<li><a href="#">Formal Shirts</a></li>
													<li><a href="#">Bilazers</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</aside>
								<!-- Widget-categories end -->
							</div>
						</div>	
						<!-- Categories end -->
						<!-- Price start -->
						<div class="dropdown floatleft">
							<button class="option-btn" >
								Price
							</button>
							<div class="dropdown-menu dropdown-width" >
								<!-- Shop-Filter start -->
								<aside class="widget shop-filter">
									<div class="widget-title">
										<h4>Price</h4>
									</div>
									<div class="widget-info">
										<div class="price_filter">
											<div class="price_slider_amount">
												<input type="submit"  value="You range :"/> 
												<input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
											</div>
											<div id="slider-range"></div>
										</div>
									</div>
								</aside>
								<!-- Shop-Filter end -->
							</div>
						</div>	
						<!-- Price end -->
						<!-- Color start -->
						<div class="dropdown floatleft">
							<button class="option-btn">
								Color
							</button>
							<div class="dropdown-menu dropdown-width" >
								<!-- Widget-Color start -->
								<aside class="widget widget-color">
									<div class="widget-title">
										<h4>Color</h4>
									</div>
									<div class="widget-info color-filter clearfix">
										<ul>
											<li><a href="#"><span class="color color-1"></span>LightSalmon<span class="count">12</span></a></li>
											<li><a href="#"><span class="color color-2"></span>Dark Salmon<span class="count">20</span></a></li>
											<li><a href="#"><span class="color color-3"></span>Tomato<span class="count">59</span></a></li>
											<li class="active"><a href="#"><span class="color color-4"></span>Deep Sky Blue<span class="count">45</span></a></li>
											<li><a href="#"><span class="color color-5"></span>Electric Purple<span class="count">78</span></a></li>
											<li><a href="#"><span class="color color-6"></span>Atlantis<span class="count">10</span></a></li>
											<li><a href="#"><span class="color color-7"></span>Deep Lilac<span class="count">15</span></a></li>
										</ul>
									</div>
								</aside>
								<!-- Widget-Color end -->
							</div>
						</div>
						<!-- Color end -->
						<!-- Size start -->
						<div class="dropdown floatleft">
							<button class="option-btn">
								Size
							</button>
							<div class="dropdown-menu dropdown-width" >
								<!-- Widget-Size start -->
								<aside class="widget widget-size">
									<div class="widget-title">
										<h4>Size</h4>
									</div>
									<div class="widget-info size-filter clearfix">
										<ul>
											<li><a href="#">M</a></li>
											<li class="active"><a href="#">S</a></li>
											<li><a href="#">L</a></li>
											<li><a href="#">SL</a></li>
											<li><a href="#">XL</a></li>
										</ul>
									</div>
								</aside>
								<!-- Widget-Size end -->
							</div>
						</div>	
						<!-- Size end -->								
						<div class="showing text-right">
							<p class="mb-0 hidden-xs">Showing 01-09 of 17 Results</p>
						</div>
					</div>						
				</div>	
				<div class="col-md-12">
					<div class="row">
						<!-- Single-product start -->
						@foreach($products as $product)
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<div class="single-product">
								<div class="product-img">
									<span class="pro-label new-label">new</span>
									<span class="pro-price-2">$ {{$product["price"]}}</span>
									<a href="{{url('/product/single/'.$product['id'])}}"><img src="{{asset('img/product/'.$product['photo'][0]['address'])}}" alt="" /></a>
								</div>
								<div class="product-info clearfix text-center">
									<div class="fix">
										<h4 class="post-title"><a href="#">{{$product["name"]}}</a></h4>
									</div>
									<div class="fix">
										<span class="pro-rating">
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
											<a href="#"><i class="zmdi zmdi-star-half"></i></a>
										</span>
									</div>
									<div class="product-action clearfix">
										<a data-toggle="tooltip" data-placement="top" title="Wishlist"><button class="add_wishlist" data-id="{{$product['id']}}"><i class="zmdi zmdi-favorite-outline"></i></button></a>
										<a data-toggle="modal" data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
										<a data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
										<a data-toggle="tooltip" data-placement="top" title="Add To Cart"><button class="add_cart" data-id="{{$product['id']}}"><i class="zmdi zmdi-shopping-cart-plus"></i></button></a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				{{-- <div class="col-md-12"> --}}
					<!-- Pagination start -->
					{{-- <div class="shop-pagination  text-center">
						<div class="pagination">
							<ul>
								<li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
								<li><a href="#">01</a></li>
								<li class="active"><a href="#">02</a></li>
								<li><a href="#">03</a></li>
								<li><a href="#">04</a></li>
								<li><a href="#">05</a></li>
								<li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
							</ul>
						</div> --}}
					{{-- </div> --}}
					<!-- Pagination end -->
				{{-- </div> --}}
			</div>
		</div>
		<!-- Shop-Content End -->
	</div>
</div>
<!-- PRODUCT-AREA END -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/product.js')}}"></script>
@endsection

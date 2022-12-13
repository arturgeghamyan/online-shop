@extends("layouts.layout")
@section("content")
<!-- HEADING-BANNER START -->
<div class="heading-banner-area overlay-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-banner">
					<div class="heading-banner-title">
						<h2>Wishlist</h2>
					</div>
					<div class="breadcumbs pb-15">
						<ul>
							<li><a href="{{url('/product/home')}}">Home</a></li>
							<li>Wishlist</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- HEADING-BANNER END -->
<!-- WISHLIST-AREA START -->
<div class="shopping-cart-area  pt-80 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="shopping-cart">
					<!-- Nav tabs -->
					<ul class="cart-page-menu row clearfix mb-30">
						<li><a href="{{url('/product/cart')}}">shopping cart</a></li>
						<li class="active"><a href="{{url('/product/wishlist')}}">wishlist</a></li>
						<li><a href="{{url('/product/order')}}">order complete</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<!-- wishlist start -->
						<div class="tab-pane active" id="wishlist">
							<form action="#">
								<div class="shop-cart-table">
									<div class="table-content table-responsive">
										<table>
											<thead>
												<tr>
													<th class="product-thumbnail">Product</th>
													<th class="product-price">Price</th>
													<th class="product-stock">stock status</th>
													<th class="product-add-cart">Add to cart</th>
													<th class="product-remove">Remove</th>
												</tr>
											</thead>
											<tbody class="wishlist">
												@foreach ($wishlist as $wishlist)
												<tr>
													<td class="product-thumbnail  text-left">
														<div class="single-product">
															<div class="product-img">
																<a
																	href="{{url('/product/single/'.$wishlist['product']['id'])}}"><img
																		src="img/product/2.jpg" alt="" /></a>
															</div>
															<div class="product-info">
																<h4 class="post-title"><a class="text-light-black"
																		href="#">{{$wishlist['product']['name']}}</a>
																</h4>
																<p class="mb-0">Color : Black</p>
																<p class="mb-0">Size : SL</p>
															</div>
														</div>
													</td>
													<td class="product-price">${{$wishlist['product']['price']}}</td>
													<td class="product-stock">in stock</td>
													<td class="product-add-cart">
														<a class="text-light-black"><button class="add_cart"
																data-id="{{$wishlist['product']['id']}}"><i
																	class="zmdi zmdi-shopping-cart-plus"></i></button></a>
													</td>
													<td class="product-remove">
														<a><button class="delete_wishlist"
																data-id="{{$wishlist['product']['id']}}"><i
																	class="zmdi zmdi-close"></i><button></a>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</form>
						</div>
						<!-- wishlist end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- WISHLIST-AREA END -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/product.js')}}"></script>
@endsection
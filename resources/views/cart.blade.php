@extends("layouts.layout")
@section("content")
<!-- HEADING-BANNER START -->
<div class="heading-banner-area overlay-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-banner">
					<div class="heading-banner-title">
						<h2>Shopping Cart</h2>
					</div>
					<div class="breadcumbs pb-15">
						<ul>
							<li><a href="{{url('/product/home')}}">Home</a></li>
							<li>Shopping Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- HEADING-BANNER END -->
<!-- SHOPPING-CART-AREA START -->
<div class="shopping-cart-area  pt-80 pb-80">
	<div class="container">	
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="shopping-cart">
					<!-- Nav tabs -->
					<ul class="cart-page-menu row clearfix mb-30">
						<li class="active"><a href="{{url('/product/cart')}}">shopping cart</a></li>
						<li><a href="{{url('/product/wishlist')}}">wishlist</a></li>
						<li><a href="{{url('/product/order')}}">order complete</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<!-- shopping-cart start -->
						<div class="tab-pane active" id="shopping-cart">
							<form action="#">
								<div class="shop-cart-table">
									<div class="table-content table-responsive">
										<table>
											<thead>
												<tr>
													<th class="product-thumbnail">Product</th>
													<th class="product-price">Price</th>
													<th class="product-quantity">Quantity</th>
													<th class="product-subtotal">Total</th>
													<th class="product-remove">Remove</th>
												</tr>
											</thead>
											<tbody class="cart">
											@foreach ($carts as $index => $cart)
												<tr>
													<td class="product-thumbnail  text-left">
														<div class="single-product">
															<div class="product-img">
																<a href="{{url('/product/single/'.$cart['product']['id'])}}"><img src="img/product/2.jpg" alt="" /></a>
															</div>
															<div class="product-info">
																<h4 class="post-title"><a class="text-light-black" href="{{url('/product/single/'.$cart['product']['id'])}}">{{$cart['product']['name']}}</a></h4>
																<p class="mb-0">Color :  Black</p>
																<p class="mb-0">Size :     SL</p>
															</div>
														</div>
													</td>
													<td class="product-price pricess{{$cart['product']['id']}}">$ {{$cart['product']['price']}}</td>
													<td class="product-quantity">
														<div class="cart-plus-minus">
															<div class="dec qtybutton countdown" data-id="{{$cart['product']['id']}}">-</div>
															<input type="text" value="{{$cart['count']}}" name="qtybutton" class="cart-plus-minus-box count{{$cart['product']['id']}} changecount" data-id="{{$cart['product']['id']}}">
															<div class="inc qtybutton countup" data-id="{{$cart['product']['id']}}">+</div>
														</div>
													</td>
													<td class="product-subtotal totaled{{$cart['product']['id']}}">${{ $totalPrices[$index] }}</td>
													<td class="product-remove">
														<a><button type="button" class="delete_cart" data-id="{{$cart['product']['id']}}"><i class="zmdi zmdi-close"></i></button></a>
													</td>
												</tr>
											@endforeach
											</tbody>
										</table>
									</div>
									@if (!$carts->isEmpty())
									<div class="text-right">
										<a href="{{url('/pay/order')}}" class="button-one submit-button mt-15" data-text="place order">place order</a>
									</div>
									@endif
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="customer-login mt-30">
											<h4 class="title-1 title-border text-uppercase">coupon discount</h4>
											<p class="text-gray">Enter your coupon code if you have one!</p>
											<input type="text" placeholder="Enter your code here.">
											<button type="submit" data-text="apply coupon" class="button-one submit-button mt-15">apply coupon</button>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="customer-login payment-details mt-30">
											<h4 class="title-1 title-border text-uppercase">payment details</h4>
											<table>
												<tbody>
													<tr>
														<td class="text-left">Cart Subtotal</td>
														<td class="text-right">$155.00</td>
													</tr>
													<tr>
														<td class="text-left">Cart Subtotal</td>
														<td class="text-right">$15.00</td>
													</tr>
													<tr>
														<td class="text-left">Vat</td>
														<td class="text-right">$00.00</td>
													</tr>
													<tr>
														<td class="text-left">Order Total</td>
														<td class="text-right">$170.00</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="customer-login mt-30">
											<h4 class="title-1 title-border text-uppercase">culculate shipping</h4>
											<p class="text-gray">Enter your coupon code if you have one!</p>
											<div class="row">
												<div class="col-md-4 col-sm-4 col-xs-12">
													<input type="text" placeholder="Country">
												</div>
												<div class="col-md-4 col-sm-4 col-xs-12">
													<input type="text" placeholder="Region / State">
												</div>
												<div class="col-md-4 col-sm-4 col-xs-12">
													<input type="text" placeholder="Post code">
												</div>
											</div>
											<button type="submit" data-text="get a quote" class="button-one submit-button mt-15">get a quote</button>
										</div>											
									</div>
								</div>
							</form>		
						</div>
						<!-- shopping-cart end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- SHOPPING-CART-AREA END -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/product.js')}}"></script>
@endsection

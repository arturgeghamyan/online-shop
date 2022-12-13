@extends("layouts.layout")
@section("content")
<!-- HEADING-BANNER START -->
<div class="heading-banner-area overlay-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-banner">
					<div class="heading-banner-title">
						<h2>order complete</h2>
					</div>
					<div class="breadcumbs pb-15">
						<ul>
							<li><a href="{{url('/product/home')}}">Home</a></li>
							<li>order complete</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- HEADING-BANNER END -->
<!-- ORDER-AREA START -->
<div class="shopping-cart-area  pt-80 pb-80">
	<div class="container">	
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="shopping-cart">
					<!-- Nav tabs -->
					<ul class="cart-page-menu row clearfix mb-30">
						<li><a href="{{url('/product/cart')}}">shopping cart</a></li>
						<li><a href="{{url('/product/wishlist')}}" >wishlist</a></li>
						<li class="active"><a href="{{url('/product/order')}}" >order complete</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
				<!-- order-complete start -->
						<div class="tab-pane active" id="order-complete">
							<form action="#">
								<div class="thank-recieve bg-white mb-30">
									<p>Thank you. Your order has been received.</p>
								</div>
								@foreach ($order_details as $detail)
								<div class="order-info bg-white text-center clearfix mb-30">
									<div class="single-order-info">
										<h4 class="title-1 text-uppercase text-light-black mb-0">order no</h4>
										<p class="text-uppercase text-light-black mb-0"><strong>{{$detail['id']}}</strong></p>
									</div>
									<div class="single-order-info">
										<h4 class="title-1 text-uppercase text-light-black mb-0">Product name</h4>
										<p class="text-uppercase text-light-black mb-0"><strong>{{$detail['product']['name']}}</strong></p>
									</div>
									<div class="single-order-info">
										<h4 class="title-1 text-uppercase text-light-black mb-0">Count</h4>
										<p class="text-uppercase text-light-black mb-0"><strong>{{$detail['count']}}</strong></p>
									</div>
								</div>
								@endforeach
								<div class="shop-cart-table check-out-wrap">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-sm-12">
											<div class="our-order payment-details pr-20">
												<h4 class="title-1 title-border text-uppercase mb-30">our order</h4>
												<table>
													<thead>
														<tr>
															<th><strong>Product</strong></th>
															<th class="text-right"><strong>Total</strong></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Dummy Product Name  x 2</td>
															<td class="text-right">$86.00</td>
														</tr>
														<tr>
															<td>Dummy Product Name  x 1</td>
															<td class="text-right">$69.00</td>
														</tr>
														<tr>
															<td>Cart Subtotal</td>
															<td class="text-right">$155.00</td>
														</tr>
														<tr>
															<td>Shipping and Handing</td>
															<td class="text-right">$15.00</td>
														</tr>
														<tr>
															<td>Vat</td>
															<td class="text-right">$00.00</td>
														</tr>
														<tr>
															<td>Order Total</td>
															<td class="text-right">$170.00</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<!-- payment-method -->
										<div class="col-md-6 col-sm-6 col-sm-12 mt-xs-30">
											<div class="payment-method  pl-20">
												<h4 class="title-1 title-border text-uppercase mb-30">payment method</h4>
												<div class="payment-accordion">
													<!-- Accordion start  -->
													<h3 class="payment-accordion-toggle active">Direct Bank Transfer</h3>
													<div class="payment-content default">
														<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
													</div> 
													<!-- Accordion end -->
													<!-- Accordion start -->
													<h3 class="payment-accordion-toggle">Cheque Payment</h3>
													<div class="payment-content">
														<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
													</div>
													<!-- Accordion end -->
													<!-- Accordion start -->
													<h3 class="payment-accordion-toggle">PayPal</h3>
													<div class="payment-content">
														<p>Pay via PayPal; you can pay with your credit card if you don�t have a PayPal account.</p>
														<a href="#"><img src="img/payment/1.png" alt="" /></a>
														<a href="#"><img src="img/payment/2.png" alt="" /></a>
														<a href="#"><img src="img/payment/3.png" alt="" /></a>
														<a href="#"><img src="img/payment/4.png" alt="" /></a>
													</div>
													<!-- Accordion end --> 
												</div>															
											</div>
										</div>
									</div>
								</div>
							</form>										
						</div>
						<!-- order-complete end -->	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ORDER-AREA END -->
@endsection

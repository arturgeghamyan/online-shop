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
						<h2>My Account</h2>
					</div>
					<div class="breadcumbs pb-15">
						<ul>
							<li><a href="{{url('/product/home')}}">Home</a></li>
							<li>My Account</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- HEADING-BANNER END -->
<!-- MY-ACCOUNT-AREA START -->
<div class="my-account-area  pt-80 pb-80">
	<div class="container">	
		<div class="my-account">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="panel-group" id="accordion">
						<div class="panel">
							<div class="my-account-menu" >
								<a  data-toggle="collapse" data-parent="#accordion" href="#my-info" >
									My Personal Information
								</a>
							</div>
							<div id="my-info" class="panel-collapse collapse in" >
								<div class="panel-body">
									<div class="billing-details shop-cart-table">
										<input type="text" placeholder="Your name here...">
										<input type="text" placeholder="Email address here...">
										<input type="text" placeholder="Phone here...">
										<input type="text" placeholder="Company neme here...">
										<select class="custom-select mb-15">
											<option>Contry</option>
											<option>Bangladesh</option>
											<option>United States</option>
											<option>united Kingdom</option>
											<option>Australia</option>
											<option>Canada</option>
										</select>
										<select class="custom-select mb-15">
											<option>State</option>
											<option>Dhaka</option>
											<option>New York</option>
											<option>London</option>
											<option>Melbourne</option>
											<option>Ottawa</option>
										</select>
										<select class="custom-select mb-15">
											<option>Town / City</option>
											<option>Dhaka</option>
											<option>New York</option>
											<option>London</option>
											<option>Melbourne</option>
											<option>Ottawa</option>
										</select>
										<textarea placeholder="Your address here..." class="custom-textarea"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="my-account-menu">
								<a class="collapsed" data-parent="#accordion"  data-toggle="collapse"  href="#my-billing" >
									My Billing address
								</a>
							</div>
							<div id="my-billing" class="panel-collapse collapse" >
								<div class="panel-body">
									<div class="billing-details shop-cart-table">
										<input type="text" placeholder="Your name here...">
										<input type="text" placeholder="Email address here...">
										<input type="text" placeholder="Phone here...">
										<input type="text" placeholder="Company neme here...">
										<select class="custom-select mb-15">
											<option>Contry</option>
											<option>Bangladesh</option>
											<option>United States</option>
											<option>united Kingdom</option>
											<option>Australia</option>
											<option>Canada</option>
										</select>
										<select class="custom-select mb-15">
											<option>State</option>
											<option>Dhaka</option>
											<option>New York</option>
											<option>London</option>
											<option>Melbourne</option>
											<option>Ottawa</option>
										</select>
										<select class="custom-select mb-15">
											<option>Town / City</option>
											<option>Dhaka</option>
											<option>New York</option>
											<option>London</option>
											<option>Melbourne</option>
											<option>Ottawa</option>
										</select>
										<textarea placeholder="Your address here..." class="custom-textarea"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="my-account-menu">
								<a class="collapsed" data-parent="#accordion"  data-toggle="collapse"  href="#my-order" >
									Order history and details
								</a>
							</div>
							<div id="my-order" class="panel-collapse collapse" >
								<div class="panel-body">
									<div class="our-order payment-details shop-cart-table">
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
							</div>
						</div>					
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="panel-group" id="accordion-2">
						<div class="panel">
							<div class="my-account-menu" >
								<a  data-toggle="collapse" data-parent="#accordion-2" href="#my-payment-method" >
									My Payment Method
								</a>
							</div>
							<div id="my-payment-method" class="panel-collapse collapse in" >
								<div class="panel-body">
									<div class="payment-method  shop-cart-table">
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
												<a href="#"><img alt="" src="img/payment/1.png"></a>
												<a href="#"><img alt="" src="img/payment/2.png"></a>
												<a href="#"><img alt="" src="img/payment/3.png"></a>
												<a href="#"><img alt="" src="img/payment/4.png"></a>
											</div>
											<!-- Accordion end --> 
											<button type="submit" data-text="place order" class="button-one submit-button mt-15">place order</button>			
										</div>															
									</div>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="my-account-menu my-account-menu-2" >
								<a  href="{{url('/product/wishlist')}}" >
									My Wishlist
								</a>
							</div>
						</div>
					</div>								
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

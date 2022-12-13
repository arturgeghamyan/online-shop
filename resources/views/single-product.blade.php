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
						<h2>Single Product</h2>
					</div>
					<div class="breadcumbs pb-15">
						<ul>
							<li><a href="{{url('/product/home')}}">Home</a></li>
							<li>Single Product</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- HEADING-BANNER END -->
<!-- PRODUCT-AREA START -->
<div class="product-area single-pro-area pt-80 pb-80 product-style-2">
	<div class="container">
		<div class="row shop-list single-pro-info no-sidebar">
			<!-- Single-product start -->
			<div class="col-lg-12">
				<div class="single-product clearfix">
					<!-- Single-pro-slider Big-photo start -->
					<div class="single-pro-slider single-big-photo view-lightbox slider-for">
						@foreach($product['photo'] as $product['photo'])
						<div>
							<img src="{{asset('img/product/'.$product['photo']['address'])}}" alt="" />
							<a class="view-full-screen" href="{{asset('img/product/'.$product['photo']['address'])}}" data-lightbox="roadtrip" data-title="My caption">
								<i class="zmdi zmdi-zoom-in"></i>
							</a>
						</div>
						@endforeach
					</div>
					<!-- Single-pro-slider Big-photo end -->
					<div class="product-info">
						<div class="fix">
							<h4 class="post-title floatleft">{{$product['name']}}</h4>
							<span class="pro-rating floatright">
								<a href="#"><i class="zmdi zmdi-star"></i></a>
								<a href="#"><i class="zmdi zmdi-star"></i></a>
								<a href="#"><i class="zmdi zmdi-star"></i></a>
								<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								<a href="#"><i class="zmdi zmdi-star-half"></i></a>
								<span>( 27 Rating )</span>
								@if ($product["user_id"]==$id)
								<button class="delete_product btn-danger" id="{{$product['id']}}">Delete</button>
								<button class="btn-success" data-toggle="modal" data-target="#exampleModal">Edit</button>
								@endif
							</span>
						</div>
						<div class="fix mb-20">
							<span class="pro-price">$ {{$product['price']}}</span>
						</div>
						<div class="product-description">
							<p>{{$product['discription']}}</p>
						</div>
						<!-- color start -->
						<div class="color-filter single-pro-color mb-20 clearfix">
							<ul>
								<li><span class="color-title text-capitalize">color</span></li>
								<li class="active"><a href="#"><span class="color color-1"></span></a></li>
								<li><a href="#"><span class="color color-2"></span></a></li>
								<li><a href="#"><span class="color color-7"></span></a></li>
								<li><a href="#"><span class="color color-3"></span></a></li>
								<li><a href="#"><span class="color color-4"></span></a></li>
							</ul>
						</div>
						<!-- color end -->
						<!-- Size start -->
						<div class="size-filter single-pro-size mb-35 clearfix">
							<ul>
								<li><span class="color-title text-capitalize">size</span></li>
								<li><a href="#">M</a></li>
								<li class="active"><a href="#">S</a></li>
								<li><a href="#">L</a></li>
								<li><a href="#">SL</a></li>
								<li><a href="#">XL</a></li>
							</ul>
						</div>
						<!-- Size end -->
						<div class="clearfix">
							<div class="cart-plus-minus">
								<div class="dec qtybutton">-</div>
								<input type="text" value="2" name="qtybutton" class="cart-plus-minus-box">
								<div class="inc qtybutton">+</div>
							</div>
							<div class="product-action clearfix">
								<a data-toggle="tooltip" data-placement="top" title="Wishlist"><button class="add_wishlist" data-id="{{$product['id']}}"><i class="zmdi zmdi-favorite-outline"></i></button></a>
								<a data-toggle="modal" data-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
								<a data-toggle="tooltip" data-placement="top" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
								<a data-toggle="tooltip" data-placement="top" title="Add To Cart"><button class="add_cart" data-id="{{$product['id']}}"><i class="zmdi zmdi-shopping-cart-plus"></i></button></a>
							</div>
						</div>
						<!-- Single-pro-slider Small-photo start -->
						<div class="single-pro-slider single-sml-photo slider-nav">

							<div>
								<img src="img/reviewer/1.jpg" alt="" />
							</div>
							<div>
								<img src="img/reviewer/1.jpg" alt="" />
							</div>
							<div>
								<img src="img/reviewer/1.jpg" alt="" />
							</div>
							<div>
								<img src="img/reviewer/1.jpg" alt="" />
							</div>
							<div>
								<img src="img/reviewer/1.jpg" alt="" />
							</div>

						</div>
						<!-- Single-pro-slider Small-photo end -->
					</div>
				</div>
			</div>
			<!-- Single-product end -->
		</div>
		<!-- single-product-tab start -->
		<div class="single-pro-tab">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="single-pro-tab-menu">
						<!-- Nav tabs -->
						<ul class="">
							<li><a href="#description" data-toggle="tab">Description</a></li>
							<li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
							<li><a href="#information" data-toggle="tab">Information</a></li>
							<li><a href="#tags" data-toggle="tab">Tags</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane" id="description">
							<div class="pro-tab-info pro-description">
								<h3 class="tab-title title-border mb-30">dummy Product name</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
							</div>
						</div>
						<div class="tab-pane active" id="reviews">
							<div class="pro-tab-info pro-reviews">
								<div class="customer-review mb-60">
									<h3 class="tab-title title-border mb-30">Customer review</h3>
									<ul class="product-comments clearfix">
										<li class="mb-30">
											<div class="pro-reviewer">
												<img src="img/reviewer/1.jpg" alt="" />
											</div>
											<div class="pro-reviewer-comment">
												<div class="fix">
													<div class="floatleft mbl-center">
														<h5 class="text-uppercase mb-0"><strong>Gerald Barnes</strong></h5>
														<p class="reply-date">27 Jun, 2017 at 2:30pm</p>
													</div>
													<div class="comment-reply floatright">
														<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
														<a href="#"><i class="zmdi zmdi-close"></i></a>
													</div>
												</div>
												<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
											</div>
										</li>
										<li class="threaded-comments">
											<div class="pro-reviewer">
												<img src="img/reviewer/1.jpg" alt="" />
											</div>
											<div class="pro-reviewer-comment">
												<div class="fix">
													<div class="floatleft mbl-center">
														<h5 class="text-uppercase mb-0"><strong>Gerald Barnes</strong></h5>
														<p class="reply-date">27 Jun, 2017 at 2:30pm</p>
													</div>
													<div class="comment-reply floatright">
														<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
														<a href="#"><i class="zmdi zmdi-close"></i></a>
													</div>
												</div>
												<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="leave-review">
									<h3 class="tab-title title-border mb-30">Leave your reviw</h3>
									<div class="your-rating mb-30">
										<p class="mb-10"><strong>Your Rating</strong></p>
										<span>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
										</span>
										<span class="separator">|</span>
										<span>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
										</span>
										<span class="separator">|</span>
										<span>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
										</span>
										<span class="separator">|</span>
										<span>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
										</span>
										<span class="separator">|</span>
										<span>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
											<a href="#"><i class="zmdi zmdi-star-outline"></i></a>
										</span>
									</div>
									<div class="reply-box">
										<form action="#">
											<div class="row">
												<div class="col-md-6">
													<input type="text" placeholder="Your name here..." name="name" />
												</div>
												<div class="col-md-6">
													<input type="text" placeholder="Subject..." name="name" />
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<textarea class="custom-textarea" name="message" placeholder="Your review here..."></textarea>
													<button type="submit" data-text="submit review" class="button-one submit-button mt-20">submit review</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="information">
							<div class="pro-tab-info pro-information">
								<h3 class="tab-title title-border mb-30">Product information</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
							</div>
						</div>
						<div class="tab-pane" id="tags">
							<div class="pro-tab-info pro-information">
								<h3 class="tab-title title-border mb-30">tags</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single-product-tab end -->
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Change Product Info</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body bg-dark mx-auto w-25 p-4 text-light">
				<div>
					<!-- @csrf -->
					<!-- <p> {{$errors->first('name')}} </p> -->
					<input class="form-control" id="name" placeholder="name" value="{{$product['name']}}">
					<!-- <p> {{$errors->first('count')}} </p> -->
					<input class="form-control" id="count" placeholder="count" value="{{$product['count']}}">
					<!-- <p> {{$errors->first('price')}} </p> -->
					<input class="form-control" id="price" placeholder="price" value="{{$product['price']}}">
					<!-- <p> {{$errors->first('discription')}} </p> -->
					<input class="form-control" id="discription" placeholder="discription" value="{{$product['discription']}}">
					<!-- <p> {{$errors->first('cat')}} </p> -->
					<!-- <input class="form-control" name="photo[]" multiple type="file" accept="image/*"> -->
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" data-id="{{$product['id']}}" class="btn btn-primary edit_product">Save changes</button>
			</div>
		</div>
	</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/product.js')}}"></script>
<!-- PRODUCT-AREA END -->
@endsection
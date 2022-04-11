@extends('shared.layout')

@section('content')

<!-- Banner Section Start-->
<section class="bannerhny-content">
	<!--/banner-slider-->
	<div class="content-baner-inf">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container">
						<div class="carousel-caption">
							<h3>Running out of Medicines?
								<br>Contact Us and Fulfill your Needs
							</h3>
							<!-- <a href="#" class="shop-button btn">
								Shop Now
							</a> -->

						</div>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="container">
						<div class="carousel-caption">
							<h3>Facing Hassle to Wait & Buy?
								<br>Few steps in Door Delivery
							</h3>
							<!-- <a href="#" class="shop-button btn">
								Shop Now
							</a> -->

						</div>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="container">
						<div class="carousel-caption">
							<h3>Need to Wait in Que to buy Medicines ?
								<br>Order Through our Website & Collect it Instantly
							</h3>
							<!-- <a href="#" class="shop-button btn">
								Shop Now
							</a> -->

						</div>
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="container">
						<div class="carousel-caption">
							<h3>Unable to find and buy your medicine?
								<br>Visit our Products section and Order it
							</h3>
							<!-- <a href="#" class="shop-button btn">
								Shop Now
							</a> -->
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</section>
<!-- Banner Section End-->

<!-- Shopping Section Start -->
<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
			<p class="text-center">Handpicked Favourites just for you</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				@forelse($products as $product)
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">

							@if($product->productImages->count())
							<img class="pic-1 img-fluid" src="{{asset($product->productImages[0]->image_url)}}">
							<img class="pic-2 img-fluid" src="{{asset($product->productImages[0]->image_url)}}">
							@else
							<img class="pic-1 img-fluid" src="{{asset('/img/no-image.png')}}">
							<img class="pic-2 img-fluid" src="{{asset('/img/no-image.png')}}">
							@endif

							<ul class="social">
								<li><a href="{{route('show-product', $product->id)}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

								<li>
									<form class="add-to-card" action="{{ route('addToCart') }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="id" value="{{ $product->id }}">
										<input type="hidden" name="price" value="{{ $product->productDetails[0]->price }}">
										<button type="submit"><span class="fa fa-shopping-bag"></span></button>
									</form>

								</li>
							</ul>
							<div class="transmitv single-item">
								<form class="add-to-card" action="{{ route('addToCart') }}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{ $product->id }}">
									<input type="hidden" name="price" value="{{ $product->productDetails[0]->price }}">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">Add to Cart</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="{{route('show-product', $product->id)}}">{{$product->name}}</a></h3>
							<span class="price"> LKR {{$product->productDetails[0]->presentPrice()}} </span>
						</div>
					</div>
				</div>
				@empty
				@endforelse
			</div>
			<!-- //row-->
		</div>
	</div>
</section>
<!-- Shopping Section End -->


<!-- Our Branches Section Start -->
<section class="w3l-video-6">
	<!-- /video-6-->
	<div class="video-66-info">
		<div class="container-fluid">
			<div class="video-grids-info row">
				<div class="video-gd-right col-lg-8">
					<div class="video-inner text-center">
						<!--popup-->
						<a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
							<span class="fa fa-play" aria-hidden="true"></span>
						</a>
						<div id="small-dialog" class="mfp-hide">
							<div class="search-top notify-popup">
								<iframe src="https://player.vimeo.com/video/246139491" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
							</div>
						</div>
						<!--//popup-->
					</div>
				</div>
				<div class="video-gd-left col-lg-4 p-lg-5 p-4">
					<div class="p-xl-4 p-0 video-wrap">
						<h3 class="hny-title text-left">All Branded Women's Bags are Flat <span>30% Discount</span>
						</h3>
						<p>Visit our shop to see amazing creations from our designers.</p>
						<a href="#" class="read-more btn">
							Shop Now
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- Our Branches Section End -->

<!-- Shopping Section Start -->
<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
			<p class="text-center">Handpicked Favourites just for you</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				@forelse($products as $product)
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">

							@if($product->productImages->count())
							<img class="pic-1 img-fluid" src="{{asset($product->productImages[0]->image_url)}}">
							<img class="pic-2 img-fluid" src="{{asset($product->productImages[0]->image_url)}}">
							@else
							<img class="pic-1 img-fluid" src="{{asset('/img/no-image.png')}}">
							<img class="pic-2 img-fluid" src="{{asset('/img/no-image.png')}}">
							@endif

							<ul class="social">
								<li><a href="{{route('show-product', $product->id)}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

								<li>
									<form class="add-to-card" action="{{ route('addToCart') }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="id" value="{{ $product->id }}">
										<input type="hidden" name="price" value="{{ $product->productDetails[0]->price }}">
										<button type="submit"><span class="fa fa-shopping-bag"></span></button>
									</form>

								</li>
							</ul>
							<div class="transmitv single-item">
								<form class="add-to-card" action="{{ route('addToCart') }}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{ $product->id }}">
									<input type="hidden" name="price" value="{{ $product->productDetails[0]->price }}">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">Add to Cart</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="{{route('show-product', $product->id)}}">{{$product->name}}</a></h3>
							<span class="price"> LKR {{$product->productDetails[0]->presentPrice()}} </span>
						</div>
					</div>
				</div>
				@empty
				@endforelse
			</div>
			<!-- //row-->
		</div>
	</div>
</section>
<!-- Shopping Section End -->

<!-- Features Section Start -->
<!-- <section class="features-4">
	<div class="features4-block py-5">
		<div class="container py-lg-5">
			<h6>We are the best</h6>
			<h3 class="hny-title text-center">What We <span>Offering</span></h3>

			<div class="features4-grids text-center row mt-5">
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
						<span class="fa fa-bullhorn icon-fea4" aria-hidden="true"></span>
						<h5><a href="#URL">Call Us Anytime</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
					<div class="features4-grid-inn">
						<span class="fa fa-truck icon-fea4" aria-hidden="true"></span>
						<h5><a href="#URL">Free Shipping</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
						<span class="fa fa-recycle icon-fea4" aria-hidden="true"></span>
						<h5><a href="#URL">Free Returns</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
						<span class="fa fa-money icon-fea4" aria-hidden="true"></span>
						<h5><a href="#URL">Secured Payments</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>

					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- Features Section End -->

@endsection

<!-- //content-6-section -->
<!-- <section class="w3l-post-grids-6">
	
	<div class="post-6-mian py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title text-center mb-0 ">Latest Blog <span>Posts</span></h3>
			<p class="mb-5 text-center">Handpicked Favourites just for you</p>
			<div class="post-hny-grids row mt-5">
				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<a href="#">
						<figure>
							<img class="img-fluid" src="assets/images/bg1.jpg" alt="blog-image">
						</figure>
					</a>

					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 10, 2020</li>
						</ul>
						<h4><a href="#">Here to bring your life style to the next level.</a></h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<a href="#">
						<figure>
							<img class="img-fluid" src="assets/images/bg2.jpg" alt="blog-image">
						</figure>
					</a>
					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 10, 2020</li>
						</ul>
						<h4><a href="#">Here to bring your life style to the next level.</a></h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<figure>
						<img class="img-fluid" src="assets/images/bg3.jpg" alt="blog-image">
					</figure>
					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 10, 2020</li>
						</ul>
						<h4><a href="#">Here to bring your life style to the next level.</a></h4>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
					<figure>
						<img class="img-fluid" src="assets/images/bg4.jpg" alt="blog-image">
					</figure>
					<div class="blog-thumbhny-caption">
						<ul class="blog-info-list">
							<li><a href="#admin">By admin</a></li>
							<li class="date-post">
								Aug 10, 2020</li>
						</ul>
						<h4><a href="#">Here to bring your life style to the next level.</a></h4>
					</div>
				</div>

			</div>
		</div>
	</div>
</section> -->
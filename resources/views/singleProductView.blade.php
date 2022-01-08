@extends('shared.layout')

@section('content')

<!-- Single Product Start -->
<section class="single_product_section">
	<!-- /products-->
	<div class="py-5">
		<div class="container py-lg-5">
			<div class="row mt-5">
				<div class="col-lg-6">
					<div class="single_product_img">
						<img src="{{asset($product->productImages[0]->image_url)}}" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div>
						<h5>{{$product->name}}</h5>
						<h2>LKR {{$product->productDetails[0]->presentPrice()}}</h2>
						<p>{{$product->description}}</p>
					</div>
					<div>
						<table class="table table-striped">
							<tbody>
								<tr>
									<th scope="row">Brand</th>
									<td>{{$product->brand->name}}</td>
								</tr>
								<tr>
									<th scope="row">Disease</th>
									<td>Jacob</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div>
						<form class="add-to-card" action="{{ route('addToCart') }}" method="post">
							{{ csrf_field() }}
							<div class="row mt-4">
								<!-- <div class="col-sm-3">
									<h6>Quantity</h6>
									<div class="input-group">
										<span class="input-group-prepend">
											<button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<span class="fa fa-minus"></span>
											</button>
										</span>
										<input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
										<span class="input-group-append">
											<button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[1]">
												<span class="fa fa-plus"></span>
											</button>
										</span>
									</div>
								</div> -->
								<div class="ml-4">
									<h5>Size</h5>
									@foreach($product->productDetails as $item)
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="price" id="priceRange_{{$item->id}}" value="{{$item->price}}">
										<label class="form-check-label" for="priceRange_{{$item->id}}">{{$item->weight}} <br /> LKR {{$item->presentPrice()}}</label>
									</div>
									@endforeach
								</div>

							</div>
							<div class="mt-5">
								<!-- <button class="btn btn-info">Buy Now</button>	 -->
								<input type="hidden" name="id" value="{{ $product->id }}">
								<button type="submit" class="btn btn-success btn-block">Add to cart</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Single Product End -->

<!-- Shopping Section Start -->
<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny">
		<div class="container py-lg-5">
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-1.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-11.jpg">
							</a>
							<ul class="social">
								<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

								<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
								</li>
							</ul>
							<div class="transmitv single-item">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="Women Maroon Top">
									<input type="hidden" name="amount" value="899.99">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Women Maroon Top </a></h3>
							<span class="price"><del>$975.00</del>$899.99</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-2.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-22.jpg">
							</a>
							<ul class="social">
								<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

								<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
								</li>
							</ul>
							<div class="transmitv single-item">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
									<input type="hidden" name="amount" value="599.99">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Men's Pink Shirt </a></h3>
							<span class="price"><del>$775.00</del>$599.99</span>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-3.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-33.jpg">
							</a>
							<ul class="social">
								<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

								<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
								</li>
							</ul>
							<div class="transmitv single-item">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="Dark Blue Top">
									<input type="hidden" name="amount" value="799.99">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Dark Blue Top </a></h3>
							<span class="price"><del>$875.00</del>$799.99</span>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
						<div class="product-image2">
							<a href="#">
								<img class="pic-1 img-fluid" src="assets/images/shop-4.jpg">
								<img class="pic-2 img-fluid" src="assets/images/shop-44.jpg">
							</a>
							<ul class="social">
								<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

								<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
								</li>
							</ul>
							<div class="transmitv single-item">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="Women Tunic">
									<input type="hidden" name="amount" value="399.99">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#">Women Tunic </a></h3>
							<span class="price"><del>$475.00</del>$399.99</span>
						</div>
					</div>

				</div>
			</div>
			<!-- //row-->
		</div>
	</div>
</section>
<!-- Shopping Section End -->

<!-- Features Section Start -->
<section class="features-4">
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
</section>
<!-- Features Section End -->

@endsection

@section('extra-js')
<script>
	$(document).ready(function() {});

	$('#priceRange').change(function() {
		alert();
	});
</script>
@endsection
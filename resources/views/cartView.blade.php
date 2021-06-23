@extends('shared.layout')

@section('content')

<!-- Cart Start -->
<section class="cart_section">

    <div class="py-5">
        <div class="container py-lg-5">
            <div class="row mt-5">
                <div class="col-lg-9">
                    <div class="card products-card p-4">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Camera Canon <br />
                                        <p>Brand</p>
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </td>
                                    <td>LKR 1250.00</td>
                                    <td><button class="btn btn-info"><i class="fa fa-heart"></i></button>
                                        <button class="btn btn-info"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-biller p-4">
                        <div class="mb-4">
                            <h6>Have coupon?</h6>
                            <div class="input-group my-3">
                                <input type="text" class="form-control" placeholder="coupon code" aria-label="coupon code" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">Total price:</p>
                                <h6 class="mb-0">LKR 1500.00</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <p class="mb-0">Discount:</p>
                                <h6 class="mb-0"> - LKR 1500.00</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <p class="mb-0">Total:</p>
                                <h6 class="mb-0"> - LKR 1900.00</h6>
                            </div>
                            <button class="btn btn-primary btn-block mt-4">Make Purchase</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart End -->

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
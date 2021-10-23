		<header class="tophny-header">
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="{{route('home')}}">
						SpryStore</a>
					<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
					<!--/search-right-->
					<div class="search-right">

						<a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
							<span class="search-text">Search here</span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">

								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Keyword" name="search" required="required" autofocus="">
									<button type="submit" class="btn">Search</button>
								</form>

							</div>
							<a class="close" href="#">×</a>
						</div>
						<!-- /search popup -->
					</div>
					<!--//search-right-->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="{{route('home')}}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('products')}}">Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html">What We Offer</a>
							</li>


							<li class="nav-item">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>
						</ul>

						<!--//left-->
						<!--/right-->
						<ul class="top-hnt-right-content col-lg-6">

							<li class="button-log usernhy" style="display: flex; align-items: center">
								<a class="btn-open" href="#">
									<span class="fa fa-user" aria-hidden="true"></span>
								</a>
								<h6 class="ml-2">
									@if (Auth::check())
									Hello {{ Auth::user()->name }}
									@endif
								</h6>

							</li>

							<li class="transmitvcart galssescart2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="top_transmitv_cart" type="submit" name="submit" value="">
										My Cart
										<span class="fa fa-shopping-cart"></span>
									</button>
								</form>
							</li>
						</ul>

					</div>
				</div>
			</nav>
			<!--//nav-->
		</header>
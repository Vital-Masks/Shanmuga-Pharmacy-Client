@include('shared.prescriptionModel')

<header class="tophny-header">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid search-fluid">

			<a class="navbar-brand" href="{{route('home')}}">
				<img src="{{asset('/img/logo2.png')}}" alt="Your logo" title="Your logo" style="height:55px;" />
			</a>

			<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
			<!--/search-right-->
			<!-- <div class="search-right"> -->

			<!-- <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
							<span class="search-text">Search here</span></a> -->
			<!-- search popup -->
			<!-- <div id="search" class="pop-overlay">
							<div class="popup">

								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Keyword" name="search" required="required" autofocus="">
									<button type="submit" class="btn">Search</button>
								</form>

							</div>
							<a class="close" href="#">×</a>
						</div> -->
			<!-- /search popup -->
			<!-- </div> -->
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

				<div class="top-hnt-right-content">

				</div>
				<!--//left-->
				<!--/right-->
				<ul class="top-hnt-right-content col-lg-6">
					<button class="btn  btn-info mr-4" data-toggle="modal" data-target="#prescriptionModal" type="button">Upload Prescription</button>
					@if (Auth::check())
					<div class="auth-user">
						<div class="dropdown">
							<a class="btn-open" href="{{route('profile')}}">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</div>
						<h6 class="ml-2 m-0">
							Hello {{ Auth::user()->name }}
							<a class="btn-open" href="{{route('log-out')}}">
								<span class="fa fa-sign-out" aria-hidden="true"></span>
							</a>
						</h6>
					</div>
					@else
					<li class="button-log usernhy" style="display: flex; align-items: center">
						<!-- <a class="btn-open" href="#">
									<span class="fa fa-user" aria-hidden="true"></span>
								</a> -->
						<div class="dropdown">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</div>


					</li>
					@endif
					<li class="transmitvcart galssescart2 cart cart box_1 d-flex">
						<p class="m-0 mr-2" style="background-color: white; padding: 2px; border-radius:50%; width:25px; height:25px; font-size: 12px; display: flex; align-items: center; justify-content: center; color: red; font-weight: bold; ">{{ count((array) session('cart')) }}</p>
						<a href="{{route('cart')}}" class="top_transmitv_cart m-0">
							My Cart
							<span class="fa fa-shopping-cart"></span>
						</a>
					</li>
				</ul>
				<!--//right-->
				<div class="overlay-login text-left">
					@include('auth.login')
				</div>

				<div class="overlay-register text-left">
					@include('auth.register')
				</div>



			</div>
		</div>
	</nav>
	<!--//nav-->
</header>
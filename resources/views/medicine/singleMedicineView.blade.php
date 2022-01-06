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
                    @forelse($medicine->medicineImages as $key=>$image)
                                <div  {{$loop->first ? 'active' : ''}}">
                                    <img src="{{asset($image->image_url)}}">
                                </div>
                                @empty
                                <div >
                                    <img src="{{asset('/img/no-image.png')}}">
                                </div>
                                @endforelse                    
					</div>
				</div>
				<div class="col-lg-6">
					<div>
						<h3>Generic Name :- {{$medicine->genericName}}</h3>						                       
					</div>
					<div>
						<table class="table table-striped">
							<tbody>
								<tr>
									<th scope="row">Brand</th>
									<td>{{$medicine->brand}}</td>
								</tr>
								<tr>
									<th scope="row">Dossage Weight</th>
									<td>{{$medicine->dossageWeight}}</td>
								</tr>
                                <tr>
									<th scope="row">Category</th>
									<td>{{$medicine->category}}</td>
								</tr>
                                <tr>
									<th scope="row">Disease</th>
									<td>{{$medicine->disease}}</td>
								</tr>
                                <tr>
									<th scope="row">Age Category </th>
									<td>{{$medicine->ageCategory}}</td>
								</tr>
                                <tr>
									<th scope="row">Description </th>
									<td>{{$medicine->description}}</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Single Product End -->



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
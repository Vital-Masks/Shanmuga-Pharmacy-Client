@extends('shared.layout')

@section('content')

<!-- Shopping Section Start -->
<section class="w3l-ecommerce-main">
    <!-- /products-->
    <div class="ecom-contenthny py-5">
        <div class="container py-lg-5">
            <!-- <h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
            <p class="text-center">Handpicked Favourites just for you</p> -->
            @if(Session::has('flash_message_success'))
            <div class="alert alert-success fade show" role="alert">
                {!! session('flash_message_success') !!}
                <button type="button" class="close pl-2" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="row mt-5">
                <div class="col-lg-3">
                    <div class="side_filter__section">
                        <div class="filter__section_1 p-2">
                            <div>
                                <form action="{{ route('search') }}" method="get">

                                    <div class="input-group filter-bar-search">
                                        {{ csrf_field() }}
                                        <input class="form-control" placeholder="search" name="search" id="search"/>
                                        <button type="submit"><span class="fa fa-search" aria-hidden="true"></button>

                                    </div>
                                </form>

                            </div>
                            <div class="mt-2">
                                <ul>
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('products', ['category' => $category->id])}}">{{$category->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="filter__section_2">

                        </div> -->
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="top_filter__section">
                        <div>
                            <h5>{{count($products)}} Items found</h5>
                        </div>
                        <!-- <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort by price
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div> -->
                    </div>

                    <!-- /row-->
                    <div class="ecom-products-grids row">
                        @foreach($products as $product)
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
                                                <input type="hidden" name="weight" value="{{ $product->productDetails[0]->weight }}">
                                                <button type="submit"><span class="fa fa-shopping-bag"></span></button>
                                            </form>

                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form class="add-to-card" action="{{ route('addToCart') }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="price" value="{{ $product->productDetails[0]->price }}">
                                            <input type="hidden" name="weight" value="{{ $product->productDetails[0]->weight }}">
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
                        @endforeach



                    </div>
                    <!-- //row-->
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Shopping Section End -->


@endsection
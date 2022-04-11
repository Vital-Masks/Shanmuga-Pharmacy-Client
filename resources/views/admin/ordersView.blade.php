@extends('admin.shared.layout')

@section('content')

<section class="product-detail p-t-20 p-b-40">

    <div class="container">
        <div class="card card-solid">
            <div class="card-body order-product-detail">
                <div class="carousel-inner">
                    @forelse($order->productImages as $key=>$image)
                    <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                        <img src="{{asset($image->image_url)}}" alt="{{$order->name}}">
                    </div>
                    @empty
                    <div class="carousel-item active">
                        <img src="{{asset('/img/no-image.png')}}" alt="{{$order->name}}">
                    </div>
                    @endforelse
                </div>
                <div class="my-4">
                    {{$order->name}}
                </div>
            </div>
        </div>
</section>

@endsection
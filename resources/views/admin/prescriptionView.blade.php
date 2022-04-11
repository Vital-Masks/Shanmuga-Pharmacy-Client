@extends('admin.shared.layout')

@section('content')

<section class="product-detail p-t-20 p-b-40">
    <div class="container d-flex justify-content-center">
        <div class="card card-solid">
            <div class="card-body">
                <h5 class="mb-3">Prescription</h5>
                <img src="{{asset($prescription->prescription)}}" alt="{{$prescription->name}} " style="height: 600px;margin: 20px" />
            </div>
        </div>
    </div>
</section>

@endsection
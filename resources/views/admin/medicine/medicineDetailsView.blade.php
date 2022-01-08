@extends('admin.shared.layout')
@section('content')

<section class="product-detail p-t-20 p-b-40">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-solid">
                    <div class="card-body">
                        <img src="{{asset('/img/products/98796.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3>{{ $medicine->genericName }}</h3>
                <p class="mt-4">{{ $medicine->brand }}</p>
                <div>
                    <p>
                        Net Weight/Dossage: $ {{ $medicine->dossageWeight }}
                    </p>
                    <p>
                        Category: {{ $medicine->category }}
                    </p>
                    <p>
                        Disease: {{ $medicine->disease}}
                    </p>
                    <p>
                        Age Category: {{ $medicine->ageCategory}}
                    </p>
                    <p>
                        Description: {{ $medicine->description}}
                    </p>


                </div>
            </div>
        </div>
    </div>
</section>

@endsection
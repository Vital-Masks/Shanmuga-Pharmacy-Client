@extends('admin.shared.layout')

@section('content')


<!-- WELCOME-->
<section class="welcome p-t-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title-4">Welcome back
                    <span>{{ Auth::user()->name }} !</span>
                </h1>
                <hr class="line-seprate">
            </div>
        </div>
    </div>
</section>
<!-- END WELCOME-->

<!-- STATISTIC-->
<!-- <section class="statistic statistic2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <h2 class="number">10,368</h2>
                    <span class="desc">members</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number">388,688</h2>
                    <span class="desc">orders</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number">1,086</h2>
                    <span class="desc">total orders</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--red">
                    <h2 class="number">$1,060,386</h2>
                    <span class="desc">total earnings</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END STATISTIC-->


<!-- DATA TABLE-->
<section class="p-t-20">
    <div class="container">
        <div class="row">
            @include('admin.shared.orders')
        </div>
        <div class="row">
            @include('admin.shared.prescription_order')
        </div>
    </div>
</section>
<!-- END DATA TABLE-->

@endsection
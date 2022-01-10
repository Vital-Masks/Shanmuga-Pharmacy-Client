@extends('shared.layout')

@section('content')
<section class="w3l-specification-6">
    <!-- /specification-6-->
    <div class="specification-6-mian py-5">
        <div class="container py-lg-5">
            <div class="row story-6-grids text-left">
                <div class="col-lg-5 story-gd avatar">
                    <img src="assets/images/left2.jpg" class="img-fluid" alt="/">
                    <a class="btn btn-success btn-block mt-3" href="{{route('log-out')}}">Logout</a>
                </div>
                <div class="col-lg-7 story-gd pl-lg-4">
                    <h3 class="hny-title">Your <span>Profile</span></h3>
                    <form method="POST" action="{{route('update-user')}}" name="update-user" id="update-user" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="row story-info-content mt-md-5 mt-4">
                            <div class="col-md-6 story-info">
                                <div class="mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" value=" {{ Auth::user()->first_name }} ">
                                </div>
                            </div>
                            <div class=" col-md-6 story-info">
                                <div class="mb-3">
                                    <label for="lastName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" value=" {{ Auth::user()->last_name }} ">
                                </div>
                            </div>
                            <div class="col-md-6 story-info">
                                <div class="mb-3">
                                    <label for="nic" class="form-label">NIC</label>
                                    <input type="text" class="form-control" id="nic" name="nic" value=" {{ Auth::user()->nic }} ">
                                </div>
                            </div>
                            <div class="col-md-6 story-info">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value=" {{ Auth::user()->phone }} ">
                                </div>
                            </div>
                            <!-- <div class="col-md-12 story-info">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{ Auth::user()->email }}">
                                </div>
                            </div> -->

                            <button type="submit" class="btn btn-primary ml-auto mr-0">Submit</button>
                    </form>


                </div>



            </div>
        </div>
    </div>
</section>
@endsection
@extends('shared.layout')

@section('content')

    <div class="authentication">
        <div class="authentication__form">
            <h4>User Registration</h4>
            <form method="post" action="{{ route('customer-register' )}}">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="State">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>

    @endsection

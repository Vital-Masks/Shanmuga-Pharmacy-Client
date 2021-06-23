@extends('shared.layout')

@section('content')

<!-- Cart Start -->
<section class="cart_section">

    <div class="py-5">
        <div class="container py-lg-5">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card account-card p-4">
                        <div>
                            <h2>My Account</h2>
                            <h5>Welcome back user!</h5>
                            <a href="" class="mt-4">Logout</a>
                        </div>
                        <table class="table mt-5">
                            <thead>
                                <tr>
                                    <th scope="col">Order</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Payment status</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#342344</th>
                                    <td>12/12/2022
                                    </td>
                                    <td>
                                        Paid
                                    </td>
                                    <td>LKR 1250.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>
<!-- Cart End -->



@endsection
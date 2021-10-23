@extends('shared.layout')

@section('content')

<div class="authentication">
    <div class="authentication__form">
        <h4>Login</h4>
        <form method="post" action="{{ route('login.custom' )}}" style="display: flex; flex-direction: column; align-items: center;">
            @csrf
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>

@endsection
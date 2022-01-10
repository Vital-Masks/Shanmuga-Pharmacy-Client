<button type="button" class="overlay-close1 close-login">
    <i class="fa fa-times" aria-hidden="true"></i>
</button>
<div class="wrap" style="width: 500px;">
    <h5 class="text-center mb-4">Login Now</h5>
    <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
        <!--/login-form-->
        <form method="post" action="{{ route('login-custom' )}}">
            @csrf
            <div class="form-group">
                <p class="login-texthny mb-2">Email address</p>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="" required="">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email
                    with anyone else.</small>
            </div>
            <div class="form-group">
                <p class="login-texthny mb-2">Password</p>
                <input type="password" class="form-control" id="password" name="password" placeholder="" required="">
            </div>
            <div class="form-check mb-2">
                <div class="userhny-check">
                    <label class="check-remember container">
                        <input type="checkbox" class="form-check"> <span class="checkmark"></span>
                        <p class="privacy-policy">Remember me</p>
                    </label>
                    <div class="clearfix"></div>
                </div>
            </div>
            <button type="submit" class="submit-login btn mb-4">Sign In</button>
        </form>
        <!--//login-form-->
    </div>
    <!---->
</div>
<a class="btn-register text-white" href="#">
    REGISTER
</a>
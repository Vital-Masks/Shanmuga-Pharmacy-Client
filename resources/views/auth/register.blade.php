<button type="button" class="overlay-close1 close-register">
    <i class="fa fa-times" aria-hidden="true"></i>
</button>
<div class="wrap" style="width: 500px;">
    <h5 class="text-center mb-4">Register Now</h5>
    <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
        <div class="alert alert-danger" role="alert" id="registerFailedAlert">
            <ul id="errorlist">
            </ul>
        </div>
        <!--/login-form-->
        <form method="post" id="regform" action="{{ route('customer-register' )}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <p class="login-texthny mb-2">First Name</p>
                    <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-md-6">
                    <p class="login-texthny mb-2">Last Name</p>
                    <input type="text" class="form-control" id="lastName" name="lastName">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <p class="login-texthny mb-2">NIC</p>
                    <input type="text" class="form-control" id="nic" name="nic" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-md-6">
                    <p class="login-texthny mb-2">Phone Number</p>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <p class="login-texthny mb-2">Address</p>
                    <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <p class="login-texthny mb-2">City</p>
                    <input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-md-4">
                    <p class="login-texthny mb-2">State</p>
                    <input type="text" class="form-control" id="state" name="state">
                </div>
                <div class="form-group col-md-4">
                    <p class="login-texthny mb-2">Zip</p>
                    <input type="text" class="form-control" id="zip" name="zip">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <p class="login-texthny mb-2">Email</p>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-md-6">
                    <p class="login-texthny mb-2">Password</p>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>

            <button type="submit" class="submit-login btn mb-4">Register</button>

        </form>
        <!--//login-form-->
    </div>
    <!---->
</div>

<script>
    $(document).ready(function() {
        $('#registerFailedAlert').hide();
    });

    $(function() {
        // jQuery, bind an event handler or use some other way to trigger ajax call.
        $('#regform').submit(function(event) {
            event.preventDefault();

            jQuery.ajax({
                url: '/customer-register',
                type: 'post',
                data: $('#regform').serialize(), // Remember that you need to have your csrf token included
                dataType: 'json',
                success: function(_response) {
                    // Handle your response..
                    if (_response.success) {
                        location.reload();
                    } else {
                        $('#registerFailedAlert').show();
                    }
                },
                error: function(_response) {
                    // Handle error
                    var html = '';
                    $.each(_response.responseJSON.errors, function(key, value) {
                        html += '<li>' + value + '</li>';
                    });
                    $('#errorlist').html(html);
                    $('#registerFailedAlert').show();

                }
            });
        });
    });
</script>
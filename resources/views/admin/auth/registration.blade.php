<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Shanmuga Admin</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/img/favicon.jpg')}}">
    <!-- Fontfaces CSS-->
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/font-face.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/bootstrap-4.1/bootstrap.min.css')}}">

    <!-- Vendor CSS-->
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/animsition/animsition.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/wow/animate.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">

    <!-- Main CSS-->
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/theme.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/style.css')}}">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('/img/logo2.png')}}" alt="CoolAdmin" style="height: 40px">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('register.custom')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>

                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{ route('admin-login')}}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ URL::asset('admin/assets/vendor/jquery-3.2.1.min.js')}}"></script>

    <!-- Bootstrap JS-->
    <script src="{{ URL::asset('admin/assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

    <!-- Vendor JS -->
    <script src="{{ URL::asset('admin/assets/vendor/slick/slick.min.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/select2/select2.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{ URL::asset('admin/assets/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
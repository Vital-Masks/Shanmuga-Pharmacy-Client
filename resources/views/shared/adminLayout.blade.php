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
    <title>Dashboard 3</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/AdminCSS/font-face.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap-4.1/bootstrap.min.css')}}">

    <!-- Vendor CSS-->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/animsition/animsition.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/wow/animate.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">

    <!-- Main CSS-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/AdminCSS/theme.css')}}">

</head>

<body class="animsition">
    <div class="page-wrapper">
        @include('admin.shared.header')

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div>
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            @yield('admin_content')
        </div>
        @include('admin.shared.footer')
    </div>

    <!-- Jquery JS-->
    <script src="{{ URL::asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>

    <!-- Bootstrap JS-->
    <script src="{{ URL::asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

    <!-- Vendor JS -->
    <script src="{{ URL::asset('assets/vendor/slick/slick.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ URL::asset('assets/vendor/select2/select2.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{ URL::asset('assets/js/AdminJS/main.js')}}"></script>

</body>

</html>
<!-- end document-->
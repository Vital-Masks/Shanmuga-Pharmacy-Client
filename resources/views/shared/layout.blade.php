<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sanmuka Medicals</title>

    <link rel="icon" type="image/x-icon" href="{{asset('/img/favicon.jpg')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-starter.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css')}}">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
    <!-- Template CSS -->
</head>

<body>
    <section class="w3l-banner-slider-main">
        @include('shared.header')
        @yield('content')
        @include('shared.footer')
    </section>


    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery-2.1.4.min.js')}}"></script>
    @yield('extra-js')

    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</body>

</html>


<!--/login-->
<script>
    $(document).ready(function() {
        $(".button-log a").click(function() {
            $(".overlay-login").toggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.close-login').on('click', function() {
        $(".overlay-login").toggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });

    $(document).ready(function() {
        $(".btn-register").click(function() {
            $(".overlay-login").toggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
            $(".overlay-register").toggle(200);
        });
    });
    $('.close-register').on('click', function() {
        $(".overlay-register").toggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
</script>
<!--//login-->
<script>
    // optional
    $('#customerhnyCarousel').carousel({
        interval: 5000
    });
</script>
<!-- cart-js -->
<script src="{{ URL::asset('assets/js/minicart.js')}}"></script>
<script>
    transmitv.render();

    transmitv.cart.on('transmitv_checkout', function(evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!--pop-up-box-->
<script src="{{ URL::asset('assets/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/script.js')}}"></script>
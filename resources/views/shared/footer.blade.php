<section class="w3l-footer-22">
    <!-- footer-22 -->
    <div class="footer-hny ">
        <div class="container py-lg-5">
            <div class="text-txt row">
                <div class="left-side col-lg-4">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('/img/logo2.png')}}" alt="Your logo" title="Your logo" style="height:55px;" />
                    </a>

                    <!-- <p>We are best known as experts in the Medical Industry. We have earned our reputation through decades of excellence in the industry. Fulfilling your medication needs is our primary goal </p> -->
                    <ul class="social-footerhny mt-lg-2 mt-2">

                        <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </div>

                <!-- <div class="right-side col-lg-8 pl-lg-5">
                    <h4>Women's Day Special Offer
                        All Branded Sandals are Flat 50% Discount</h4>

                </div> -->
            </div>

            <!-- Footer bottom -->
            <div class="below-section row">
                <div class="columns col-lg-6">
                    <ul class="jst-link">
                        <li><a href="{{route('terms')}}">Privacy Policy </a> </li>
                        <li><a href="{{route('terms')}}">Term of Service</a></li>
                    </ul>
                </div>
                <div class="columns col-lg-6 text-lg-right">
                    <p>© 2020 sanmukamedicals.com. All rights reserved. Design by
                        vitalmasks
                    </p>
                </div>
                <button onclick="topFunction()" id="movetop" title="Go to top">
                    <span class="fa fa-angle-double-up"></span>
                </button>
            </div>

        </div>
    </div>
    <!-- //titels-5 -->
    <!-- move top -->

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
</section>
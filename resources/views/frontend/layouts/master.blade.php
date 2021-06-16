<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>E-Commerce App | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('ui/frontend') }}/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="{{ asset('ui/frontend') }}/css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/css/owl.carousel.min.css">
    <!-- Owl-Carousel-CSS -->
    @stack('css')

    <link href="{{ asset('ui/frontend') }}/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{ asset('ui/frontend') }}/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->


</head>

<body>

@include('frontend.layouts.partials.header')

@yield('content')

@include('frontend.layouts.partials.footer')

<!-- js -->
<script src="{{ asset('ui/frontend') }}/js/config.js"></script>
<script src="{{ asset('ui/frontend') }}/js/jquery-2.2.3.min.js"></script>

<!-- //js -->
<!-- script for show signin and signup modal -->
<script>
    $(document).ready(function () {
        $("#myModal_btn").modal();
    });
</script>
<!-- //script for show signin and signup modal -->
<!-- smooth dropdown -->
<script>
    $(document).ready(function () {
        $('ul li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });
    });
</script>
<!-- //smooth dropdown -->

<!-- Banner Responsiveslides -->
<script src="{{ asset('ui/frontend') }}/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: false,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- // Banner Responsiveslides -->
<!-- Product slider Owl-Carousel-JavaScript -->
<script src="{{ asset('ui/frontend') }}/js/owl.carousel.js"></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: false,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        responsive: {
            320: {
                items: 1,
            },
            568: {
                items: 2,
            },
            991: {
                items: 3,
            },
            1050: {
                items: 4
            }
        }
    });
</script>
<!-- //Product slider Owl-Carousel-JavaScript -->
<!-- cart-js -->
<script src="{{ asset('ui/frontend') }}/js/minicart.js">
</script>
<script>
    hub.render();

    hub.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->

@stack('script')

<!-- start-smooth-scrolling -->
<script src="{{ asset('ui/frontend') }}/js/move-top.js"></script>
<script src="{{ asset('ui/frontend') }}/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="{{ asset('ui/frontend') }}/js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('ui/frontend') }}/js/bootstrap.js"></script>


@stack('ssl_script')

</body>

</html>

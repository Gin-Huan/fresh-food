<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>
        Famie - Farm Services &amp; Organic Food Store Template | Our
        Products
    </title>

    <link rel="icon" href="img/core-img/favicon.ico" />

    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css"
        integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA=="
        crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/webfonts/fa-solid-900.woff2" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
</head>

<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>

    @include('includes.header')

    <!-- <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg')">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Our Product</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- @include('includes.breadcrumb') -->

    @yield('content')

    @include('includes.footer')

    <script src="{{ asset('js/js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/js/popper.min.js') }}"></script>

    <script src="{{ asset('js/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/js/classynav.js') }}"></script>

    <script src="{{ asset('js/js/wow.min.js') }}"></script>

    <script src="{{ asset('js/js/jquery.sticky.js') }}"></script>

    <script src="{{
                asset('js/js/jquery.magnific-popup.min.js')
            }}"></script>

    <script src="{{ asset('js/js/jquery.scrollup.min.js') }}"></script>

    <script src="{{ asset('js/js/jarallax.min.js') }}"></script>

    <script src="{{ asset('js/js/jarallax-video.min.js') }}"></script>

    <script src="{{ asset('js/js/active.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-23581568-13");
    </script>
</body>

</html>
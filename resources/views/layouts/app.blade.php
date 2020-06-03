<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href={{asset("font-awesome/css/font-awesome.min.css")}} rel="stylesheet" type="text/css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<!-- loader symbol function with java script-->
<div class="loader">
    <img
        src="https://www.clipartmax.com/png/full/197-1970959_whf-logo-spinner-to-indicate-loading-transparent-loading-heart-gif.png"
        alt="Loadig...">

    <script type="application/javascript">
        window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden"; // class "loader hidden"
        });
    </script>
</div>
<body>
<div id="app">
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center header-transparent shadow-lg">
        <div class="container d-flex align-items-center">

            <div class="logo d-flex mr-auto">
                <h1 class="text-light pr-sm-1"><a href="{{route('expert_create')}}">HealthHub</a>
                </h1>

                <div><img src="{{asset('/images/redh_blues.png')}}"
                          alt="HealthHub logo"
                          style="height: 30px;
                      margin-top: auto;"
                          class="pr-3 rounded-circle">
                </div>
            </div>

            <nav class="nav-menu d-none d-lg-block ">
                <ul>

                    <li class="nav-item"><a class="nav-link" href="{{route('expert_create')}}">Use Expert
                            System</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->


    <main>
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <div id="contact">
        <footer id="footer" class="fixed">
            <div class="container">
                <h3>HealthHub</h3>
                <p>Your Way For Better Life.</p>
                <p>Feel free to contact with us via E-mail: <b>health-hub@hotmail.com</b></p>
                <p>via Social Media:</p>
                <div class="social-links">
                    <a href="http://www.twitter.com/heathhub" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="http://www.facebook.com/heathhub" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="http://www.instagram.com/healthhub" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="http://www.skype.com/healthhub" class="skype"><i class="fa fa-skype"></i></a>
                    <a href="http://www.linkedin.com/healthhub" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="copyright">
                    &copy; Copyright <strong><span>HealthHub</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer>
    </div>
    <!-- End Footer -->
</div>
{{--end app--}}
@stack('script')
</body>
</html>

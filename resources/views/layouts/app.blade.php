<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/plyr.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">


</head>

<body class="font-sans antialiased">
    <!-- Removed min-h-screen to let your custom CSS handle the height/background -->
    <div>

        <header class="header header--clean">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Logo -->
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="col-lg-7">
                        <nav class="header__menu">
                            <ul>
                                <li class="{{ Request::is('/home') ? 'active' : '' }}">
                                    <a href="{{ url('/home') }}">Home</a>
                                </li>

                                <li>
                                    <a href="#">
                                        Categories <span class="arrow_carrot-down"></span>
                                    </a>
                                    <ul class="dropdown">
                                        <li><a href="#">Romance</a></li>
                                        <li><a href="#">Adventure</a></li>
                                        <li><a href="#">Magic</a></li>
                                        <li><a href="#">Fantasy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Right Actions -->
                    <div class="col-lg-3">
                        <div class="header__actions">

                            <!-- Search -->
                            <a href="#" class="search-switch">
                                <span class="icon_search"></span>
                            </a>

                            @guest
                            <div class="user-dropdown">

                                <!-- Profile Icon (Trigger) -->
                                <a href="#" class="user-dropdown__toggle">
                                    <span class="icon_profile"></span>
                                </a>

                                <!-- Dropdown Menu -->
                                <ul class="user-dropdown__menu">
                                    <li>
                                        <a href="{{ route('login') }}">
                                            Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}" class="highlight">
                                            Register
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            @endguest


                            @auth
                            <div class="user-dropdown">
                                <a href="#" class="user-dropdown__toggle">

                                    {{ Auth::user()->name }}
                                    <span class="arrow_carrot-down"></span>
                                </a>

                                <ul class="user-dropdown__menu">
                                    <li>
                                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="/" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @endauth

                        </div>
                    </div>

                    <main>
                        {{ $slot }}
                    </main>

                    <!-- Footer Section Begin -->
                    <footer class="footer">
                        <div class="page-up">
                            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="footer__logo">
                                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="footer__nav">
                                        <ul>
                                            <li class="active"><a href="./index.html">Homepage</a></li>
                                            <li><a href="./categories.html">Categories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- Footer Section End -->

                    <!-- Search model Begin -->
                    <div class="search-model">
                        <div class="h-100 d-flex align-items-center justify-content-center">
                            <div class="search-close-switch"><i class="icon_close"></i></div>
                            <form class="search-model-form">
                                <input type="text" id="search-input" placeholder="Search here.....">
                            </form>
                        </div>
                    </div>


                </div>

                <!-- Js Plugins -->
                <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
                <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
                <script src="{{ asset('assets/js/player.js') }}"></script>
                <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
                <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
                <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
                <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
                <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
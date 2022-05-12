<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>@yield('title')</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800">
</head>

<body>
    <div id="app">
        {{-- Header section --}}
        <header>
            <a href="{{ url('/') }}" class="logo">Better Dinner.</a>

            <nav class="navbar">
                <a class="active" href="{{ url('/') }}">Home</a>
                <a href="{{ route('restaurant') }}">restaurants</a>
                <a href="{{ route('menus') }}">Order</a>
                <a href="{{ route('booking') }}">Booking</a>
                <a href="{{ route('about') }}">About</a>
            </nav>

            <div class="icons">
                @guest
                    <a class="auth" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a class="auth" href="{{ route('register') }}">{{ __('Register') }}</a>
                @else
                    <i class="fas fa-bars" id="menu-bars"></i>
                    <i class="fas fa-search" id="search-icon"></i>
                    <form action="" id="search-form">
                        <input type="search" placeholder="search here..." name="" id="search-box">
                        <label for="search-box" class="fas fa-search"></label>
                        <i class="fas fa-times" id="close"></i>
                    </form>
                    <div class="dropdown">
                        <a class="fas fa-shopping-cart" data-toggle="dropdown" aria-hidden="true"></a> <span
                            class="badge badge-pill badge-danger" style="padding-top:3px ">{{ count((array) session('cart')) }}</span>
                    </div>
                    <a class="fas fa-sign-out-alt" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest

            </div>
        </header>

        {{-- Header section --}}
        <section class="home" id="home">
            <div class="home-slider">
                <div class="wrapper">
                    @yield('content')
                </div>

            </div>
        </section>
    </div>

    {{-- <script> --}}
    {{-- document.querySelector('#search-icon').onclick = () =>{ --}}
    {{-- document.querySelector('#search-form').classList.toggle('active'); --}}
    {{-- } --}}

    {{-- document.querySelector('#close').onclick = () =>{ --}}
    {{-- document.querySelector('#search-form').classList.remove('active'); --}}
    {{-- } --}}
    {{-- function loader(){ --}}
    {{-- document.querySelector('.loader-container').classList.add('fade-out'); --}}
    {{-- } --}}

    {{-- function fadeOut(){ --}}
    {{-- setInterval(loader, 3000); --}}
    {{-- } --}}

    {{-- window.onload = fadeOut; --}}

    {{-- </script> --}}




















    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    {{-- Custome JS --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('scripts')
</body>

</html>

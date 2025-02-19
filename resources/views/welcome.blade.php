<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                <a class="" href="{{ url('/') }}">Home</a>
                <a href="{{ route('restaurant') }}">restaurants</a>
                <a href="{{ route('menus') }}">Order</a>
                <a href="{{ route('booking') }}">Booking</a>
                <a href="{{ route('about') }}">About Us</a>
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

                    <a class="fas fa-shopping-cart" href="{{route('cart.list')}}" >
                   
                        {{-- <i class="fas fa-shopping-cart" data-toggle="dropdown" aria-hidden="true"></i>  --}}
                        {{-- <span class="badge badge-pill badge-danger cart-count"> {{ Cart::getTotalQuantity() }}</span> --}}
                    </a>



                    <a class=" fas fa-sign-out-alt" href="{{ route('logout') }}"
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
                    <div class="slide">
                        <div class="image">
                            <img src="{{ asset('assets/cooking.png') }}" alt="">
                        </div>
                        <div class="content">
                            <span style="font-family:  'Abhaya Libre', serif; font-weight: 700 ">Best Food <span
                                    style="color: #e84857;font-family:  'Abhaya Libre', serif; font-weight: 700">Delivery</span>
                                in Your Area</span>
                            <h3>Better Dinner</h3>
                            <p>Better Dinner Specializes in providing our customers with the best food in your local area. Be it Delivery,
                            Pick-Up, booking. we feature best food- made with fresh ingredients and masterful preparation.
                                Whether you’re ordering a multi-course meal or grabbing a table for a drink and pizza at the bar,Better dinner makes it
                                perfectfor you to order your meal, with friends, family, clients and business associates.</p>
                            <a href="{{route('restaurant')}}" class="btn">Order Now</a>
                        </div>


                    </div>
                </div>
                <div class="contentse">
                    <span class="testo" style="font-family:  'Abhaya Libre', serif; font-weight: 700">Our
                        special <span
                            style="color: #e84857; ;font-family:  'Abhaya Libre', serif; font-weight: 700">Restaurants</span></span>
                </div>

                <div class="slide">
                    {{-- <div class="content"> --}}
                    {{-- <span class="testo" style="font-family:  'Abhaya Libre', serif; font-weight: 700">Our special <span --}}
                    {{-- style="color: #e84857; ;font-family:  'Abhaya Libre', serif; font-weight: 700">Restaurants</span></span> --}}
                    {{-- </div> --}}

                    @foreach ($restaurants as $restaurant)
                        <div class="card" style="width: 30rem">
                            <img class="card-img-top" src="{{ asset('assets/cooking.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 2.5rem">{{ $restaurant->name }}</h5>
                                <p class="card-text">{{ $restaurant->description }}</p>
                                <a href="{{ route('menu', $restaurant->id) }}" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="slide">
                    <div class="content">
                        <span style="font-family:  'Abhaya Libre', serif; font-weight: 700 ">Our <span
                                style="color: #e84857;font-family:  'Abhaya Libre', serif; font-weight: 700">Services</span>
                        </span>
                        <h3>Better Dinner</h3>
                        <p>We believe in commitment to our community and in fostering long term relationships with local Business and small restaurants.
                            Our restaurants reflect these connections, featuring local, seasonal produce and sustainably sourced ingredients.</p>
                        <a href="#" class="btn">Order Now</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- --------------------------------------------footer--------------------------------------------- --}}

    <div class="card mb-3">
        <section class="footer">
            <div class="social">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg></a>
                <a href="#">
                    <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                            fill="white"></path>
                    </svg>
                </a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg></a>
                <a href="#"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path
                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"
                            fill="white"></path>
                    </svg></a>
            </div>

            <ul class="list">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('tc') }}">Terms</a>
                </li>
                <li>
                    <a href="{{ route('policy') }}">Privacy Policy</a>
                </li>
            </ul>
            <p class="copyright">BetterDinner@2022</p>
        </section>
    </div>



















    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    {{-- Custome JS --}}
    {{-- <script>
        $(document).ready(function() {
            let token = document.head.querySelector('meta[name = "csrf-token"]');
            if (token) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF_TOKEN': token.content,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    }
                });
            }
        });
    </script> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('scripts')
</body>

</html>

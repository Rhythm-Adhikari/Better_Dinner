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
                <a href="{{route('restaurant')}}">restaurants</a>
                <a href="{{route('menus')}}">Order</a>
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
                    <a href='#' class="fas fa-shopping-cart"></a>
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
                    <div class="slide">
                        <div class="image">
                            <img src="{{ asset('assets/cooking.png') }}" alt="">
                        </div>
                        <div class="content">
                            <span style="font-family:  'Abhaya Libre', serif; font-weight: 700 ">Best Food <span
                                    style="color: #e84857;font-family:  'Abhaya Libre', serif; font-weight: 700">Delivery</span>
                                in Your Area</span>
                            <h3>Better Dinner</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error perferendis eius dicta
                                maxime eveniet, repellendus beatae, similique enim eaque officiis doloremque labore?
                                Fugit culpa provident consequatur animi sint, eum necessitatibus!</p>
                            <a href="#" class="btn">Order Now</a>
                        </div>


                    </div>
                </div>
                <div class="slide">
                    <div class="content"> <span>Our special <span style="color: #e84857; font-weight: 700">Restaurants</span></span></div>
                    @foreach ($restaurants as $restaurant)
                    <div class="card" style="width: 30rem">
                        <img class="card-img-top" src="{{ asset('assets/cooking.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 2.5rem">{{$restaurant->name}}</h5>
                            <p class="card-text">{{$restaurant->description}}</p>
                            <a href="{{route('menu',$restaurant->id)}}" class="btn btn-primary">Order Now</a>
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
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error perferendis eius dicta
                            maxime eveniet, repellendus beatae, similique enim eaque officiis doloremque labore?
                            Fugit culpa provident consequatur animi sint, eum necessitatibus!</p>
                        <a href="#" class="btn">Order Now</a>
                    </div>
                </div>
            </div>
        </section>
    </div>



















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

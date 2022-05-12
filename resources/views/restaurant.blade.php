@extends('layouts.app')
@section('content')

    <section class="restaurant" id="restaurant">

        <h3 class="sub-heading"> Our Partners </h3>
        <h1 class="heading"> Today's Top 10 </h1>

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

    </section>
@endsection

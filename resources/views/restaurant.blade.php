@extends('layouts.app')
@section('content')

    <section class="restaurant" id="restaurant">

        <h1 class="heading"> Our Partners </h1>

        <div class="box-container">
            @foreach ($restaurants as $restaurant)
                <div class="image">
                    <img class="card-img-top" src="{{ asset('assets/cooking.png') }}" alt="Card image cap">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="card-title" style="font-size: 2.5rem">{{$restaurant->name}}</h5>
                     <p class="card-text" style="font-size: small">{{$restaurant->description}}</p>
                     <a href="{{route('menu',$restaurant->id)}}" class="btn btn-primary">Order Now</a>
                </div>
            @endforeach
        </div>

    </section>
@endsection

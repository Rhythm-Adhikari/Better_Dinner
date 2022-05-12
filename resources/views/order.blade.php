@extends('layouts.app')
@section('content')

    <section class="menu" id="menu">

        <h3 class="sub-heading"> our menu </h3>
        <h1 class="heading"> today's speciality </h1>

        <div class="box-container">
            @foreach($menus as $menu)
                <div class="box">
                    <div class="image">
                        <img class="card-img-top" src="{{ asset('assets/cooking.png') }}" alt="Card image cap">
                        <a href="#" class="fas fa-heart"></a>
                    </div>
                    <div class="content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3>{{$menu->name}}</h3>
                        <p>{{$menu->description}}</p>
                        <a href="#" class="btn">add to cart</a>
                        <span class="price">{{$menu->price}}</span>
                    </div>
                </div>
            @endforeach

        </div>

    </section>
@endsection

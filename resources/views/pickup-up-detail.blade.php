@extends('layouts.app')
@section('content')
    <div class="container" style="padding-bottom: 200px; font-size: 1.5rem">
        <div class="row">
            <div class="col-sm-6">
                <img class="card-img-top" src="{{ asset('assets/summary.png') }}" src="..." alt="Card image cap">
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title" style="font-weight: bolder"> Pick up Token</h3>
                        <p class="card-text" style="color:#e84857; font-weight: bold;">{{ $pickupDetail->pickup_token }}</p>
                        <p class="card-text">Show this token at the restaurant to pick up your food.</p>
                        <hr class="summary">
                        <small class="text-muted">Order submitted at
                            {{ Carbon\Carbon::parse($pickupDetail->created_at) }} </small>
                        <hr class="summary">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"> Order Summary</h3>
                                <ul class="list-group mb-3">

                                    @foreach ($menus as $menu)
                                        @php
                                            $restaurants = DB::table('restaurants')
                                                ->where('id', $menu->restaurant_id)
                                                ->get();
                                        @endphp
                                        @foreach ($restaurants as $restaurant)
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h5 class="my-0">{{ $menu->name }}</h5>
                                                    <small class="text-muted">Quantity: {{ $menu->quantity }}
                                                    </small><br>
                                                    <small class="text-muted">Restaurant: {{ $restaurant->name }}
                                                    </small><br>
                                                    <small class="text-muted">Location: {{ $restaurant->location }}
                                                    </small><br>
                                                </div>

                                            </li>
                                        @endforeach
                                    @endforeach

                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total (AUD)</span>
                                        <strong> Total: ${{ $pickupDetail->total }}</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
          
        </div>
    </div>
@endsection

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
                        <h3 class="card-title" style="font-weight: bolder"> Delivery Token</h3>
                        <p class="card-text" style="color:#e84857; font-weight: bold;">
                            {{ $bookingDetail->booking_token }}</p>
                        <hr class="summary">
                        <h3 class="card-title" style="font-weight: bolder"> Booking Detail</h3>
                        <small class="text-muted">Booking submitted:
                            {{ Carbon\Carbon::parse($bookingDetail->created_at) }} </small> <br>
                        <small class="text-muted">Name:
                            {{ $bookingDetail->name }} </small><br>
                        <small class="text-muted">Phone Number:
                            {{ $bookingDetail->phone }} </small><br>
                        <small class="text-muted">Booking Date:
                            {{ $bookingDetail->date }} </small><br>
                        <small class="text-muted">Booking Time:
                            {{ $bookingDetail->time }} </small><br>
                        <small class="text-muted">Number of adults:
                            {{ $bookingDetail->adult }} </small><br>
                        <small class="text-muted">Number of children:
                            {{ $bookingDetail->children }} </small><br>
                        <hr class="summary">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"> Pre-order meals</h3>
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
                                                </div>

                                            </li>
                                        @endforeach
                                    @endforeach

                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total (AUD)</span>
                                        <strong> Total: ${{ $bookingDetail->total }}</strong>
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

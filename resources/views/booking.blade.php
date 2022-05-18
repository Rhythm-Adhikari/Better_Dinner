@extends('layouts.app')
@section('content')

{{-- TODO: Fix the input field --}}
<div class="boo">
 <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Make your reservation</h1>
                        </div>

                        <form>

                            <div class="form-group">
                                <select class="custom-select" id="inputGroupSelect02" type="text"
                                    placeholder="Select Restaurant" required>

                                    <option selected>Please Choose your Restaurant </option>
                                    @foreach ($restaurants as $restaurant)
                                        <option>
                                            {{ $restaurant->name }}

                                        </option>
                                    @endforeach
                                </select>
                                <span class="form-label">Restaurants</span>
                            </div>
                            <div class="form-group">
                                <select class="custom-select" id="inputGroupSelect02" type="text" placeholder="Select Menu"
                                    required>


                                    <option selected>Please Choose...</option>


                                </select>
                                <span class="form-label">Menus</span>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="date" required>
                                        <span class="form-label">Check In</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="timepicker" type="time" required>
                                        <span class="form-label">Pick Time</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" required>
                                            <option value="" selected hidden>Table size</option>
                                            <option selected>Table size...</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Table</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" required>
                                            <option value="" selected hidden>no of Guests</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>5</option>
                                            <option>5+</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Guests</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" required>
                                            <option value="" selected hidden>Kids Friendly location?</option>
                                            <option>Y</option>
                                            <option>N</option>

                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">kids</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Enter your Email">
                                        <span class="form-label">Email</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="tel" placeholder="Enter you Phone">
                                        <span class="form-label">Phone</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">Book Now</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
    @endsection

@extends('layouts.app_auth')

<div class="register">

    <div class="center">

        <h1>Better Dinner</h1>
        <form method="POST" action="{{ route('register') }}">
            {{-- <form action="{{route('register')}}" method="POST"> --}}
            @csrf
            <div class="txt_field">
                <input type="name" name="name" id="name" autofocus required>
                <span></span>
                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
            </div>


            <div class="txt_field">
                <input type="email" name="email" id="email" autofocus required>
                <span></span>
                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
            </div>

            <div class="txt_field">
                <input type="password" name="password" id="password" @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="password">Password</label>
            </div>

            <div class="txt_field">
                <input type="password" name="password_confirmation" id="password-confirm" required
                    autocomplete="new-password">
                <span></span>
                <label for="password-confirm">Confirm Password</label>
            </div>

            <button type="submit" class="button">Register</button>


        </form>
    </div>

</div>

<div class="tesst">
    <img src="{{ asset('img/logo.png') }}" width="1469px" height="980px" />


</div>

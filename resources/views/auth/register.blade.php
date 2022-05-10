@extends('layouts.app_auth')

@section('content')
<h2>Welcome to Better Dinner</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="name" name="name" placeholder="Name" id="name" required />
            <input type="email" name="email" id="email" placeholder="Email" autofocus required />
            <input type="password" placeholder="Password" name="password" id="password" @error('password') is-invalid @enderror required autocomplete="new-password"
                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            />

            <input type="password" placeholder="Confirm Password" name="password_confirmation" id="password-confirm" required autocomplete="new-password" />
            <button type="submit" class="button">Sign Up</button>
        </form>
    </div>


    <div class="form-container sign-in-container">

        <img src="{{ asset('img/logo.png') }}" style=" position: absolute;
  width: 400px;  height: 600px"/>
    </div>
{{--    signup ends and sign in starts--}}

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Welcome To Better dinner</h1>
                <p>Sign Up To Continue</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>Please Login To Continue</p>
                <a href="{{ route('login') }}" class="ghost" id="signIn">Sign In</a>

            </div>

        </div>
    </div>
</div>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
@endsection


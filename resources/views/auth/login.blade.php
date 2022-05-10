@extends('layouts.app_auth')

<h2 style="font-weight: 800">Welcome to Better Dinner</h2>
<div class="container" id="container">
{{--    <div class="form-container sign-up-container">--}}
{{--        <form action="{{route('register')}}" method="POST">--}}
{{--            @csrf--}}
{{--            <h1>Create Account</h1>--}}
{{--            <div class="social-container">--}}
{{--                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>--}}
{{--                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>--}}
{{--            </div>--}}
{{--            <span>or use your email for registration</span>--}}
{{--            <input type="text" placeholder="Name" id="name" autofocus required />--}}
{{--            <input type="email" id="email" placeholder="Email" autofocus required />--}}
{{--            <input type="password" placeholder="Password" name="password" id="password" @error('password') is-invalid @enderror"required autocomplete="new-password" />--}}
{{--            @error('password')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}
{{--            <input type="password" placeholder="Confirm Password" name="password_confirmation" id="password-confirm" required autocomplete="new-password" />--}}
{{--            <button>Sign Up</button>--}}
{{--        </form>--}}
{{--    </div>--}}
    <div class="form-container sign-in-container">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <h1>Sign in</h1>
            {{-- <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div> --}}
            <span>or use your account</span>
            <input type="email" name="email" id="email" placeholder="Email" autofocus required />
            <input type="password" name="password" id="password" placeholder="Password" autofocus required />
            <a href="#">Forgot your password?</a>
            <button>Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Better Dinner</h1>
                <p>Sign up to continue</p>
                <a href="{{ route('register') }}" class="ghost" id="signIn">Sign Up</a>
            </div>
        </div>
    </div>
</div>



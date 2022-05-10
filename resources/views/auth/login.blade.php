@extends('layouts.app_auth')

<h2 style="font-weight: 800">Welcome to Better Dinner</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <h1>Create Account</h1>

            <span>to get the best food delivered to your area</span>
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
        <form action="{{route('login')}}" method="POST">
            @csrf
            <h1>Sign in</h1>

            <span>To get the best food delivered to your area</span>
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
                <h1>Order Now!</h1>
                <p>Join us to get the best food in your area</p>
                <button class="ghost" id="signUp">Sign Up</button>
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



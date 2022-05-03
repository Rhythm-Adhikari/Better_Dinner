@extends('layouts.app_auth')

<div class="login">
    <div class="center">
        <h1>Better Dinner</h1>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="txt_field">
                <input type="email" name="email"  id="email" autofocus required>
                <span></span>
                <label for="email">Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" id="password" autofocus required>
                <span></span>
                <label for="password">Password</label>
            </div>
            <button type="submit" class="button" >Login</button>
            <div class="signup_link">
                Not a member? <a href="">Sign Up</a>
            </div>
        </form>
    </div>
</div>

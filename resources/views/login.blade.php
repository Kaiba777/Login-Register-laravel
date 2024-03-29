@extends('layouts.app')

@section('title', 'Login&Register-Laravel')

@section('content')
    <section class="main"> 
        <span class="x">
            <i class="bi bi-x-lg close"></i>
        </span>
        <div class="container-login">
            <h1>Login</h1>
            <form action="{{ url('/storeLogin') }}" method="post">
                @csrf
                <div class="input-box">
                    <i class="bi bi-briefcase-fill icon"></i>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <i class="bi bi-lock-fill icon"></i>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember">
                    <label for="checkbox">
                        <input type="checkbox" id="checkbox" value="1" name="confirm" required> Remember me
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>

                <input type="submit" value="Login">
            </form>
            <div class="account-register">
                <p>Don't have an account? <strong><a href="#" class="register-link">Register</a></strong></p>
            </div>
        </div>

        <div class="container-register">
            <h1>Registration</h1>
            <form action="{{ url('/storeRegister') }}" method="post">
                @csrf
                <div class="input-box">
                    <i class="bi bi-person-fill icon"></i>
                    <input type="text" name="username" required>
                    <label>Username</label>

                    @error('username')
                        <div id="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="bi bi-briefcase-fill icon"></i>
                    <input type="email" name="email" required>
                    <label>Email</label>

                    @error('email')
                        <div id="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-box">
                    <i class="bi bi-lock-fill icon"></i>
                    <input type="password" name="password" required>
                    <label>Password</label>

                    @error('password')
                        <div id="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="remember">
                    <label for="valided">
                        <input type="checkbox" id="valided" value="1" name="confirm" required> I agree to the terms & conditions
                    </label>

                    @error('confirm')
                        <div id="error">{{ $message }}</div>
                    @enderror
                </div>

                <input type="submit" value="Register">
            </form>
            <div class="account-login">
                <p>Already have an account? <strong><a href="#" class="login-link">Login</a></strong></p>
            </div>
        </div>
    </section>
    
    <script defer src="{{ asset('js/scrypt.js') }}"></script>
@endsection
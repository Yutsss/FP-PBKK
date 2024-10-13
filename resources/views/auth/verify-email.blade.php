@extends('components.layouts.app')

<!DOCTYPE html>
<html lang="en">
    <div class="homer-page">
        <div class="page">
    <div class="navbar">
        <img class="book-open" src="{{ asset('images/Book open.svg') }}"/>

        <a href="/">Home</a>
        <a href="/genre">Genre</a>
        <a href="/borrow">Borrow</a>
        <a href="#wishlist">Wishlist</a>

        <div class="search">
            <div class="text-wrapper">Value</div>
            <img class="x" src="{{ asset('images/X.svg') }}"/>
        </div>
        @if(auth()->check())
        <div class="button-grup">
            <button class="button" onclick="window.location.href='/logout'">Logout</button>
            <button class="button-wrapper" onclick="window.location.href='/profile'">Profile</button>
        @else
        <div class="button-grup">
            <button class="button" onclick="window.location.href='/login'">Login</button>
            <button class="button-wrapper" onclick="window.location.href='/register'">Register</button>
        </div>
        @endif
    </div>
    </div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="Highlight">
<div class="container">
    <div class="icon">
        <img src="envelope-icon.png" alt="Email Sent">
    </div>
    <h1>Verification Email Already Sent</h1>
    <p>Please check your email to verify your account.</p>
    <div class="actions">
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf <!-- Menambahkan token CSRF untuk keamanan -->
            <button type="submit" class="btn">Resend Email</button>
        </form>
    </div>
</div>
    </div>
</div>
</body>
<div class="overlap-group-wrapper">
    <div class="overlap-group">
        <img class="instagram" src="{{ asset('images/Instagram.svg') }}"/>
        <img class="twitter" src="{{ asset('images/Twitter.svg') }}"/>
        <img class="github" src="{{ asset('images/Github.svg') }}"/>
        <img class="location" src="{{ asset('images/location_on.svg') }}"/>
        <div class="text-wrapper-2">Contact</div>
        <div class="text-wrapper-3">About</div>
        <div class="text-wrapper-4">Help</div>
        <div class="text-wrapper-5">Feedback</div>
    </div>
</div>
</html>

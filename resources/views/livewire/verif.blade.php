@extends('ap')
@section('content')

<div class="homer-page">
    <div class="page">
        <div class="navbar">
            <img class="book-open" src="{{ asset('img/book-open.svg') }}" />
            <!-- <div class="text-wrapper-7">Home</div>
            <div class="text-wrapper-8">Genres</div>
            <div class="text-wrapper-9">Borrow</div>
            <div class="text-wrapper-10">Wishlist</div> -->

            <a href="#home">Home</a>
            <a href="#genre">Genre</a>
            <a href="#borrow">Borrow</a>
            <a href="#wishlist">Wishlist</a>

            <div class="search">
                <div class="text-wrapper">Value</div>
                <img class="x" src="{{ asset('img/x.svg') }}" />
            </div>
            <div class="button-grup">
                <button class="button" onclick="window.location.href='/login'">Login</button>
                <button class="button-wrapper" onclick="window.location.href='/register'">Register</button>
            </div>
        </div>
        <body>
        <div class="container">
            <div class="icon">
                <img src="envelope-icon.png" alt="Email Sent">
            </div>
            <h1>Verification Email Already Sent</h1>
            <p>Please check your email to verify your account.</p>
            <div class="actions">
                <button class="btn">Resend Email</button>
                <a href="/" class="link">Return to Homepage</a>
            </div>
        </div>
        <div class="overlap-group-wrapper">
            <div class="overlap-group">
                <img class="instagram" src="{{ asset('img/instagram.svg') }}" />
                <img class="twitter" src="{{ asset('img/twitter.svg') }}" />
                <img class="github" src="{{ asset('img/github.svg') }}" />
                <img class="location" src="{{ asset('img/location.svg') }}" />
                <div class="text-wrapper-2">Contact</div>
                <div class="text-wrapper-3">About</div>
                <div class="text-wrapper-4">Help</div>
                <div class="text-wrapper-5">Feedback</div>
            </div>
    </div>
        </body>
</div>

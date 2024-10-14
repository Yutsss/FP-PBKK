<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Livewire\Main;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Http\Request;

// Route::get('/', Main::class)->name('main');

Route::get('/', function () {
    return view('livewire.main-page');
})->name('main');

Route::get('/home', function () {
    return view('livewire.main-page');
})->name('home')->middleware(['auth', 'verified']);

Route::get('/register', Register::class)->name('register');

Route::get('/genre', function () {
   return view('livewire.genre-page');
})->name('genres')->middleware('auth', `verified`);

Route::get('/borrow', function () {
    return view('livewire.borrow-page');
 })->name('borrow')->middleware('auth', `verified`);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('main');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/login', Login::class)->name('login')
    ->middleware('guest');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Livewire\Auth\Register;

Route::get('/', function () {
    return view('livewire.homer');
})->name('main');

//Route::get('/home', function () {
//    return view('livewire.homer');
//})->name('home');

Route::get('/email/verify', function () {
    return view('livewire.auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('main');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/register', Register::class)->name('register');

Route::get('/login', function () {
    return view('livewire.auth.login');
})->name('login');

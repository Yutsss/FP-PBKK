<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('livewire/home-page');
})->name('main');

Route::get('/homer', function () {
    return view('livewire/homer');
})->name('mains');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('main');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/register', function () {
    return view('test-register');
})->name('main');
Route::post('/register', [UserController::class, 'register'])->name('register');

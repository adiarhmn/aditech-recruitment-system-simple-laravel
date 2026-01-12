<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// PUBLIC ROUTE
Route::get('/', function () {
    return view('public.landing-page');
});


// AUTH ROUTE
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');



// ADMIN ROUTE
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard.admin-dashboard');
    })->name('dashboard');
});

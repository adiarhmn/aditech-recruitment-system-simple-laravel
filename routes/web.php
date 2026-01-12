<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\JobPosting\ShowJobPostingController;
use Illuminate\Support\Facades\Route;

// PUBLIC ROUTE
Route::get('/', function () {
    return view('public::landing-page');
});


// AUTH ROUTE
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



// ADMIN ROUTE
Route::prefix('admin')->group(function () {
    // DASHBOARD ROUTE - ADMIN
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('dashboard');

    // JOB POSTING ROUTE - ADMIN
    Route::prefix('jobs')->group(function () {
        Route::get('/', [ShowJobPostingController::class, 'showJobPosting'])->name('jobs');
    });
});

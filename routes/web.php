<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\JobPosting\CreateJobPostingController;
use App\Http\Controllers\JobPosting\ShowJobPostingController;
use Illuminate\Support\Facades\Route;

// PUBLIC ROUTE
Route::get('/', function () {
    return view('public::landing-page');
});


// AUTH ROUTE
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// ADMIN ROUTE
Route::prefix('admin')->group(function () {
    // DASHBOARD ROUTE - ADMIN
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('dashboard');

    // JOB POSTING ROUTE - ADMIN
    Route::prefix('jobs')->group(function () {
        Route::get('/', [ShowJobPostingController::class, 'index'])->name('admin.jobs.index');
        Route::get('/create', [CreateJobPostingController::class, 'create'])->name('admin.jobs.create');
        Route::post('/', [CreateJobPostingController::class, 'store'])->name('admin.jobs.store');
        Route::get('/{id}', [ShowJobPostingController::class, 'show'])->name('admin.jobs.show');
    });
});

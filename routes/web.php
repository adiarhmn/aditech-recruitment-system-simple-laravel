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
})->name('public.landing-page');


// AUTH ROUTE
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



// CANDIDATE ROUTE
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'candidateDashboard'])->name('candidate.dashboard');
    
    // JOB POSTING ROUTE - CANDIDATE
    Route::prefix('jobs')->group(function () {
        Route::get('/', [ShowJobPostingController::class, 'candidateIndex'])->name('candidate.jobs.index');
        Route::get('/{id}', [ShowJobPostingController::class, 'candidateShow'])->name('candidate.jobs.show');
        
        // APPLICATION ROUTES
        Route::get('/{id}/apply', [\App\Http\Controllers\Application\CandidateApplicationController::class, 'create'])->name('candidate.jobs.apply');
        Route::post('/{id}/apply', [\App\Http\Controllers\Application\CandidateApplicationController::class, 'store'])->name('candidate.jobs.apply.store');
    });

    // PROFILE ROUTES
    Route::get('/profile', [\App\Http\Controllers\Profile\ProfileController::class, 'edit'])->name('candidate.profile.edit');
    Route::patch('/profile', [\App\Http\Controllers\Profile\ProfileController::class, 'update'])->name('candidate.profile.update');
});


// ADMIN ROUTE
Route::prefix('admin')->group(function () {
    // DASHBOARD ROUTE - ADMIN
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');

    // JOB POSTING ROUTE - ADMIN
    Route::prefix('jobs')->group(function () {
        Route::get('/', [ShowJobPostingController::class, 'index'])->name('admin.jobs.index');
        Route::get('/create', [CreateJobPostingController::class, 'create'])->name('admin.jobs.create');
        Route::post('/', [CreateJobPostingController::class, 'store'])->name('admin.jobs.store');
        Route::get('/{id}', [ShowJobPostingController::class, 'show'])->name('admin.jobs.show');
    });
});

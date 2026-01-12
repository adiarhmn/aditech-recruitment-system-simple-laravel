<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Placeholder routes for the landing page
Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/register', function () {
    return "Register Page (Placeholder)";
})->name('register');

Route::get('/dashboard', function () {
    return "Dashboard (Placeholder)";
})->middleware(['auth'])->name('dashboard');

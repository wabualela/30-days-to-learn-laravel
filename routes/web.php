<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')
    ->name('home');
Route::view('/contact', 'contact')
    ->name('contact');

Route::resource('jobs', App\Http\Controllers\JobController::class);

// Auth routes
Route::get('/register', [ App\Http\Controllers\RegisteredUserController::class, 'create' ])
    ->name('register.create');

Route::post('/register', [ App\Http\Controllers\RegisteredUserController::class, 'store' ])
    ->name('register.store');

Route::get('/login', [ App\Http\Controllers\AuthenticatedUserController::class, 'create' ])
    ->name('login.create');

Route::post('/login', [ App\Http\Controllers\AuthenticatedUserController::class, 'store' ])
    ->name('login.store');



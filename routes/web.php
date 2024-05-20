<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')
    ->name('home');
Route::view('/contact', 'contact')
    ->name('contact');

Route::resource('jobs', App\Http\Controllers\JobController::class)
    ->except([ 'index', 'show' ])
    ->middleware([ 'auth', 'can:update,job' ]);

// Job routes
Route::controller(App\Http\Controllers\JobController::class)->group(function () {
    Route::get('/jobs', 'index')
        ->name('jobs.index');

    Route::post('/jobs', 'store')
        ->name('jobs.store');

    Route::get('/jobs/{job}', 'show')
        ->name('jobs.show');

    Route::middleware('auth')->group(function () {

        Route::get('/jobs/create', 'create')
            ->name('jobs.create');

        Route::get('/jobs/{job}/edit', 'edit')
            ->name('jobs.edit')
            ->can('update', 'job');
            
        Route::patch('/jobs/{job}', 'update')
            ->name('jobs.update')
            ->can('update', 'job');

        Route::delete('/jobs/{job}', 'destory')
            ->name('jobs.destory')
            ->can('update', 'job');
    });
});
// Auth routes
Route::get('/register', [ App\Http\Controllers\RegisteredUserController::class, 'create' ])
    ->name('register');

Route::post('/register', [ App\Http\Controllers\RegisteredUserController::class, 'store' ])
    ->name('register.store');

Route::get('/login', [ App\Http\Controllers\AuthenticatedUserController::class, 'create' ])
    ->name('login');

Route::post('/login', [ App\Http\Controllers\AuthenticatedUserController::class, 'store' ])
    ->name('login.store');

Route::delete('/logout', [ App\Http\Controllers\AuthenticatedUserController::class, 'destroy' ])
    ->name('logout');


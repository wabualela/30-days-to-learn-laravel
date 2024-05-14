<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', [ 
        'jobs' => Job::with('employer')->latest()->simplePaginate(10),
    ]);
});

Route::post('/jobs', function () {
    // validations

    Job::create([ 
        'title'       => request('title'),
        'salary'      => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', [ 
        'job' => Job::find($id),
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

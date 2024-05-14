<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// List Jobs
Route::get('/jobs', function () {
    return view('jobs.index', [ 
        'jobs' => Job::with('employer')->latest()->simplePaginate(10),
    ]);
});

// Save Job
Route::post('/jobs', function () {

    request()->validate([ 
        'title'  => 'required|min:3|max:255',
        'salary' => 'required|numeric',
    ]);
    Job::create([ 
        'title'       => request('title'),
        'salary'      => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

// Create Job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Edit Job
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', [ 
        'job' => $job,
    ]);
});

// Show Job
Route::get('/jobs/{job}', function (Job $job) {

    return view('jobs.show', [ 
        'job' => $job,
    ]);
});

// Update Job
Route::patch('/jobs/{job}', function (Job $job) {

    request()->validate([ 
        'title'  => 'required|min:3|max:255',
        'salary' => 'required|numeric',
    ]);

    // authorized user 

    $job->update([ 
        'title'  => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect("/jobs/{$job->id}");
});

// Destroy Job 
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [ 'id' => 1, 'name' => 'Software Engineer', 'salary' => 100000 ],
            [ 'id' => 2, 'name' => 'Web Developer', 'salary' => 80000 ],
            [ 'id' => 3, 'name' => 'Data Analyst', 'salary' => 90000 ],
            [ 'id' => 4, 'name' => 'UI/UX Designer', 'salary' => 75000 ],
            [ 'id' => 5, 'name' => 'Project Manager', 'salary' => 110000 ],
            [ 'id' => 6, 'name' => 'Network Administrator', 'salary' => 85000 ],
            [ 'id' => 7, 'name' => 'Mobile App Developer', 'salary' => 95000 ],
            [ 'id' => 8, 'name' => 'Quality Assurance Engineer', 'salary' => 80000 ],
            [ 'id' => 9, 'name' => 'Database Administrator', 'salary' => 90000 ],
            [ 'id' => 10, 'name' => 'Systems Analyst', 'salary' => 85000 ],
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [ 'id' => 1, 'name' => 'Software Engineer', 'salary' => 100000 ],
        [ 'id' => 2, 'name' => 'Web Developer', 'salary' => 80000 ],
        [ 'id' => 3, 'name' => 'Data Analyst', 'salary' => 90000 ],
        [ 'id' => 4, 'name' => 'UI/UX Designer', 'salary' => 75000 ],
        [ 'id' => 5, 'name' => 'Project Manager', 'salary' => 110000 ],
        [ 'id' => 6, 'name' => 'Network Administrator', 'salary' => 85000 ],
        [ 'id' => 7, 'name' => 'Mobile App Developer', 'salary' => 95000 ],
        [ 'id' => 8, 'name' => 'Quality Assurance Engineer', 'salary' => 80000 ],
        [ 'id' => 9, 'name' => 'Database Administrator', 'salary' => 90000 ],
        [ 'id' => 10, 'name' => 'Systems Analyst', 'salary' => 85000 ],
    ];

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);

    return view('job', [
        'job' => $job,
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

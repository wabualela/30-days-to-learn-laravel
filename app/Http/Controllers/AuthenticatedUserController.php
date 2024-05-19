<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticatedUserController extends Controller
{
    function create()
    {
        return view('auth.login');
    }

    function store(Request $request)
    {
        dd(request()->all());
    }
}

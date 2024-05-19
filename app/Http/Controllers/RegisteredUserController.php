<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    function create()
    {
        return view('auth.register');
    }

    function store(Request $request)
    {

        $validatedAttributes = $request->validate([ 
            'first_name' => [ 'required', 'min:3', 'max:255' ],
            'last_name'  => [ 'required', 'min:3', 'max:255' ],
            'email'      => [ 'required', 'email', 'unique:users,email' ],
            'password'   => [ 'required', 'min:8', Password::default(), 'confirmed' ],
        ]);

        $user = User::create($validatedAttributes);

        Auth::login($user);
        // rediect to dashboard

        return redirect()->route('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthenticatedUserController extends Controller
{
    function create()
    {
        return view('auth.login');
    }

    function store(Request $request)
    {
        // validate the user
        $validatedAttributes = $request->validate([ 
            'email'    => [ 'required', 'email' ],
            'password' => [ 'required' ],
        ]);
        // attempt to log the user in
        if (!Auth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages([ 
                'email' => 'Credentials do not match our records.',
            ]);
        }
        $request->session()->regenerate();
        return redirect()->route('home');
    }

    function destroy()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}

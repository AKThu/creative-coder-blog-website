<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function create()
    {
        return view("login.create");
    }

    public function login()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        if (auth()->attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('/')->with('success', 'Welcome ' . auth()->user()->name);
        } else {
            return back()->withErrors([
                'email' => 'Your email is something wrong'
            ]);
        }
    }
}

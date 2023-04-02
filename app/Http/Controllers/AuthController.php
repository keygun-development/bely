<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('inloggen');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'key' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->key])) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors(['email' => 'Je hebt de verkeerde inloggegevens ingevoerd.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}

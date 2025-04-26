<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'Welcome back!');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        return redirect('/');
    }
}
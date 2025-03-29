<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function signin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            return 'logged in';
        }

        return redirect('/')->with('error', 'Invalid credentials');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255|unique:users,nickname',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 
                'required',
                'string',
                'min:8',
                'max:16',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/',
                'confirmed',
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        // Send Welcome Email
        Mail::to($user->email)->send(new WelcomeMail($user));

        // Log in the user
        Auth::login($user);

        return 'registered successfully';
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
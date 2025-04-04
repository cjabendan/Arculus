<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // Clean up expired tokens
        User::where('token_expires_at', '<', now())->update([
            'login_token' => null,
            'token_expires_at' => null,
        ]);

        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect('/dashboard');
        }

        return redirect('/');
    }

    public function register(Request $request)
    {
        User::where('token_expires_at', '<', now())->update([
            'login_token' => null,
            'token_expires_at' => null,
        ]);

        $data = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255|unique:users,nickname',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => [
                'required',
                'string',
                'min:8',
                'max:16',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/',
                'confirmed',
            ],
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        $user->login_token = Str::random(32);
        $user->token_expires_at = now()->addHours(2); 
        $user->save();

        Mail::to($user->email)->send(new WelcomeEmail($user));

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
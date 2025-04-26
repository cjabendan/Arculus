<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; 
use App\Models\User;
use App\Mail\ResetEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PasswordResetController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email does not exist.');
        }

        $token = Str::random(64);

        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            ['token' => $token, 'created_at' => now()]
        );
        
        // Send the reset email
        Mail::to($user->email)->send(new ResetEmail($token));

        return back()->with('success', "We've sent a reset link to your email.");
    }

    public function showResetPasswordForm($token)
    {
        $reset = DB::table('password_resets')->where('token', $token)->first();

        // Check if the token is invalid or expired
        if (!$reset || now()->diffInMinutes($reset->created_at) > 15) {
            return redirect('/')->with('error', 'This reset link is invalid or has expired. Please request a new one.');
        }

        // If the token is valid, show the reset password form
        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $reset = DB::table('password_resets')->where('token', $request->token)->first();

        if (!$reset) {
            return back()->with('error', 'Invalid or expired token.');
        }

        $user = User::where('email', $reset->email)->first();

        if (!$user) {
            return back()->with('error', 'User does not exist.');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        DB::table('password_resets')->where('email', $reset->email)->delete();

        return redirect('/login')->with('success', 'Your password has been reset!');
    }
}
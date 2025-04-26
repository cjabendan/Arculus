<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Mail\GoogleLoginSuccess;
use Illuminate\Support\Facades\Mail;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')
            ->with(['prompt' => 'select_account'])
            ->redirect();
    }


    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
    
            Log::info('Google User:', (array) $googleUser);
    
            // Find or create the user
            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'first_name' => $googleUser->user['given_name'] ?? '',
                    'last_name' => $googleUser->user['family_name'] ?? '',
                    'nickname' => $googleUser->getNickname() ?? '',
                    'username' => $googleUser->getNickname() ?? Str::slug($googleUser->getName()) ?? $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt(Str::random(16)),
                ]
            );
    
            Auth::login($user);
    
            Log::info('User created or found:', $user->toArray());
    
            // ✅ Send email only if user was newly created
            if ($user->wasRecentlyCreated) {
                Mail::to($user->email)->send(new GoogleLoginSuccess($user));
            }
    
            return redirect()->intended('dashboard')->with('success', 'Logged in with Google!');
        } catch (\Exception $e) {
            Log::error('Google login error: ' . $e->getMessage());
            return redirect('/')->with('error', 'Failed to log in with Google.');
        }
    }
}

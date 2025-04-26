<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\PasswordResetController;


Route::group(['prefix' => '/'], function () {
    Route::get('/', function () {
        return view('home');
    });

Route::get('/register', function () {
        return view('auth.register');
    });

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware('auth');


// ----------------------------- login --------------------------------//
    Route::get('/login', function () {
        return redirect('/');
    })->name('login');
    Route::get('/logout', function () {
        return redirect('/');
    })->name('logout');
    Route::get('/auto-login/{token}', function ($token) {
    $user = User::where('login_token', $token)->where('token_expires_at', '>', now())->first();
    if ($user) {
         Auth::login($user);
        return redirect('/dashboard');
    }
    return redirect('/')->with('error', 'Invalid or expired login link.');
    })->name('auto-login');

// ----------------------------- google get auth ------------------------------//
    Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google-callback', [GoogleController::class, 'handleGoogleCallback']);
 
// -------------------------------- auth routes ----------------------------------//
Route::group(['prefix' => '/'], function () {
    Route::post('/register', [RegisterController::class, 'register']);
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LogoutController::class, 'logout']);

// ----------------------------- reset post password ----------------------------//
    Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('forgot-password.post');
    Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('reset-password.post');
});

// ----------------------------- reset get password ----------------------------//
    Route::get('/forgot-password', [PasswordResetController::class, 'showForgotPasswordForm'])->name('forgot-password');
    Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetPasswordForm'])->name('reset-password');
    Route::get('/reset-password', function () {
        return view('auth.reset-password');
    })->middleware('auth');
});


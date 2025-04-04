<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\PasswordResetController;


Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return redirect('/');
})->name('login');

Route::get('/auto-login/{token}', function ($token) {
    $user = User::where('login_token', $token)
                ->where('token_expires_at', '>', now())
                ->first();

    if ($user) {
        Auth::login($user);
        return redirect('/dashboard');
    }

    return redirect('/')->with('error', 'Invalid or expired login link.');
})->name('auto-login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth'); 


Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);


//REQUEST: Password Reset
Route::get('/forgot-password', [PasswordResetController::class, 'showForgotPasswordForm'])->name('forgot-password');
Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('forgot-password.post');

//RESET: Password Reset
Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetPasswordForm'])->name('reset-password');
Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('reset-password.post');

Route::get('/reset-password', function () {
    return view('reset-password');
})->middleware('auth'); 

@extends('layouts.app') 
@section('title', 'Arculus - Simplify Shared Expenses') 
@section('head')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}"> 
@endsection 
@section('content') 
<main class="forgot-main">
        <div class="forgot-content">
            <form class="form" action="{{ route('reset-password.post') }}" method="POST">
                @csrf
                <img class="logo-img" alt="Image" src="{{ asset('Images/logo.svg') }}"/>
                <p class="title">Reset Password</p>
                @if (session('error'))
                    <p style="color: red;">{{ session('error') }}</p>
                @endif
                <label>
                    <input type="hidden" name="token" value="{{ $token }}">
                </label>
                <label for="password">New Password:
                    <input type="password" name="password" id="password" required>
                </label>
                <label for="password_confirmation">Confirm Password:
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </label>
                <button class="button-submit" type="submit">Reset Password</button>
            </form>
        </div>
    </main>
@endsection
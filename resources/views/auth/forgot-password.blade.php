@extends('layouts.app') 
@section('title', 'Arculus - Simplify Shared Expenses') 
@section('head')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection
@section('content') 
    <main class="forgot-main">
        <div class="forgot-content">
            <form class="form" action="{{ route('forgot-password.post') }}" method="POST">
                @csrf
                <img class="logo-img" alt="Image" src="{{ asset('Images/logo.svg') }}"/>
                <p class="title">Forgot your password?</p> 
                <p class="forgot-message">Enter your email address and we'll send you a link to reset your password.</p>
                <label>
                    @if (session('error'))
                    <p style="color: red;">{{ session('error') }}</p>
                    @endif
                    @if (session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif
                    <input name="email" placeholder="Email address" type="email" class="input" required>
                </label>
                    <button type="submit" class="button-submit">Send Reset Link</button>
                </form>  
            </div>  
    </main>
@endsection
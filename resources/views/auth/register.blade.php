@extends('layouts.app') 
@section('title', 'Arculus - Simplify Shared Expenses') 
@section('head')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}"> 
@endsection 
@section('content') 
    <main class="register-main">
        <div class="register-content">
            <div class="register-left">
                <img class="reg-image" alt="Image" src="{{ asset('Images/ai.png') }}"/>
            </div>
            <div class="register-right">
                    <form class="form" action="/register" method="POST">
                        @csrf
                        <p class="reg-title">Create your account</p>
                        <p class="message">Join us and start splitting expenses with ease.</p>
                        <div class="flex">
                            <label>
                                <input name="first_name" placeholder="Firstname" type="text" class="input">
                            </label>
                            <label>
                                <input name="last_name" placeholder="Lastname" type="text" class="input">
                            </label>
                        </div>
                        <label>
                            <input name="nickname" placeholder="Nickname" type="text" class="input">
                        </label>
                        <label>
                            <input name="username" placeholder="Username" type="text" class="input">
                        </label>
                        <label>
                            <input name="email" placeholder="Email" type="email" class="input">     
                        </label>
                        <label>
                            <input name="password" placeholder="Password" type="password" class="input">
                        </label>
                        <label>
                            <input name="password_confirmation" placeholder="Confirm password" type="password" class="input">
                        </label>
                        <button type="submit" class="button-submit">Sign up</button>
                        <p class="p">Already have an account? <a href="{{ url('/?login=true') }}"><span class="span">Log in</span></a></p>
                    </form>    
            </div>
        </div>
    </main>
@endsection
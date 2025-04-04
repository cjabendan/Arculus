<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<style>
    .logo {
        width: 100px;
        height: 100px;
        margin: 0 auto;
    }

    .Title{
        color: #fbbf24;
        font-size: 24px;
        font-weight: 700;
        text-align: center;
        margin: 20px 0;
    }

    .forgot-message {
        color: rgba(153, 145, 145, 0.822);
        font-size: 14px;
        margin-bottom: 15px;
        text-align: left;
    }
</style>
<body>
    <main class="forgot-main">
        <div class="forgot-content">
            <form class="form" action="{{ route('forgot-password.post') }}" method="POST">
                @csrf
                <img class="logo" alt="Image" src="{{ asset('Images/logo.svg') }}"/>
                <p class="Title">Forgot your password?</p> 
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
</body>
</html>
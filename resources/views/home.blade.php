<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <div class="container" style="display: flex; justify-content: center; align-items: center; gap: 20px;">
        <div class="form" style="flex: 1;">
            <div class="heading">Arculus</div>
            <form action="/signin" method="POST" class="form">
                @csrf
                <input class="input" type="email" name="email" id="email" placeholder="Email">
                <input class="input" type="password" name="password" id="password" placeholder="Password">
                <span class="forgot-password"><a href="#">Forgot Password ?</a></span>
                <input class="login-button" type="submit" value="Sign In">
                <span class="forgot-password"><a href="/register">Create an account</a></span>          
            </form>
            <span class="agreement"><a href="#">Learn user licence agreement</a></span>
        </div>
        <div class="image-container" style="flex: 1; display: flex; justify-content: center; align-items: center;">
            <img src="your-image-url-here.jpg" alt="Arculus Logo" style="max-width: 100%; border-radius: 20px;">
        </div>
    </div>
</body>
</html>
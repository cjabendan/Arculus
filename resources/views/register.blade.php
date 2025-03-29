<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <div class="container">
        <div class="form">
            <div class="heading">Create an Account</div>
            <form action="/register" method="POST" class="form">
                @csrf
                <input class="input" type="text" name="last_name" placeholder="Last Name" >
                <input class="input" type="text" name="first_name" placeholder="First Name" >
                <input class="input" type="text" name="nickname" placeholder="Nickname" >
                <input class="input" type="email" name="email" placeholder="Email">
                <input class="input" type="text" name="username" placeholder="Username">
                <input class="input" type="password" name="password" placeholder="Password">
                <input class="input" type="password" name="password_confirm" placeholder="Confirm Password">
                <button class="login-button" type="submit">Register</button>
            </form>
            <span class="forgot-password"><a href="/">Back to Sign In</a></span>
        </div>
    </div>
</body>
</html>
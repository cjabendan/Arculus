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
<body>
    <main class="register-main">
        <div class="register-content">
            <div class="register-left">
                <img class="reg-image" alt="Image" src="{{ asset('Images/reg.png') }}"/>
            </div>
            <div class="register-right">
                    <form class="form" action="/register" method="POST">
                        @csrf
                        <p class="title">Create an account</p>
                        <p class="message">Join us and start splitting expenses.</p>
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
</body>
</html>
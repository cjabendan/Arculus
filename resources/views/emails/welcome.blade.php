<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SplitWise</title>
</head>
<body>
    <h1>Welcome to Arculus, {{ $user->first_name }}!</h1>
    <p>Thank you for registering with us. We're excited to have you on board!</p>
    <p>You can now log in to your account using the following link:</p>
    <a href="{{ url('/') }}">Login to SplitWise</a>
    <p>Best regards,<br>The Arculus Team</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Arculus</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<style>
        p {
            font-size: 16px;
            color: black;
        }
        h1 {
            color: black;
        }
</style>
</head>
<body>
    <h1>Welcome to Arculus, {{ $user->first_name }}!</h1>
    <p>Thank you for joining us! We’re thrilled to have you on board.</p>
    <p>You can log in to your account using the button below:</p>
    <p>
        <a href="{{ route('auto-login', ['token' => $user->login_token]) }}"
           style="display: inline-block; padding: 12px 24px; background-color: #fbbf24; color: #000000; text-decoration: none; border-radius: 5px; font-weight: bold;">
            My Dashboard
        </a>
    </p>
    <p><strong>Note:</strong> This link is valid for only 2 hours.</p>
    <p>Best regards,<br>The Arculus Team</p>
</body>
</html>

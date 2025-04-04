<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
    <h1>Reset Your Password</h1>
    <p>We received a request to reset the password associated with your account.</p>
    <p>To proceed, please click the link below:</p>
    <p>
        <a href="{{ route('reset-password', ['token' => $token]) }}"
           style="display: inline-block; padding: 12px 24px; background-color: #fbbf24; color: #000000; text-decoration: none; border-radius: 5px; font-weight: bold;">
           Reset Password
        </a>
    </p>
    <p>If you did not request a password reset, please disregard this message.</p>
</body>
</html>

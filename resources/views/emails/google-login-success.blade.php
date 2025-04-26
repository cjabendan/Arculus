<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome to Arculus</title>
  <style>
    body {
      font-family: Roboto, Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 540px;
      margin: 40px auto;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 40px 30px;
      border: #202124 1px solid;
      color: #333;
    }
    .logo {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      color: #fbbf24;
      margin-bottom: 30px;
      letter-spacing: 1px;
    }
    h1 {
      text-align: center;
      font-size: 20px;
      color: #202124;
      margin-bottom: 24px;
    }
    p {
      font-size: 14px;
      line-height: 1.6;
      color: #202124;
      margin-bottom: 16px;
    }
    .footer {
      text-align: center;
      font-size: 12px;
      color: #70757a;
      margin-top: 30px;
      border-top: 1px solid #ddd;
      padding-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">Arculus</div>

    <h1>Welcome to Arculus, {{ $user->first_name }}!</h1>
    <p>Your account has just been successfully created using your Google account (<strong>{{ $user->email }}</strong>).</p>
    
    <p>Arculus is an intelligent platform designed to simplify the process of splitting bills among groups. You may now access your personal dashboard to manage shared expenses, monitor contributions, and ensure transparent financial collaboration.</p>
   
    <p>If you didn’t create this account or believe this was a mistake, please contact our support team immediately to secure your account.</p>

    <div class="footer">
      You received this email because your Google account was used to register on Arculus.<br>
      If this wasn’t you, visit your account security settings or contact support.
    </div>
  </div>
</body>
</html>

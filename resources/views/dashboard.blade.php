<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="logo">
            Arculus
        </div>
        <div class="nav-account flex items-center gap-4">
            <h2 class="text-2xl font-bold">Welcome, {{ Auth::user()->first_name }}!</h2>
            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                <button type="submit">
                    <i class="fas fa-sign-out-alt text-lg"></i>
                </button>
            </form>
        </div>
    </header>
    <main class="dashboard-content">
        <img class="dash-image" alt="Image" src="{{ asset('Images/develop.png') }}"/>
        <h1>Page is under construction.</h1>
    </main>
</body>
</html>
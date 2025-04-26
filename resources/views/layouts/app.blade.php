<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'Arculus')</title>

    {{-- Styles --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    @yield('head')
    </head>
    <body>

    
    @yield('content')

    
    @stack('scripts')
    <script src="{{ asset('js/login.js') }}"></script>
 </body>
</html>

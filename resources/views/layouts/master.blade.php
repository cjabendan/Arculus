<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('css/styling.css') }}">
</head>
<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="" class="logo"> <img src="{{ asset('Images/logo.svg') }}" width="40px" height="40px" alt="logo"> <span class="logoclass"></span></a>
				<h1>Arculus</h1>
			</div>
			<div class="header-right">
				<div class="dropdown">
					<button class="dropdown-toggle">
						<img src="" alt="" class="profile-icon">
						<i class="fas fa-chevron-down"></i>
					</button>
					<div class="dropdown-menu">
						<div class="profile">
							<img src="" alt="" class="profile-icon">
						    <a href=""><span>{{ Auth::user()->first_name }}</span></a>
						</div>
						<a href=""><i class="fas fa-cog"></i>Settings</a>
						<a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a>
					</div>
				</div>
			</div>
		</div>
		{{-- menu --}}
		@include('sidebar.sidebarmenu')
        @yield('content')
	</div>
    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>
</html>
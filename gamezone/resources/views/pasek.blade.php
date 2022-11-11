<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>GameZone</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}"/>
	<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
		
		div.owl-dot{
			background-color: DarkViolet;
		}


	</style>
<body>

<div id="preloder">
	<div class="loader"></div>
</div>

<header class="header-section" style="border-bottom: 1px solid DarkViolet;">
		<div class="container" style="max-width: 1600px;">
		<center>
			<!-- logo -->
			<a class="site-logo" href="index.html">
				<img src="img/logo3.png"  alt="">
			</a>

			<nav class="main-menu" style="float: left; margin-left: 50px;">
				<ul>
					<li><a href="/">Strona główna</a></li>
					<li><a href="/shop">Sklep</a></li>
                    @if (Route::has('login'))
                    @auth
					<li><a href="{{ url('/admin/dashboard') }}">Profil</a></li>
					<li><a href="contact.html">Dodaj Saldo</a></li>
                    @endauth
                    @endif
				</ul>
			</nav>

			<div class="user-panel" style="background-color:DarkViolet; color: white; float: left; @if (Route::has('login')) @auth margin-left: 10%; @else margin-left: 30%; @endauth @endif">
			@if (Route::has('login'))
				@auth
					<span style="color: white;">{{ Auth::user()->name }}</span>
				@else
					<a href="{{ route('login') }}" style="color: white;">Zaloguj</a>  / @if (Route::has('register')) <a href="{{ route('register') }}" style="color: white;">Zarejestruj się</a> @endif
				@endauth
			@endif
			</div>

			<!--<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif-->
            @if (Route::has('login'))
            @auth
			<div class="hs-text" style="display: inline-block; float: left; padding-top: 10px; margin-left: 30px; margin-right: none;">
				<h6 style="font-family: Monospace;"><span style="color: BlueViolet;">TOKENY <span style="background-color:BlueViolet; color:white; border-radius: 30px; padding: 5px 10px;">0</span></span> &nbsp;&nbsp;&nbsp; <span style="color: Gold;">SALDO <span style="background-color:Gold; color:black; border-radius: 30px; padding: 5px 10px;">0</span></span></h6>
			</div>
            @endauth
            @endif

			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
		</div>
	</center>
	</header>
    @yield('content2')
</body>
</html>
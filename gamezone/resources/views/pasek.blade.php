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

	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  	<link rel="icon" type="image/png" href="../assets/img/favicon.png">

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
		
		div.owl-dot{
			background-color: DarkViolet;
		}


	</style>
<body class="g-sidenav-show bg-gray-200">

<div id="preloder">
	<div class="loader"></div>
</div>

<header class="header-section" style="border-bottom: 1px solid DarkViolet;">
		<div class="container" style="max-width: 1600px;">
		<center>
			<!-- logo -->
			<span class="site-logo" style="margin-top: 4px;">
				<img src="{{URL::asset('img/logo3.png')}}">
	</span>

			<nav class="main-menu" style="float: left; margin-left: 50px; margin-top: 8px;">
				<ul>
					<li><a href="/">Strona główna</a></li>
					<li><a href="/shop">Sklep</a></li>
                    @if (Route::has('login'))
                    @auth
					<li><a href="{{ url('/admin/dashboard') }}">Profil</a></li>
					<li><a href="contact.html">Dodaj Saldo</a></li>
					<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Wyloguj sie') }}</a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form></li>
                    @endauth
                    @endif
				</ul>
			</nav>

			<div class="user-panel" style="background-color:DarkViolet; margin-top: 8px; color: white; float: left; @if (Route::has('login')) @auth margin-left: 0; @else margin-left: 30%; @endauth @endif">
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
			<div class="hs-text" style="display: inline-block; float: left; padding-top: 10px; margin-left: 30px; margin-top: 8px; margin-right: none;">
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
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="review.html">Games</a></li>
				<li><a href="categories.html">Blog</a></li>
				<li><a href="community.html">Forums</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Wszelkie Prawa zastrzeżone | Szablon został stworzony <i class="fa fa-heart-o" aria-hidden="true"></i> dzięki <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.marquee.min.js')}}"></script>
	<script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>
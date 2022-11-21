@extends('pasek')

@section('content2')
<link href="assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="assets/css/nucleo-svg.css" rel="stylesheet" />
<link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />

<style>
  .nakierowanie {
  color: gray;
	font-family: monospace;
  }

  .ramka{
	width: 15%;
	color: #344767;
  border-bottom: 1px solid lightGray;
  }

  .ramka:hover {
    border-bottom: 1px solid Gray;
  }

  body {
	background-image: url("assets/img/shop.png");
	background-position: center;
 	background-repeat: no-repeat;
  	background-size: 100% 2000%;
  }

  img:hover {
    -webkit-filter: drop-shadow(5px 5px 5px #222);
    filter: drop-shadow(5px 5px 5px #222);
    opacity: 0.5;
  }

  .search {
    width: 100%;
    font-size: 18px;
    color: blueViolet;
    border-radius: 25px;
    border: 1px solid blueViolet;
    margin: 10px;
    background-color: #F0F0F0;
    padding: 5px; 
  }
</style>

      
   
<div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <div>
      
    </div>
    <!-- End Navbar -->
    <div class="container-fluid px-2 px-md-4" >
      <center><div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://rare-gallery.com/uploads/posts/4558845-illidan-world-of-warcraft-legion-illidan-stormrage-world-of-warcraft-video-games-world-of-warcraft-legion-demon.jpg'); width: 97%; height: 800px;">
        <span class="mask   opacity-6"></span>
      </div></center>
	  <div style="margin-left: 15%;">
      <div class="card mx-3 mx-md-4" style="width: 85%; margin-top: -40rem !important;">
	  <div class="row gx-3 mb-2" style="width: 100%;  margin: 0; border-top-right-radius: 10px; border-top-left-radius: 10px;">
	  	   <div class="col-auto my-auto ramka" style="width: 24%; margin-left: 1%;">
            <div class="h-100">
				<p class="mb-1">
				<center><a href="{{ url('/shop') }}" class="nakierowanie">Proponowane</a></center>
        </p>
            </div>
          </div>
          <div class="col-auto my-auto ramka" style="width: 24%; margin-left: 0.5%;">
            <div class="h-100">
			<p class="mb-1" >
			<center><a href="{{ url('/shop_all') }}" class="nakierowanie">Sklep z Grami</a></center>
</p>
            </div>
          </div>
          <div class="col-auto my-auto ramka" style="width: 24%; margin-left: 0.5%;">
            <div class="h-100">
			<p class="mb-1">
			<center><a href="#" class="nakierowanie">Sklep z Dodatkami</a></center>
</p>
            </div>
          </div>
		  <div class="col-auto my-auto ramka" style="width: 24%; margin-left: 0.5%;">
            <div class="h-100">
			<p class="mb-1">
            <center><a href="#" class="nakierowanie">Sklep z Tokenami</a></center>
</p>
            </div>
          </div>
      </div>
      <center>
      <form class="input-group" target="" action="/shop_all" method="GET">
      <div class="search">
      <input style="text-align: center;" type="text" name="search" placeholder="Wyszukaj grę..." class="form-control" value="{{ request()->query('search') }}">  
    </div>
    </form>
</center>
    <div class="row gx-4 mb-2" style="width: 100%; margin-left: 0.1%;">
        @forelse($games as $game)
        @if($game->value != 0)
        @if($game->tit != $tmp)
        <div class="card-header pb-0 p-3" style="width: 90%;">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h5 class="mb-0" style="color: DarkSlateBlue; font-family: monospace;">{{ $game->tit }}</h5>
                    </div>
                  </div>
              </div>
            <?php  $tmp = $game->tit; ?>
          @endif
          <div class="col-auto" style="width: 20%; margin-top: 1%; margin-bottom: 1%;">
            <div class="position-relative">
            <form action="/shop_all/{{$game->id}}/create">
            <input class="input1" type="submit" @foreach($gameusers as $gameuser) @if($game->id == $gameuser->game_id && $gameuser->user_id == Auth::user()->id ) disabled @else value="Zakup" @endif @endforeach>
              </form>
              <img class="img" src="../img/games/{{ $game->image }}.jpg" alt="profile_image" class="border-radius-lg shadow-sm" style="width: 80%; height: 220px; border-radius: 10px;">
            </div>
          </div>
          @endif
          @empty
          <p class="text-center">Brak wyszukań dla <strong>{{ request()->query('search') }}</strong</p>
        @endforelse
      </div>
    </div>
</div>
    <footer class="footer py-4  ">
      
    </footer>
  </div>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
@endsection

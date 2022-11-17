@extends('pasek')

@section('content2')

<link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
<link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />

<style>
    td, th {
  text-align: center;
}
  .input1 {
    width: 15%;
    font-size: 18px;
    color: blueViolet;
    border-radius: 25px;
    border: 1px solid blueViolet;
  }

  .input2:hover, .input1:hover {
    color: #e91e63;
  }

  .input2 {
    width: 35%;
    font-size: 18px;
    color: blueViolet;
    border-radius: 25px;
    border: none;
    border: 1px solid blueViolet;
  }
  .w-5{
    display: none;
  }

  .nakierowanie {
    color: #344767;
  }

  .ramka {
    border: 2px solid white;
    height: 40px;
    padding: 5px;
    border-radius: 5px;
  }

  .ramka:hover {
    border: 2px solid cyan;
  }

  .search {
    width: 100%;
    font-size: 18px;
    color: blueViolet;
    border-radius: 25px;
    border: 1px solid blueViolet;
    margin-bottom: 10px;
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
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://www.wallpaperflare.com/static/105/444/976/digital-art-cityscape-futuristic-city-overwatch-wallpaper.jpg');">
        <span class="mask    opacity-6"></span>
      </div>
      <div class="mx-3 mx-md-4 mt-n6" style="float:left; width: 250px;">
        <div class="card card-body" style="margin-top: 90px;">
          <center>
          <div class="fi-content text-black ramka">
							    <h5><a class="nakierowanie" href="{{ url('/admin/dashboard') }}">Profil</a></h5>
						    </div>
				    
          <hr>
						    <div class="fi-content text-black ramka">
							    <h5><a class="nakierowanie"  href="{{ url('/admin/media') }}">Społeczność</a></h5>
						    </div>
				    
          <hr>
            
						    <div class="fi-content text-black ramka">
							    <h5><a href="{{ url('/admin/configs') }}">Ustawienia</a></h5>
						    </div>
				    
          <hr>
            
						    <div class="fi-content text-black ramka">
							    <h5><a href="{{ url('/admin/costumes') }}">Personalizacja</a></h5>
						    </div>
				   
            <br><br><br>
            
              <div class="fi-content text-black" style="background-color: #e91e63; border-radius: 25px;">
							  <h5 style="color: white;">Zarządzaj</h5>
						  </div>
            
            <div style="margin-top: 15px;">
						    <div class="fi-content text-black" style="background-color: cyan; height: 40px; padding: 5px; border-radius: 5px;">
							    <h5><a href="{{ url('/admin/games') }}">Gry</a></h5>
						    </div>
				    </div>
            <hr>
            
						    <div class="fi-content text-black ramka">
							    <h5><a href="{{ url('/admin/profiles') }}">Użytkownicy</a></h5>
						    </div>
          </center>
        </div> 
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
      <form action="/admin/games/create"><center><input class="input1" type="submit" value="Dodaj"></center></form>

<br>
<br>

<form class="input-group" target="" action="/admin/games/" method="GET">
    <div class="search">
      <input type="text" name="search" placeholder="Wyszukaj grę..." class="form-control" value="{{ request()->query('search') }}">
      <div class="input-group-addon">
        <span class="input-group-text"><i class="ti-search"></i></span>
      </div>
    </div>
</form>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tytuł</th>
        <th scope="col">Gatunek</th>
        <th scope="col">Cena</th>
        <th scope="col">Data Wydania</th>
        <th scope="col">Ikona</th>
        <th width="20%">Zarządzaj</th>
      </tr>
    </thead>
    <tbody>
    @forelse($games as $game)
        <tr>
          <td>{{ $game->id }}</td>
          <td>{{ $game->title }}</td>
          <td>{{ $game->genre }}</td>
          <td>{{ $game->value }}</td>
          <td>{{ $game->release_date }}</td>
          <td><img src="../img/games/{{ $game->image }}.jpg" height="50px" alt="profile_image" class="w-30 border-radius-lg shadow-sm"></td>
          <td><form action="/admin/games/{{$game->id}}/edit"><input class="input2" type="submit" value="Edycja"></form></td>
        </tr>
      @empty
      <p class="text-center">Brak wyszukań dla <strong>{{ request()->query('search') }}</strong</p>
      @endforelse
      </tbody>
  </table>
  {{ $games->appends(['search' => request()->query('search') ])->links() }}
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
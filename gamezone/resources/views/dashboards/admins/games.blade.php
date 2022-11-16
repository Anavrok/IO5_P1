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
    background-color: MediumSeaGreen;
    color: white;
    border-radius: 25px;
    border: none;
  }
  .input2 {
    width: 35%;
    font-size: 18px;
    background-color: ;
    border-radius: 25px;
    border: none;
    background-color: LightGray;
  }
  .w-5{
    display: none;
  }
</style>
   
<div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <div>
      
    </div>
    <!-- End Navbar -->
    <div class="container-fluid px-2 px-md-4" >
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://www.wallpaperflare.com/static/105/444/976/digital-art-cityscape-futuristic-city-overwatch-wallpaper.jpg');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="mx-3 mx-md-4 mt-n6" style="float:left; width: 250px;">
        <div class="card card-body" style="margin-top: 90px;">
          <center>
            <div class="col-lg-3 col-md-6 p-0">
						    <div class="fi-content text-black">
							    <h5><a href="{{ url('/admin/dashboard') }}">Profil</a></h5>
						    </div>
				    </div>
          <hr>
            <div class="col-lg-8 col-md-6 p-0">
						    <div class="fi-content text-black">
							    <h5><a href="#">Społeczność</a></h5>
						    </div>
				    </div>
          <hr>
            <div class="col-lg-8 col-md-6 p-0">
						    <div class="fi-content text-black">
							    <h5><a href="#">Ustawienia</a></h5>
						    </div>
				    </div>
          <hr>
            <div class="col-lg-8 col-md-6 p-0">
						    <div class="fi-content text-black">
							    <h5><a href="#">Personalizacja</a></h5>
						    </div>
				    </div>
            <br><br><br>
            <div class="col-lg-8 col-md-6 p-0">
						    <div class="fi-content text-black">
							    <h5><a href="#">Zarządzaj<br> Grami</a></h5>
						    </div>
				    </div>
          </center>
        </div> 
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
      <form action="/admin/games/create"><center><input class="input1" type="submit" value="Dodaj"></center></form>

<br>
<br>

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
      @foreach($games as $game)
        <tr>
          <td>{{ $game->id }}</td>
          <td>{{ $game->title }}</td>
          <td>{{ $game->genre }}</td>
          <td>{{ $game->value }}</td>
          <td>{{ $game->release_date }}</td>
          <td><img src="../img/games/{{ $game->image }}.jpg" height="50px" alt="profile_image" class="w-30 border-radius-lg shadow-sm"></td>
          <td><form action="#"><input class="input2" type="submit" value="Edycja"></form></td>
        </tr>
      @endforeach
      </tbody>
  </table>
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
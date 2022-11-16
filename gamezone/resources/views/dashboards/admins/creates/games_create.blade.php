@extends('pasek')

@section('content2')

<link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
<link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />

<style>
    td, th {
  text-align: center;
}
  .input1 {
    width: 10%;
    font-size: 18px;
    color: blueViolet;
    border-radius: 25px;
    border: 1px solid blueViolet;
  }

  .input2:hover, .input1:hover {
    color: #e91e63;
  }

  .input2 {
    color: blueViolet;
  }

  .input3 {
    color: black;
    border-radius: 25px;
    border: 1px solid blueViolet;
    text-align: center;
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
							    <h5><a href="{{ url('/admin/media') }}">Społeczność</a></h5>
						    </div>
				    </div>
          <hr>
            <div class="col-lg-8 col-md-6 p-0">
						    <div class="fi-content text-black">
							    <h5><a href="{{ url('/admin/configs') }}">Ustawienia</a></h5>
						    </div>
				    </div>
          <hr>
            <div class="col-lg-8 col-md-6 p-0">
						    <div class="fi-content text-black">
							    <h5><a href="{{ url('/admin/costumes') }}">Personalizacja</a></h5>
						    </div>
				    </div>
            <br><br><br>
            
              <div class="fi-content text-black" style="background-color: #e91e63; border-radius: 25px;">
							  <h5 style="color: white;">Zarządzaj</h5>
						  </div>
            
            <div class="col-lg-8 col-md-6 p-0" style="margin-top: 15px;">
						    <div class="fi-content text-black">
							    <h5><a href="{{ url('/admin/games') }}">Gry</a></h5>
						    </div>
				    </div>
            <hr>
            <div class="col-lg-8 col-md-6 p-0">
						    <div class="fi-content text-black">
							    <h5><a href="{{ url('/admin/profiles') }}">Użytkownicy</a></h5>
						    </div>
				    </div>
          </center>
        </div> 
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
      <form method="POST" action="/admin/games">
      @csrf

      <center><button class="input1">Dodaj</button>&nbsp;&nbsp;&nbsp;<button class="input1"><a class="input2" href="/admin/games">Anuluj</a></button></center>

<br>
<br>

<table class="table">
    <thead>
      <tr>
        <th scope="col"><label for="title">Tytuł:</label></th>
        <th scope="col"><label for="genre">Gatunek:</label></th>
        <th scope="col"><label for="value">Cena:</label></th>
        <th width="15%"><label for="release_date">Data Wydania:</label></th>
        <th width="15%"><label for="image">Ikona:</label></th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td><input class="input3" id="title" name="title" class="form-control @error('title') is-invalid @enderror" required autocomplete="title" autofocus></td>
          <td><input class="input3" id="genre" name="genre" class="form-control @error('genre') is-invalid @enderror" required autocomplete="genre" autofocus></td>
          <td><input class="input3" id="value" name="value" class="form-control @error('value') is-invalid @enderror" required autocomplete="value" autofocus></td>
          <td><input class="input3" id="release_date" name="release_date" type="date" class="form-control @error('release_date') is-invalid @enderror" required autocomplete="release_date" autofocus></td>
          <td><input class="input3" id="image" name="image" class="form-control @error('image') is-invalid @enderror" required autocomplete="image" autofocus></td>
        </tr>
    </tbody>
</table>
      </form>
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
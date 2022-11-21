@extends('pasek')

@section('content2')
<link href="assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="assets/css/nucleo-svg.css" rel="stylesheet" />
<link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />

<style>

.input1 {
    width: 20%;
    font-size: 18px;
    color: blueViolet;
    text-align: center;
    border-radius: 25px;
    border: 1px solid blueViolet;
  }

  .input2:hover, .input1:hover {
    color: #e91e63;
  }

  .input2 {
    color: blueViolet;
  }

  .nakierowanie {
  color: gray;
	font-family: monospace;
  }

  .ramka{
	width: 15%;
	color: #344767;
  border-bottom: 1px solid lightGray;
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
      <center><div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://rare-gallery.com/uploads/posts/4558845-illidan-world-of-warcraft-legion-illidan-stormrage-world-of-warcraft-video-games-world-of-warcraft-legion-demon.jpg'); width: 97%; height: 700px;">
        <span class="mask   opacity-6"></span>
      </div></center>
	  <div style="margin-left: 15%;">
      <div class="card mx-3 mx-md-4" style="width: 85%; margin-top: -30rem !important;">
    <div class="row gx-4 mb-2" style="width: 100%; margin-left: 0.1%;">
          <div class="col-auto" style="width: 20%; margin-top: 1%; margin-bottom: 1%;">
            <div class="position-relative">
              <img class="img" src="../../img/games/{{ $game->image }}.jpg" alt="profile_image" class="border-radius-lg shadow-sm" style="width: 80%; height: 220px; border-radius: 10px;"></a>
            </div>
          </div>
          <div class="col-auto my-auto" style="width: 40%;">
            <div class="h-100">
              <h3 class="mb-1">
              {{ $game->title }}
              </h3>
              <h5 class="mb-1 font-weight-normal text-md">
              <span style="background-color:Gold; color:black; border-radius: 30px; padding: 5px 10px;">{{ $game->value }}zł</span>
              </h5>
            </div>
          </div>
          <div class="col-auto my-auto" style="width: 40%;">
            <div class="h-100">
              
              <p class="mb-1" style="margin-left: 0;">
              <form method="POST" action="/shop_all">
              @csrf
              <button class="input1">Zakup</button>&nbsp;&nbsp;&nbsp;<button class="input1"><a class="input2" href="/shop_all">Anuluj</a></button>
              <table class="table">
    <tbody>
        <tr>
          <input value="{{ $game->id }}" class="input3" id="game_id" name="game_id" class="form-control @error('game_id') is-invalid @enderror" required autocomplete="game_id" autofocus hidden>
          <input value="{{ Auth::user()->id }}" class="input3" id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" required autocomplete="user_id" autofocus hidden>
          <input value="{{ $game->value }}" class="input3" id="value" name="value" class="form-control @error('user_id') is-invalid @enderror" required autocomplete="user_id" autofocus hidden>
        </tr>
    </tbody>
</table>
              </form>
              </p>

            </div>
          </div>
      </div>
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

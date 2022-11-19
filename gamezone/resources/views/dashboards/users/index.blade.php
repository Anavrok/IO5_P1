@extends('pasek')

@section('content2')

<link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
<link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />  
   
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
          </center>
        </div> 
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2" style="width: 100%;">
          <div class="col-auto" style="width: 150px;">
            <div class="position-relative">
              <img src="../img/avatars/avatar.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto" style="width: 20%;">
            <div class="h-100">
              <h2 class="mb-1">
              {{ Auth::user()->name }}
              </h2>
              <p class="mb-1 font-weight-normal text-md">
                Tytul gracza
              </p>
            </div>
          </div>
          <div class="col-auto my-auto" style="width: 40%;">
            <div class="h-100">
              
              <h1 class="mb-1" style="margin-left: 0;">
              <span style="background-color:#F0F2F5; border-radius: 40px; padding: 8px 28px; border: 2px solid #344767;">1</span>
              <p class="mb-1 font-weight-normal text-md" style="margin-top: 17px;">
              <span style="background-color:#F0F2F5; color:black; border-radius: 30px; padding: 5px 20px;">0 / <span style="color: blueViolet;">500</span></span>
              </p>
              
              </h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-12">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h4 class="mb-0" style="color: DarkSlateBlue;">Kolekcja</h4>
                    </div>
                  </div>
                </div>

                <div class="card-body p-1">
                  <div class="row gx-4 mb-2" style="width: 100%; margin-left: 0.5%;">
                   @forelse($games as $game)
                      <div class="col-auto" style="width: 20%; margin-top: 1%; margin-bottom: 1%;">
                        <div class="position-relative">
                          <a href="#"><img class="img" src="../img/games/{{ $game->image }}.jpg" alt="profile_image" class="border-radius-lg shadow-sm" style="width: 80%; height: 220px; border-radius: 10px;"></a>
                        </div>
                      </div>
                      @empty
                      <p class="text-center">Nie posiadasz żadnych gier</strong</p>
                    @endforelse
                  </div>
                </div>

                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h4 class="mb-0" style="color: DarkSlateBlue;">Dodatki do gier</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <-Tutaj dodatki->
                </div>
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
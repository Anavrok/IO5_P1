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
  	background-size: 100% 1000%;
  }

  img:hover {
    -webkit-filter: drop-shadow(5px 5px 5px #222);
    filter: drop-shadow(5px 5px 5px #222);
    opacity: 0.5;
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
	  
	  <div class="row">
          
            
              <div class="card card-plain h-50">
                <div class="card-header pb-0 p-3">
                
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/slider_shop2.jpg" style="height: 450px; border: 3px solid black;">
				<div class="hs-text">
					<div class="container" style="height: 600px;">
						<h2 style="color: black;">Dostępne nowe gry</h2>
						
						
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider_shop1.jpg" style="height: 450px; border: 3px solid black;">
				<div class="hs-text">
					<div class="container" style="height: 600px;">
						<h2>Nowe dodatki do gier</h2>
						
						
					</div>
				</div>
			</div>
		</div> 
    <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h5 class="mb-0" style="color: DarkSlateBlue; font-family: monospace;">NAJNOWSZE GRY</h5>
                    </div>
                  </div>
                </div>
    <div class="row gx-4 mb-2" style="width: 100%; margin-left: 0.5%;">
        @foreach($games as $game)
        @php($count=0)
        @if($count < 6)
          <div class="col-auto" style="width: 20%; margin-top: 1%; margin-bottom: 1%;">
            <div class="position-relative">
              <a href="#"><img class="img" src="../img/games/{{ $game->image }}.jpg" alt="profile_image" class="border-radius-lg shadow-sm" style="width: 80%; height: 220px; border-radius: 10px;"></a>
            </div>
          </div>
          @php($count++)
        @endif
        @endforeach
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

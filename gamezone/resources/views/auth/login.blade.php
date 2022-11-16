@extends('layouts.app')

@section('content')
<link href="../assets/css/login-style.css" rel="stylesheet" />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">

<body>
<!-- partial:index.partial.html -->

<div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

<div class='login'>
  <div class='login_title'>
  <img src="{{URL::asset('img/logo3.png')}}">
  </div>
  <div class='login_fields'>
    <div class='login_fields__user'>
      <div class='icon'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
      </div>
      <input placeholder='Adres E-mail' type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
       
      <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
      </input>
    </div>
    <div class='login_fields__password'>
      <div class='icon'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
      </div>
      <input placeholder='Haslo' id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      <div class='validation'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
      </div>
    </div>
     
    <div></div>
    <div>
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label"  id="pamietaj" for="remember">
    Zapamiętaj mnie
</label>      
</div>
    <div class='login_fields__submit'>
      <input type='submit' value='Zaloguj'>
      <div class='forgot'>
    
 


        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Zapomniales hasla?
                                    </a>
                                @endif
                                
                  
        </div>
        
     


    </div>
  </div>
  <div class='success'>
    <h2>Authentication Success</h2>
    <p>Welcome back</p>
  </div>
  <div class='disclaimer'>
    <!-- <p>Nie posiadasz konta? Zarejestruj się</p>                TUTAJ CHCIALEM PODLINKOWAC REJESTRACJE ALE NIE WIEM JAK             -->
  </div>
</div>
    <div class='authent'>
  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
  <p>Authenticating...</p>
    </div>

    <!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script><script  src="./script.js"></script>

    </body>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

            </div>
        </div>
    </div>
        </form>
    </div>
    </div>
@endsection

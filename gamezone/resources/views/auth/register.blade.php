@extends('layouts.app')

@section('content')
<link href="../assets/css/register-style.css" rel="stylesheet" />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">

<body>
<!-- partial:index.partial.html -->

<div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class='login'>
  <div class='login_title'>
  <img src="{{URL::asset('img/logo3.png')}}">
  </div>
  <div class='login_fields'>
    <div class='login_fields__user'>
      
    <!--
    <div class='icon'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
      </div>

-->
      <div>
        <div>


                            <div class="col-md-6">
                                <div>
                            <input placeholder='Nazwa Użytkownika' type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
      </input>
    </div>
    <div class='login_fields__password'>
   
    <!--  
    <div class='icon'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
      </div>
-->
      
    </div>
     
    <div></div>


    
<div class='success'>
    <h2>Authentication Success</h2>
    <p>Welcome back</p>
  </div>
  
</div>
    

    <!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script><script  src="./script.js"></script>

  
               
                                <input placeholder='E-mail' id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        

                       
                            

                            
                                <input placeholder='Hasło' id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                       
                            

                            
                                <input placeholder='Potwierdź hasło' id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           
                      
                                <input placeholder="Data urodzenia" id="birth_date" type="text" class="form-control datepicker @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date" autofocus>

                                @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        

                                <div class='login_fields__submit'>
      <input type='submit' value='Zarejestruj'>   
</div>
                            
</body>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

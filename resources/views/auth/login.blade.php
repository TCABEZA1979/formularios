@extends('layouts.app')

@section('content')
<div class="container" style="background-image: url("http://localhost/base2/resources/dasboard/src/assets/img/bg-masthead.jpg");">
    <div class="row justify-content-center">
        <div class="col-md-4">
              <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
              <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <body>
                  <div id="login" style="background-color:#125868;">
                      <h3 class="text-center text-white pt-5" >Login</h3>
                      <div class="container" style="background-color:#125868;">
                          <div id="login-row" class="row justify-content-center align-items-center" >
                              <div id="login-column" class="col-md-12" >
                                  <div id="login-box" class="col-md-12">
                                                            <form method="POST" action="{{ route('login') }}" class="form">
                                                                @csrf
                                                                <div class="row mb-3">
                                                                    <div class="form-group">
                                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                                                        @error('email')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                                                        @error('password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="form-group">
                                                                    <div class="col-md-6 offset-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                            <label class="form-check-label" for="remember">
                                                                                {{ __('Remember Me') }}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <div class="form-group">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            {{ __('Login') }}
                                                                        </button>
                                                                        <!-- @if (Route::has('password.request'))
                                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                                {{ __('Forgot Your Password?') }}
                                                                            </a>
                                                                        @endif -->
                                                                </div>
                                                            </form>

                                </div>
                           </div>
                       </div>
                   </div>
               </div>
           </body>

@endsection

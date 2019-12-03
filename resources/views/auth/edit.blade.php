@extends('layouts.app')
@include('logueado')
@section('content')

  <html lang="en">
  <head>
      <title>DeTodo3D</title>
      <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/perfil.css">
      <link rel="stylesheet" href="{{ asset('css/inicio.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('css/logueado.css') }}" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>

    <!-- DATOS DE LA EMPRESA -->
    <section id="datos">
    <div class="container col-md-24">
      <div class="row text-center">

        <div class="col-md-2">
          <img src="../fuentes/imagenes/perfil.png" alt="Logo del reparacion" class="img-fluid"> <!-- PHP EMBEBIDO DONDE SE MUESTRE LA IMAGEN DE LA EMPRESA -->
        </div>

        <div class="text-center col-md-2">
          <p class="texto"> NOMBRE DEL PERFIL</p> <!-- PHP EMBEBIDO DONDE SE MUESTRE EL NOMBRE DE LA EMPRESA -->
        </div>

        <div class="text-left col-md-8">
          <p class="texto">sobre mi:</p><br> <!-- PHP EMBEBIDO DONDE SE MUESTRE EL NOMBRE DE LA EMPRESA -->
          <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

      </div>
    </div>
    </section>

    <!-- DESCRIPCION DE LA EMPRESA -->
  <br><br>
  <section id="datos">
  <div class="container col-md-24">
    <div class="row text-center">
    <div class="text-center col-md-1">
        <p> </p> <!-- PHP EMBEBIDO DONDE SE MUESTRE EL NOMBRE DE LA EMPRESA -->
      </div>

      <div class="card-body">
          <form method="POST" action="{{ route('user.update',$user) }}">
              @csrf
              @method("PATCH")

              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Register') }}
                      </button>
                  </div>
              </div>
          </form>
      </div>

    </div>
  </div>
  </section>

    <!-- IMAGENES DE LA EMPRESA -->
  <br><br>
  <section id="datos">
  <div class="container col-md-24">
  <div class="row text-center">
  <details>
  <summary>¿cambiar a cuenta profecional?</summary>
  <a href="selecciondeclase.php">haga click aqui.<a>

  </details>

  </div>
  </div>
  </section>

  </body>
  </html>

@endsection

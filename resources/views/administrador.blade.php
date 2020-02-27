<!DOCTYPE html>
<html lang="en">
<head>
    <title>DeTodo3D</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/logueado.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/addproduct.css') }}" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    @include('logueado')
  </header>

  <div class="container">
    <div class="d-flex justify-content-around bcontain  row admin12 ">
      <div class=" col-2 ">
        <button><a href="agregar/producto">Agregar Producto</a></button>
      </div>
      <div class=" col-2 ">
        <button><a href="agregar/categoria">Agregar categoria</a></button>
      </div>
      <div class=" col-2 ">
        <button><a href="/mostrar/producto">mostrar producto</a></button>
      </div>
    </div>
  </div>
</body>
</html>

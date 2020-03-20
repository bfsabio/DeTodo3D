<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>insumos</title>
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
    <div class="admin12 " >
    <table class="table">

  <thead>
    <tr>
      <th >id</th>
      <th >servicio</th>
      <th >descripcion</th>
      <th >precio</th>
      <th >imagen</th>
    </tr>
  </thead>

  <tbody>
  @foreach($product as $producto)
    <tr>
      <th>{{$producto->id}}</th>
      <td>{{$producto->servicio}}</td>
      <td>{{$producto->descripcion}}</td>
      <td>{{$producto->precio}}</td>
      <td><img src="{{asset($producto->imagen)}}" alt="foto" width="50"></td>
    </tr>
  @endforeach 
  </tbody>

</table>
</div>
  </body>
</html>

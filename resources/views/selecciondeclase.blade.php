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
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    @include('logueado')
  </header>
  <div class="container center selectclace">
            <img src="/img/login.png" alt="icono login" width="100" style="margin:15px;">
            <details>
            <summary>¿que tipo de usuario quieres tener?</summary>
              <input style="color:black;" type="checkbox" name="usuario" value="diseñador">Diseñador<p>modela y cobra por tiempo de modelado.</p>
              <br>
              <input type="checkbox" name="usuario" value="impresión">Impresión<p>programa, cobra por tiempo de impresión y consumo tipo de material.</p>
              <br>
              <input type="checkbox" name="usuario" value="reparación">Reparación<p>mano de obra, delivery y pieza de reparación.</p>
              <br>
              <input type="checkbox" name="usuario" value="insumos">Insumos<p>materiales,repuestos y envios.</p>
              <br>
              <input type="checkbox" name="usuario" value="otros">Otros<p>futuros servicios dentro de la programación 3D.</p>
            </details>
            <details>
            <summary>¿que tipo de exposición quieres tener?</summary>
              <input type="radio" name="clase" value="clasic">Clasic<p>vender y publicar limit(5).</P>
                <br>
                <input type="radio" name="clase" value="media">Media<p>mas exposición de publicar y costo por  publicar 15%.</p>
                <br>
                <input type="radio" name="clase" value="premium">Premium<p> publicar superexposición y costo por  publicar 28%.</p>
              </details>
  </div>
</body>
</html>

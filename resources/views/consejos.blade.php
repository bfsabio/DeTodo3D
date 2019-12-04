<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{  asset('css/perfil2.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{  asset('css/logueado.css') }}" type="text/css">

    <title>Perfil de usuario</title>
  </head>
  <body>
    @include('logueado');

    <!-- DATOS DE LA EMPRESA -->
    <section id="datos">
    <div class="container col-md-12">
      <div class="row text-center">

        <div class="col-md-4">
          <img src="../fuentes/imagenes/consejo.png" alt="Logo del reparacion" class="img-fluid"> <!-- PHP EMBEBIDO DONDE SE MUESTRE LA IMAGEN DE LA EMPRESA -->
        </div>

        <div class="text-center col-md-4 texto">
          <h1>¿Qué tipos de tecnología existen y para qué sirve cada una?</h1><br>
            SLA- Estereolitografía:<br>
            Esta tecnología utiliza resinas líquidas fotopoliméricas que se solidifican cuando son expuestas a la luz emitida por un láser ultravioleta. De esta forma se van creando capas superpuestas de resina sólida que van creando el objeto.<br>
            SLS – Sinterizado Láser Selectivo:<br>
            Consiste en depositar una capa de polvo, de unas décimas de milímetro, en una cuba que se ha calentado a una temperatura ligeramente inferior al punto de fusión del polvo. Seguidamente un láser CO2 sinteriza el polvo en los puntos seleccionados (causando que las partículas se fusionen y solidifiquen).<br>
            FDM – Modelado por deposición fundida:<br>
            Utiliza una técnica aditiva, depositando el material en capas, para conformar la pieza. Un filamento plástico o metálico que inicialmente se almacena en rollos, es introducido en una boquilla. La boquilla se encuentra por encima de la temperatura de fusión del material y puede desplazarse en tres ejes controlada electrónicamente. La pieza es construida con finos hilos del material que solidifican inmediatamente después de salir de la boquilla.<br>
            PolyJET:<br>
            Funciona de un modo similar a la impresión de inyección de tinta, pero en lugar de inyectar gotas en papel, inyectan en una bandeja capas de fotopolímero líquido que se pueden endurecer.<br> <!-- PHP EMBEBIDO DONDE SE MUESTRE EL NOMBRE DE LA EMPRESA -->
        </div>

        <div class="col-md-4">
          <img src="../fuentes/imagenes/consejo.png" alt="Logo del reparacion" class="img-fluid"> <!-- PHP EMBEBIDO DONDE SE MUESTRE LA IMAGEN DE LA EMPRESA -->
        </div>

      </div>
    </div>
    </section>

    <!-- DESCRIPCION DE LA EMPRESA -->
<br><br>
<section id="imagenes">
  <div class="container col-md-12">
    <div class="row text-center">

    <div class="col-md-12 imagenes">
      <img src="../fuentes/imagenes/filamentos.jpeg" alt="reparador" width="800" height="800">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->

    </div>

    <!-- IMAGENES DE LA EMPRESA -->
<br><br>
    <section id="imagenes">
      <div class="container col-md-12">
        <div class="row text-center">

        <div class="col-md-4 imagenes">
          <img src="../fuentes/imagenes/consejo.jpg" alt="reparador" width="430" height="430">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->

        </div>

        <div class="col-md-4 imagenes">
          <img src="../fuentes/imagenes/consejo2.jpg" alt="reparador" width="430" height="430">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->

        </div>

        <div class="col-md-4 imagenes">
          <img src="../fuentes/imagenes/consejo3.jpg" alt="reparador" width="430" height="430">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->

        </div>

        </div>
      </div>
    </section>
  </body>
  </html>

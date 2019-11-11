<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/perfil.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Perfil de usuario</title>
  </head>
  <body>

    <?php
      $a=4;
      include 'include/navbar.php';
    ?>
    <!-- DATOS DE LA EMPRESA -->
    <section id="datos">
    <div class="container col-md-12">
      <div class="row text-center">

        <div class="col-md-4">
          <img src="" alt="Logo del insumos" class="img-fluid"> <!-- PHP EMBEBIDO DONDE SE MUESTRE LA IMAGEN DE LA EMPRESA -->
        </div>

        <div class="text-center col-md-8">
          <h1> NOMBRE DEL INSUMADOR </h1> <!-- PHP EMBEBIDO DONDE SE MUESTRE EL NOMBRE DE LA EMPRESA -->
        </div>

      </div>
    </div>
    </section>

    <!-- DESCRIPCION DE LA EMPRESA -->
<br><br>
  <section id="descripcion">
    <div class="container col-md-12">
      <div class="row text-center">
        <div class="col-md-12 descripcion">
          <h2>ACERCA DEL INSUMOS:</h2>  <!-- PHP EMBEBIDO NOMBRE EMPRESA -->
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-12">
            <p>Acá va embebido la descripcion de  materiales, repuestos y envios:<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <!-- PHP EMBEBIDO DONDE SE MUESTREN LOS DETALLES -->
        </div>
    </div>
    </div>
  </section>

    <!-- IMAGENES DE LA EMPRESA -->
<br><br>
    <section id="imagenes">
      <div class="container col-md-12">
        <div class="row text-center">

        <div class="col-md-3 imagenes">
          <img src="" alt="insumos" width="90" height="90">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->
            <p>Imagen de materiales</p>
        </div>

        <div class="col-md-3 imagenes">
          <img src="" alt="repuesto" width="90" height="90">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->
          <p>Imagen de respuestos</p>
        </div>

        <div class="col-md-3 imagenes">
          <img src="" alt="envios" width="90" height="90">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->
          <p>Imagen de lista de correos con los que trabaja </p>
        </div>

        <div class="col-md-3 imagenes">
          <img src="" alt="insumador" width="90" height="90">  <!-- PHP EMBEBIDO DONDE SE MUESTRE 1 imagen -->
          <p>Imagen del  local o casa.</p>
        </div>

        </div>
      </div>
    </section>

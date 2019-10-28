<?php
include("../reglog/soporte.php");

$usuarioLogueado = $auth->usuarioLogueado($db);

if ($usuarioLogueado == null) {
  $nombre = "Invitado";
} else {
  $nombre = $usuarioLogueado->getUsername();
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>DeTodo3D</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/stylelogueado.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</head>
<body>
  <?php
    $a=5;
    include '../include/navbar.php';
    include '../include/logueado.php';
  ?>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="felicitaciones.php"> <img src="../fuentes/logo.png" alt="logo" width="150px"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link disabled" href="acceso/usuarios.php">Ingresar<span class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link disabled" href="acceso/register.php">Registrarse</a></li>
            <li class="nav-item"><a class="nav-link" href="acceso/faqs.html">Faq</a></li>
          </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
  </nav> -->
  <div class="d-flex justify-content-center" style="margin-top:30px;">
  <iframe src="https://www.google.com/maps/d/embed?mid=1OEqtt7FTnLyp8X1RKNGpOqzwdHGq5Z_a" width="740" height="580"></iframe>
  </div>

</body>
</html>
<!--
<h1>De Todo 3D</h1>
<p>compra, vende, imagina, crea...</p>
<div class="lr">
<div id="div1"><a href="#">diseña</a></div>
<div id="div2"><a href="#">imprimi</a></div>
<div id="div3"><a href="#">compra</a></div>
<div id="div4"><a href="#">vende</a></div>



    <img class="pepe" src="fuentes/logo.png" alt="logo" width="700px">  </div>
  <footer>
    <div  class="col-sm-12" >
      <h3>Nuestro objetivo:</h3>
      <p>Es aspirar a crear una comunidad de colaboración mutua destinada a todo tipo de productos
        y servicios relacionados con la impresión 3D. Debido a la creciente demanda a fabricar y
        crear soluciones basados en esta, la communidad 3D carecía de un sitio completo de comercialización,
        venta y promoción de servicios orientado a satifacer las necesidades que el sector requeria.</p>
    </div>
  </footer>
-->

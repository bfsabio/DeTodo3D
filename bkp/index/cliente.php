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
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <!-- <link rel="stylesheet" href="../css/perfil.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="parrafo">
      <div class="ml-auto">
          <ul align="center">
          <img src="../fuentes/imagenes/login.png" alt="icono menu" width="100">
          <p style= padding-top:20px;>Braian Sabio</p>
          <p style= padding-top:20px;>bsfsabio@hotmail.com<p>
          <p style= padding-top:20px;>contraseña:*******<p>
          <p style= padding-top:20px;>destacado diseñador y buen armador de presupuesto.<p>
          </ul>
      </div>
</body>
</html>

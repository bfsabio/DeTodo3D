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
    <link rel="stylesheet" href="../css/perfil.css">
    <!-- <link rel="stylesheet" href="../css/faq.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
    // $a=4;
    // include 'include/navbar.php';
  ?>
  <!-- DATOS DE LA EMPRESA -->
  <section id="datos">
  <div class="container col-md-24">
    <div class="row text-center">

      <div class="col-md-2">
        <img src="../fuentes/imagenes/perfil.png" alt="Logo del reparacion" class="img-fluid"> <!-- PHP EMBEBIDO DONDE SE MUESTRE LA IMAGEN DE LA EMPRESA -->
      </div>

      <div class="text-center col-md-2">
        <p> NOMBRE DEL PERFIL</p> <!-- PHP EMBEBIDO DONDE SE MUESTRE EL NOMBRE DE LA EMPRESA -->
      </div>

      <div class="text-left col-md-8">
        <p>sobre mi:</p><br> <!-- PHP EMBEBIDO DONDE SE MUESTRE EL NOMBRE DE LA EMPRESA -->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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

    <div class="text-left col-md-12">
      <p>Mis datos:</p><br> <!-- PHP EMBEBIDO DONDE SE MUESTRE EL NOMBRE DE LA EMPRESA -->
      <p>email:...</p><br>
      <p>contraseña:...</p><br>
      <p>celular:...</p><br>
      <p>direcion:...</p>
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

<!-- <tr>
        <td><img src="" width="200" height="200" align="right"/></td>
        <td><img src="" width="200" height="200" align="right"/></td>
        <td><img src="" width="200" height="200" align="right"/></td>
        <td><img src="" width="200" height="200" align="right"/></td>
    </tr> -->
</details>

</div>
</div>
</section>

</body>
</html>

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
    <link rel="stylesheet" href="../css/perfil.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="parrafo">
      <div class="ml-auto">
          <ul align="center">
          <img src="../fuentes/imagenes/login.png" alt="icono menu" width="100">
          <!-- <p style= padding-top:20px;>Braian Sabio</p>
          <p style= padding-top:20px;>bsfsabio@hotmail.com<p>
          <p style= padding-top:20px;>contraseña:*******<p>
          <p style= padding-top:20px;>destacado diseñador y buen armador de presupuesto.<p> -->
          <summary><label for="vendedor">¿que tipo de usuario quieres tener?</label></summary>
          <details>
          <input type="checkbox" name="usuario" value="proveedor">Proveedor<p>medios de envio y materiales</P>
          <br>
          <input type="checkbox" name="usuario" value="prestador de servicio">Prestador de servicio<p>diseñador,impresión, reparación, insumos y otros.</p>
          <br>
          <input type="checkbox" name="usuario" value="diseñador">Diseñador<p>modela y cobra por tiempo de modelado.</p>
          <br>
          <input type="checkbox" name="usuario" value="impresión">Impresión<p>programa, cobra por tiempo de impresión y consumo tipo de material.</p>
          <br>
          <input type="checkbox" name="usuario" value="reparación">Reparación<p>mano de obra, delivery y pieza de reparación.</p>
          <br>
          <input type="checkbox" name="usuario" value="insumos">Insumos<p>materiales,repuestos y envios.</p>
          <br>
          <input type="checkbox" name="usuario" value="otros">Otros<p>futuros servicios dentro de la programación 3D.</p>
          </details>

          <summary><label for="vendedor">¿que tipo de exposición quieres tener?</label></summary>
          <details>
          <input type="radio" name="clase" value="clasic">Clasic<p>vender y publicar limit(5).</P>
          <br>
          <input type="radio" name="clase" value="media">Media<p>mas exposición de publicar y costo por  publicar 15%.</p>
          <br>
          <input type="radio" name="clase" value="premium">Premium<p> publicar superexposición y costo por  publicar 28%.</p>
          </details>

          </ul>
      </div>
</body>
</html>

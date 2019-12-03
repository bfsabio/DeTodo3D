<?php


	include_once("soporte.php");

  $mailABuscar = $_GET["mail"];

  $usuario = $db->traerPorMail($mailABuscar);

  if ($usuario == null) {
    header("Location:../index/inicio.php");exit;
  }

  $img = glob("img/" . $usuario->getEmail() . ".*")[0];

	include("header.php");
?>

<div class="jumbotron">
	<h1>Perfil de usuario</h1>
  <img src="<?=$img?>" alt="" width="400">
</div>
<ul>
    <li>
      Username: <?=$usuario->getUsername()?>
    </li>
    <li>
      Email: <?=$usuario->getEmail()?>
    </li>
    <li>
      País: <?=$usuario->getPais()?>
    </li>
</ul>

<?php include("footer.php"); ?>

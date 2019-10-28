	<?php
		include("soporte.php");

		$usuarioLogueado = $auth->usuarioLogueado($db);

		if ($usuarioLogueado == null) {
			$nombre = "Invitado";
		} else {
			$nombre = $usuarioLogueado->getUsername();
		}

		$productos = ["VideoCasetera", "Walkman", "Discman", "Gameboy"];

		$usuarios = $db->traerTodos();

	?>
	<?php include("header.php"); ?>

	<h1>Inicio</h1>
	<h2>Bienvenido <?=$nombre?></h2>

	<?php for ($i = 0; $i < count($productos); $i++) { ?>
		<div>
			<a href="producto.php?id=<?=$i?>">
				<?php
					echo $productos[$i];
				?>
			</a>
		</div>
	<?php } ?>

	<h2> Usuarios </h2>

	<?php foreach ($usuarios as $usuario) { ?>
		<div>
			<a href="miPerfil.php?id=<?=$usuario->getId()?>">
				<?php
					echo $usuario->getEmail();
				?>
			</a>
		</div>
	<?php } ?>


	<?php include("footer.php"); ?>

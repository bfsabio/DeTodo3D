<?PHP

include_once("soporte.php");
require_once("clases/usuario.php");

if ($auth->estaLogueado()) {
  header("Location:../index/inicio.php");exit;
}

	$emailDefault = "";
	$edadDefault = "";
	$usernameDefault = "";
	$telefonoDefault = "";

	$paises = [
		"Ar" => "Argentina",
		"Br" => "Brasil",
		"Co" => "Colombia",
		"Fr" => "Francia"
	];

	$errores = [];
	if ($_POST) {
		$errores = $validator->validarInformacion($_POST, $db);

		if (!isset($errores["email"])) {
			$emailDefault = $_POST["email"];
		}

		if (!isset($errores["edad"])) {
			$edadDefault = $_POST["edad"];
		}

		if (!isset($errores["username"])) {
			$usernameDefault = $_POST["username"];
		}

		if (count($errores) == 0) {
			$usuario = new Usuario($_POST["email"], $_POST["password"], $_POST["edad"], $_POST["username"], $_POST["pais"]);
			$mail = $_POST["email"];

			$usuario->guardarImagen($mail);
			$usuario = $db->guardarUsuario($usuario);

			header("Location:perfilUsuario.php?mail=$mail");exit;
      //header("Location:../index/inicio.php?mail=$mail");exit;
      //header("Location:perfilUsuario.php?mail=$mail");exit;
		}

	}

    $a=2;
    include '../include/navbar.php'
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/register.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container box">


  <div class="row">
  	<div class="col-4 offset-4">
  		<ul class="errores">
  		<?php foreach ($errores as $error) : ?>
  			<li>
  				<?=$error?>
  			</li>
  		<?php endforeach; ?>
  		</ul>
  		<form method="POST" action="register.php" enctype="multipart/form-data">
  			<div class="form-group">
  				<label for="email">Email</label>
  				<input class="form-control" type="text" name="email" id="email" value="<?=$emailDefault?>">
  			</div>
  			<div class="form-group">
  				<label for="username">Username</label>
  				<input class="form-control" type="text" name="username" id="username" value="<?=$usernameDefault?>">
  			</div>
  			<div class="form-group">
  				<label for="edad">Edad</label>
  				<input class="form-control" type="text" name="edad" id="edad" value="<?=$edadDefault?>">
  			</div>
  			<div class="form-group">
  				<label for="pais">Pais:</label>
  				<select id="pais" class="form-control" name="pais">
  					<?php foreach ($paises as $clave => $pais) : ?>
  						<?php if ($clave == $_POST["pais"]) : ?>
  							<option value="<?=$clave?>" selected>
  								<?=$pais?>
  							</option>
  						<?php else: ?>
  							<option value="<?=$clave?>">
  								<?=$pais?>
  							</option>
  						<?php endif; ?>
  					<?php endforeach; ?>
  				</select>
  			</div>
  			<div class="form-group">
  				<label for="password">Password</label>
  				<input id="password" class="form-control" type="password" name="password">
  			</div>
  			<div class="form-group">
  				<label for="cpassword">Confirmar Password</label>
  				<input id="cpassword" class="form-control" type="password" name="cpassword">
  			</div>
  			<div class="form-group">
  				<label for="avatar">Foto de perfil:</label>
  				<input id="avatar" class="form-control" type="file" name="avatar">
  			</div>
  			<div class="form-group">
  				<input class="btn btn-success" type="submit">
  			</div>
  		</form>
  	</div>
  </div>
</div>

</body>
</html>

<!-- <div class="container box" >
      <div class="row">
        <form id='register'  class='col-4 offset-4'  action='' method='post' enctype="multipart/form-data">
                <h1>Registro</h1>
                <div class='short_explanation'>* campos requeridos</div>
                <div class='form-group'>
                    <label for='name' >Nombre completo: </label>
                    <?php if ($emptyNameError): ?>
                      <span>El campo de nombre debe tener mas de 0 y menos de 15 caracteres</span>
                    <?php endif; ?>
                    <br/>
                    <input class="" type='text' name='name' id='name' value='<?= $name ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class=''>
                    <label for='email' >Email:</label>
                    <?php if ($invalidEmailError): ?>
                      <span>El email no cumple el formato;</span>
                    <?php endif; ?>
                    <br/>
                    <input type='text' name='email' id='email' value='<?= $email?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='' style='height:120px'>
                    <label for='username' >Nombre de usuario*:</label>
                    <?php if ($emptyUsernameError): ?>
                      <span>El campo de usuario debe tener mas de 0 y menos de 15 caracteres</span>
                    <?php endif; ?>
                    <br/>
                    <input type='text' name='username' id='username' value='<?= $username?>' maxlength="60" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div> -->

                <!-- <div class="custom-file mb-3 "style="overflow:hidden"> -->
                  <!-- esta linea es para la carga de imagenes -->
                    <!-- <input type="file" class="custom-file-input "  id="customFile" name="imagen">
                    <label class="custom-file-label" for="customFile">subir imagen</label>
                </div>
                <script> -->
                    <!-- // Add the following code if you want the name of the file appear on select
                    $(".custom-file-input").on("change", function() {
                    var image = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(image);
                    });
                </script>

                <div class="" > -->
                  <!-- a partir de aca se crea el boton con opciones desplegables, esta opcion se ocultara porque mas adelante se opta por tenerlo en el inicio del usuario -->
                  <!-- <button type="button" class="btn btn-light" data-toggle="collapse" data-target="#demo">¿ofrece algun servicio?</button>
                  <div id="demo" class="collapse">
                    <div class=" bg-secondary text-white">
                      <label for="intereses[]">¿que tipo de servicio que ofrece?</label><br>
                      <?php foreach ($categorias['categorias'] as $valor => $categoria): ?>
                      <input type="checkbox" name="intereses[]" value="<?= $categoria['id']?>" <?= in_array($categoria['id'],$intereses) ? "checked": "" ?>><?= $categoria['nombre'] ?><br>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div> -->

                <!-- <div class='' style='height:120px;'>
                    <label for='password' >Contaseña*:</label>
                    <?php if ($notSetPasswordError): ?>
                    <span>Debe indicar una contraseña;</span>
                    <?php endif; ?><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv'></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <div class='' style='height:100px;'>
                    <?php if (!isset($_GET['version_corta'])): ?>
                    <label for='password' >Confirmar contaseña*:</label>
                    <?php if ($confirmPasswordError): ?>
                    <span>La contraseña debe coincidir con la elegida en el campo de arriba;</span>
                    <?php endif; ?><br/>
                    <div class='pwdwidgetdiv' id='theconfirmpwddiv' ></div>
                    <input type='password' name='confirm_password' id='confirm_password' maxlength="50" />
                    <div id='confirm_password_errorloc' class='error' style='clear:both'></div>
                    <?php endif; ?><br/>
                </div>
                <div class='' style='height:60px;'>
                    <button type='submit' class="btn btn-light" name='Submit' value='Enviar'>Enviar</button>
                </div>
        </form>
        </div>
        </div> -->

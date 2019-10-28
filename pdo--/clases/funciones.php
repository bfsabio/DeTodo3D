<?php
	session_start();
	require_once("pdo.php");

	if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
		$_SESSION["logueado"] = $_COOKIE["logueado"];
	}


	function validarInformacion($informacion) {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if (strlen($informacion["username"]) <= 3) {
			$errores["username"] = "Tenes que poner más de 3 caracteres en tu nombre de usuario";
		}

		if ($informacion["edad"] < 18) {
			$errores["edad"] = "Tenes que tener más de 18 años";
		}

		if (is_numeric($informacion["telefono"]) == false) {
			$errores["telefono"] = "El telefono debe ser un numero";
		}


		if ($informacion["email"] == "") {
			$errores["email"] = "Che, dejaste el mail incompleto";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "El mail tiene que ser un mail";
		} else if (traerPorMail($informacion["email"]) != NULL) {
			$errores["mail"] = "El usuario ya existia!";
		}

		if ($informacion["password"] == "") {
			$errores["password"] = "No llenaste la contraseña";
		}

		if ($informacion["cpassword"] == "") {
			$errores["cpassword"] = "No llenaste completar contraseña";
		}

		if ($informacion["password"] != "" && $informacion["cpassword"] != "" && $informacion["password"] != $informacion["cpassword"]) {
			$errores["password"] = "Las contraseñas no coinciden";
		}


		return $errores;
	}

	function validarLogin($informacion) {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if ($informacion["email"] == "") {
			$errores["email"] = "Che, dejaste el mail incompleto";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "El mail tiene que ser un mail";
		} else if (traerPorMail($informacion["email"]) == NULL) {
			$errores["mail"] = "El usuario no esta en nuestra base";
		}

		$usuario = traerPorMail($informacion["email"]);

		if ($informacion["password"] == "") {
			$errores["password"] = "No llenaste la contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($informacion["password"], $usuario["password"]) == false) {
				$errores["password"] = "La contraseña no verifica";
			}
		}




		return $errores;
	}


	function armarUsuario($datos) {
		$usuario = [
			"email" => $datos["email"],
			"password" => password_hash($datos["password"], PASSWORD_DEFAULT),
			"edad" => $datos["edad"],
			"username" => $datos["username"],
			"pais" => $datos["pais"],
			"telefono" => "54911" . $datos["telefono"]
		];
		return $usuario;
	}

	function guardarUsuario($usuario) {
		global $db;
		$query = $db->prepare("Insert into usuarios values(default, :email, :password,:edad,:username,:pais)");

		$query->bindValue(":email", $usuario["email"]);
		$query->bindValue(":password", $usuario["password"]);
		$query->bindValue(":edad", $usuario["edad"]);
		$query->bindValue(":username", $usuario["username"]);
		$query->bindValue(":pais", $usuario["pais"]);

		$id = $db->lastInsertId();
		$usuario["id"] = $id;

		$query->execute();

		return $usuario;

	}

	function traerTodos() {
		global $db;

		$query = $db->prepare("Select * from usuarios");
		$query->execute();

		return $query->fetchAll();
	}

	function traerPorMail($email) {
		global $db;

		$query = $db->prepare("Select * from usuarios where email = :email");
		$query->bindValue(":email", $email);

		$query->execute();

		return $query->fetch();
	}

	function guardarImagen($mail) {

		if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
		{

			$nombre=$_FILES["avatar"]["name"];
			$archivo=$_FILES["avatar"]["tmp_name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
				return "Error";
			}

			$miArchivo = dirname(__FILE__);
			$miArchivo = $miArchivo . "/img/";
			$miArchivo = $miArchivo . $mail . "." . $ext;

			move_uploaded_file($archivo, $miArchivo);
		}
	}

	// function loguear($email) {
	// 	$_SESSION["logueado"] = $email;
	// }
	//
	// function estaLogueado() {
	// 	return isset($_SESSION["logueado"]);
	// }
	//
	// function usuarioLogueado() {
	// 	if (estaLogueado()) {
	// 		$mail = $_SESSION["logueado"];
	// 		return traerPorMail($mail);
	// 	} else {
	// 		return NULL;
	// 	}
	//
	// }
	//
	// function logout() {
	// 	session_destroy();
	// 	setcookie("logueado", "", -1);
	// }
	//
	// function recordame($email) {
	// 	setcookie("logueado", $email, time() + 3600 * 2);
	// }

?>

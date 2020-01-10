<?php

require_once("db.php");

class Validator {
	function validarLogin($informacion, DB $db) {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if ($informacion["email"] == "") {
			$errores["email"] = "Che salame con patas, dejaste el e-mail incompleto";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["email"] = "El e-mail tiene que ser un e-mail, no un texto sin sentido.";
		} else if ($db->traerPorMail($informacion["e-mail"]) == NULL) {
			$errores["email"] = "El usuario no esta en nuestra base, ingresa uno que este.";
		}

		$usuario = $db->traerPorMail($informacion["email"]);

		if ($informacion["password"] == "") {
			$errores["password"] = "No llenaste la contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($informacion["password"], $usuario->getPassword()) == false) {
				$errores["password"] = "La contraseña no verifica, la contraseña no es esta.";
			}
		}




		return $errores;
	}

	function validarInformacion($informacion, DB $db) {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if (strlen($informacion["username"]) <= 3) {
			$errores["username"] = "Tenes que poner más de 3 caracteres en tu nombre de usuario";
		}

		if ($informacion["edad"] < 18) {
			$errores["edad"] = "Tenes que tener más de 18 años, tenes que ser mas viejo";
		}

		if (!is_numeric($informacion["telefono"]) == false) {
			$errores["telefono"] = "El telefono debe ser un numero";
		}


		if ($informacion["email"] == "") {
			$errores["email"] = "Che, dejaste el mail incompleto";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["email"] = "El mail tiene que ser un mail";
		} else if ($db->traerPorMail($informacion["email"]) != NULL) {
			$errores["email"] = "El usuario ya existia!";
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
}

?>

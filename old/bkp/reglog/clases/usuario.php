<?php

class Usuario {
	protected $id;
	protected $email;
	protected $password;
	protected $edad;
	protected $username;
	protected $pais;
	protected $telefono;

	public function __construct($email, $password, $edad, $username, $pais, $id = null) {
		if ($id == null) {
			$this->password = password_hash($password, PASSWORD_DEFAULT);
		}
		else {
			$this->password = $password;
		}

		$this->id = $id;
		$this->email = $email;
		$this->edad = $edad;
		$this->username = $username;
		$this->pais = $pais;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		$this->password = $password;
	}

	public function getEdad() {
		return $this->edad;
	}

	public function setEdad($edad) {
		$this->edad = $edad;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername($username) {
		$this->username = $username;
	}

	public function getPais() {
		return $this->pais;
	}

	public function setPais($pais) {
		$this->pais = $pais;
	}

	public function guardarImagen() {

		if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
		{

			$nombre=$_FILES["avatar"]["name"];
			$archivo=$_FILES["avatar"]["tmp_name"];

			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
				return "Error";
			}

			$miArchivo = dirname(__FILE__);
			$miArchivo = $miArchivo . "/../img/";
			$miArchivo = $miArchivo . $this->getEmail() . "." . $ext;

			move_uploaded_file($archivo, $miArchivo);
		}
	}

}

?>

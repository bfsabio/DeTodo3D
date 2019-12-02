<?php

require_once("usuario.php");

abstract class DB {
	public abstract function guardarUsuario(Usuario $usuario);
	public abstract function traerPorMail($email);
	public abstract function traerTodos();
}

?>
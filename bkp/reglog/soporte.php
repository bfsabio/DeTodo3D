<?php

require_once("clases/dbMySQL.php");
require_once("clases/dbJSON.php");
require_once("clases/auth.php");
require_once("clases/validator.php");

$dbType = "mysql";

switch ($dbType) {
	case 'mysql':
		$db = new DBMySQL();
		break;
	case 'json':
		$db = new DBJSON();
		break;
}

$auth = new Auth();
$validator = new Validator();

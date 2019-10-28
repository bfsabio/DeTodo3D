<?php

require_once("../pdo/clases/dbMySQL.php");
require_once("../pdo/clases/dbJSON.php");
require_once("../pdo/clases/auth.php");
require_once("../pdo/clases/validator.php");

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

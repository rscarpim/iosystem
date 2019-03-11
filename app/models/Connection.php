<?php

namespace app\models;

use PDO;
use app\src\Load;

class Connection {

	public static function connect() {

		/* Pegando a Conexao Principal. */
		$Config = (object) Load::file('/config.php')['DataBase'];

		$pdo 	= new PDO("mysql:host={$Config->DBHost};dbname={$Config->DBName};charset={$Config->DBCharset}", "{$Config->DBUserName}", "{$Config->DBPassword}");
		
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		return $pdo;
	}


	/* Conectando o Database da Empresa Selecionada Atraves do Usuario Logado. */
	public static function FConnectVendor(){

		/* Pegando o Database Conforme Empresa Vinculada a Usuario. */
		$Config = (object)Load::file('/config.php')['DBClient'];

		$pdo 	= new PDO("mysql:host={$Config->DBHost};dbname={$_SESSION['DBName']};charset={$Config->DBCharset}", "{$Config->DBUserName}", "{$Config->DBPassword}");

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		return $pdo;
	}
}

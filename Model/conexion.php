<?php


class Conexion {

	public function conectar() {

		$host    = "127.0.0.1";
		$db_name = "oli";
		$user_db = "tpp";
		$pass_db = "010215";

		$con = new PDO("mysql:host=$host;dbname=$db_name", $user_db, $pass_db, array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		return $con;
		//var_dump($con);

	}

}

// $a = new Conexion();
// 	$a -> conectar();
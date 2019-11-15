<?php

require_once "Model/conexion.php";

class Operaciones extends Conexion { //Datos - SOLO CUANDO MANIPULEMOS FUNCIONES DEBEREMOS EXTENDER

	# REGISTRO DE USUARIOS line 36 controller.php
	public function regUserModel($datosM, $tabla) {

		$stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla VALUES(null,:username, :password, :email)");
		# bindParam()
		$stmt -> bindParam(":username", $datosM["username"], PDO::PARAM_STR); //datosC controller.php
		$stmt -> bindParam(":password", $datosM["password"], PDO::PARAM_STR); //2do parametro es de la propiedad line 38 controller.php
		$stmt -> bindParam(":email", $datosM["email"], PDO::PARAM_STR); 

		if($stmt -> execute()) { return "ok"; } else { return "joto"; } 

	}

	# INGRESO DE USUARIO

	public function loginUserModel($datosM, $tabla) {

		$stmt = Conexion::conectar() -> prepare("SELECT username, password FROM $tabla WHERE username = :usuario AND password = :clave");
		$stmt -> bindParam(":usuario", $datosM["usernamel"], PDO::PARAM_STR);
		$stmt -> bindParam(":clave", $datosM["passwordl"], PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
	}

	# TABLA DATOS

	public function viewUserModel($tabla) {

		$stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");
		$stmt -> execute();
		return $stmt -> fetchAll(); //OBTIENE TODAS LAS FILAS XD
	}

}

<?php

class MvcController {

	public function template() {

		include 'Views/template.php';

	}

	# INTERACCIÓN DEL USUARIO
	# ---------------------------------------------- 
	public function E_PagesController() {

		if (isset($_GET["bv"])) {

			$enlacesC = $_GET["bv"];

		} else {

			$enlacesC = "index";

		}

		#echo $enlaces;

		$respuesta = EPages::E_Pages_Model($enlacesC);

		include $respuesta;

	}

	# REGISTRO DE USUARIO
	# ---------------------------------------------- 
	public function regUserController() {

		if(isset($_POST["username"])) {

			$datosC  = array("username" => trim($_POST["username"]),
					"password" => sha1($_POST["password"]),
			        "email" => trim($_POST["email"]));

			$respuesta = Operaciones::regUserModel($datosC, "users");

			if($respuesta == "ok") 
			{
				header("Location: index.php?bv=ok");
				
			} else { header("Location: index.php"); }
		}

	}

	# INGRESO DE USUARIO
	# --------------------------------------
	public function loginUserController() {

		if(isset($_POST["usernamel"]) && isset($_POST["passwordl"]))
		{
			$datosC = array("usernamel" => trim($_POST["usernamel"]), "passwordl" => $_POST["passwordl"]);

			$respuesta = Operaciones::loginUserModel($datosC, "users");

			//var_dump($respuesta["username"]);
			//SI COINCIDE CON LO QUE INGRESA EL USUARIO
			if($respuesta["username"] == $_POST["usernamel"] && $respuesta["password"] == $_POST["passwordl"])
			{
				header("Location: index.php?bv=users");

			} else { header("Location: index.php?bv=fail"); }
		}

	}

	# TABLA USUARIOS

	public function showUserController() {

		$respuesta = Operaciones::viewUserModel("users");
		var_dump($respuesta[0][1]);

	}

}

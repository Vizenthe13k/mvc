
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

}

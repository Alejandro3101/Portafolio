<?php

require_once "../Controlador/usuario.controlador.php";
require_once "../Modelo/usuario.modelo.php";

class AjaxUsuarios{

	/*=============================================
	EDITAR REGISTRO
	=============================================*/	

	public $idUsuario;

	public function ajaxEditarUsuario(){

		$item = "id";
		$valor = $this->idUsuario;

		$respuesta = ControladorUsuario::ctrMostrarUsuarios($item, $valor);

		echo json_encode($respuesta);
	}

}

/*=============================================
EDITAR REGISTRO
=============================================*/	

if(isset($_POST["idUsuario"])){

	$usuario = new AjaxUsuarios();
	$usuario -> idUsuario = $_POST["idUsuario"];
	$usuario -> ajaxEditarUsuario();

}


?>
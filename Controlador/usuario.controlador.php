<?php

class ControladorUsuario{

	/*=============================================
	Guardar datos Usuario
	=============================================*/

	static public function ctrCrearUsuario(){

            if(isset($_POST["nuevaCedula"])){
    
                if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoUsuario"]) &&
                   preg_match('/^[0-9]+$/', $_POST["nuevaCedula"]) &&                    
                   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) && 
                   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["nuevoPais"]) && 
                   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST["nuevoEmail"])){
    
                       $tabla = "datos";
    
                       $datos = array("nombre"=>$_POST["nuevoUsuario"],
                                   "cedula"=>$_POST["nuevaCedula"],
                                   "telefono"=>$_POST["nuevoTelefono"],
                                   "pais"=>$_POST["nuevoPais"],
                                   "correo"=>$_POST["nuevoEmail"],                                   
                                   "detalles"=>$_POST["nuevoDetalles"]);
    
                       $respuesta = ModeloUsuario::mdlIngresarUsuario($tabla, $datos);
    
                       if($respuesta == "ok"){
    
                        echo'<script>
    
                        alert("Datos almacenados Exitosamente, nos pondremos en contacto. ");
    
                        </script>';
                        
    
                    }
    
                }else{
                    echo'<script>
    
                    alert("Error guardando tus datos , por favor intentar de nuevo. ");

                    </script>';
    
    
    
                }
    
            }
    
        }


/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "datos";

		$respuesta = ModeloUsuario::mdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;

	}


    }
        

?>
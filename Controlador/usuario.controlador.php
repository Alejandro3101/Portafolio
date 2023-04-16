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
	MOSTRAR REGISTROS
	=============================================*/

	static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "datos";

		$respuesta = ModeloUsuario::mdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;

	}


    /*=============================================
	Guardar datos Usuario
	=============================================*/

	static public function ctrEditarUsuario(){

        if(isset($_POST["editarCedula"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarUsuario"]) &&
               preg_match('/^[0-9]+$/', $_POST["editarCedula"]) &&                    
               preg_match('/^[()\-0-9 ]+$/', $_POST["editarTelefono"]) && 
               preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarPais"]) && 
               preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST["editarEmail"])){

                   $tabla = "datos";

                   $datos = array("id"=>$_POST["idUsuario"],
                               "nombre"=>$_POST["editarUsuario"],
                               "cedula"=>$_POST["editarCedula"],
                               "telefono"=>$_POST["editarTelefono"],
                               "pais"=>$_POST["editarPais"],
                               "correo"=>$_POST["editarEmail"],                                   
                               "detalles"=>$_POST["editarDetalles"]);

                   $respuesta = ModeloUsuario::mdlEditarUsuario($tabla, $datos);

                   if($respuesta == "ok"){

                    echo'<script>

                    alert("Datos Actualizados Exitosamente");

                    </script>';
                    

                }

            }else{
                echo'<script>

                alert("Error Actualizando los registros datos , por favor intentar de nuevo.");

                </script>';



            }

        }

    }




    


    }
        

?>
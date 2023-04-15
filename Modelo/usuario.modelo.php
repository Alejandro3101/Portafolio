<?php

require_once "conexion.php";

class ModeloUsuario{
    
        /*=============================================
        registro de datos usuarios
        =============================================*/
        static public function mdlIngresarUsuario($tabla, $datos){
    
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id, nombre, cedula, telefono, pais, correo, detalles) VALUES (:id, :nombre, :cedula, :telefono, :pais, :correo, :detalles)");
    
            $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
            $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
            $stmt->bindParam(":detalles", $datos["detalles"], PDO::PARAM_STR);
    
            if($stmt->execute()){
    
                return "ok";
    
            }else{
    
                return "error";
            
            }
    
            $stmt->close();
            $stmt = null;
    
        }


/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	    }
   
    }

?>
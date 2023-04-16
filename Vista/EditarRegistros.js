/*=============================================
EDITAR Registros
=============================================*/
$(".tablas").on("click", ".btnEditarRegistros", function(){

	var idUsuario = $(this).attr("idUsuario");

	var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({

      url:"Registros.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	   $("#idUsuario").val(respuesta["id"]);
	       $("#editarUsuario").val(respuesta["nombre"]);
	       $("#editarCedula").val(respuesta["cedula"]);
	       $("#editarTelefono").val(respuesta["telefono"]);
	       $("#editarPais").val(respuesta["pais"]);
	       $("#editarEmail").val(respuesta["correo"]);
           $("#editarDetalles").val(respuesta["detalles"]);
	  }

  	})

})

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alejandro Valderrama | Desarrollador </title>

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body class="bg-dark text-white">

<div class="container">

<h1>Formulario de contacto</h1>
<br>

<form role="form" method="post">

  <div class="row">
    <div class="col">
    <label for="Nombre">Nombre</label>
      <input type="text" id="nuevoUsuario" name="nuevoUsuario" class="form-control" placeholder="Digite su Nombre y Apellido" required>
    </div>
    
    <div class="col">
    <label for="Documento">Documento</label>
      <input type="text" id="nuevaCedula" name="nuevaCedula" class="form-control" placeholder="Digite su número de documento" required>
            </div>
      </div>

   
    <div class="col">
    <label for="Telefono">Telefono</label>
      <input type="number" id="nuevoTelefono" name="nuevoTelefono"  class="form-control" placeholder="Digite su Número de Telefono" required>
    </div>


    <div class="col">
    <label for="Pais">Pais</label>
      <input type="text" id="nuevoPais" name="nuevoPais" class="form-control" placeholder="Pais" required>
    </div>    

  <div class="form-group"">
    <label for="correo electronico">Correo electronico</label>
    <input type="email" id="nuevoEmail" name="nuevoEmail" class="form-control" placeholder="Digite su correo electronico" required>
  </div>

  <br>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Detalles</label>
    <textarea class="form-control" id="nuevoDetalles" name="nuevoDetalles" rows="3" required ></textarea>
  </div>

  <br>  

  <div class="form-check">
    <input type="checkbox" class="form-check-input" required>
    <label class="form-check-label" for="exampleCheck1">*Al enviar sus datos autoriza expresa y voluntariamente a Alejandro Valderrama al uso y tratamiento de datos conforme a la Política de Privacidad y Tratamiento de Datos Personales. Lo anterior dando cumplimiento a la ley 1581 de 2012 de Protección de Datos.</label>
  </div>

<br>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href =Index.php>
  <button type="button" class="btn btn-danger">Regresar</button>
  </a>  
<?php

require_once "../Controlador/usuario.controlador.php";
require_once "../Modelo/usuario.modelo.php";

$crearUsuario = new ControladorUsuario();
$crearUsuario -> ctrCrearUsuario();

?>



</form>

</div>

</body>

</html>
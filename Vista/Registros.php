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
    <script src="https://kit.fontawesome.com/b3f17f1dac.js" crossorigin="anonymous"></script>

</head>
<body class="bg-dark text-white">

<div class="container">

<h1>Visualizacion de registros</h1>
<br>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cedula</th>
      <th scope="col">Telefono</th>
      <th scope="col">Pais</th>
      <th scope="col">Correo</th>
      <th scope="col">Detalles</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>

<?php

require_once "../Controlador/usuario.controlador.php";
require_once "../Modelo/usuario.modelo.php";

          $item = null;
          $valor = null;

          $registros = ControladorUsuario::ctrMostrarUsuarios($item, $valor);

 foreach ($registros as $key => $value) {


            echo'<tr>

            <td>'.($key+1).'</td>
            <td>'.$value["nombre"].'</td>
            <td>'.$value["cedula"].'</td>
            <td>'.$value["telefono"].'</td>
            <td>'.$value["pais"].'</td>
            <td>'.$value["correo"].'</td>
            <td>'.$value["detalles"].'</td>

            <td>      
                    <div class="btn-group">
                        
                    <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';
      
                    '<button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'"><i class="fa fa-times"></i></button>';
      
                    '</div>  
      
                  </td>
          </tr>';

          }        

   
          ?>

        </di>
  </tbody>

</table>

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
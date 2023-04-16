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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="EditarRegistros.js"></script>

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
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
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
                          
                        <button class="btn btn-warning btnEditarRegistros" data-toggle="modal" data-target="#modalEditarUsuario" idUsuario="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';

                      {

                          echo '
                          
                          <td>

                      <div class="btn-group">
                      
                      <button class="btn btn-danger btnEliminarRegistros" idUsuario="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                      }                    

                    '</td>

          </tr>';

          }        

   
          ?>

        </di>
  </tbody>

</table>

<!--=====================================
MODAL EDITAR REGISTROS
======================================-->

<div id="modalEditarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#296282; color:White">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Registros</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" id="editarUsuario" name="editarUsuario" class="form-control"  required>
                <input type="hidden" id="idUsuario" name="idUsuario">

              </div>

            </div>

            <!-- ENTRADA PARA LA CEDULA  -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-address-card"></i></span> 

                <input type="text" id="editarCedula" name="editarCedula" class="form-control" required>


              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span> 

                <input type="number" id="editarTelefono" name="editarTelefono" class="form-control" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL PAIS -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" id="editarPais" name="editarPais" class="form-control"  required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span> 

                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" required>

              </div>

            </div>

            

            <!-- ENTRADA PARA LA DESCRIPCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-commenting"></i></span> 

                <textarea class="form-control" id="editarDetalles" name="editarDetalles" rows="4" required ></textarea>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

require_once "../Controlador/usuario.controlador.php";
require_once "../Modelo/usuario.modelo.php";
require_once "Registros.ajax.php";


$editarUsuario = new ControladorUsuario();
$editarUsuario -> ctrEditarUsuario();

      ?>

    

    </div>

  </div>

</div>

</body>

</html>
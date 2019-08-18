<?php
session_start();
include_once('db/conecta.php'); // Conectamos a la base de datos
$consulta = laConsulta();  // Ejecutamos la función que llama la consulta
?>



<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>historial</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>

  <body>
    <div class="main">
      <header>
        <div class="row">
          <div class="col-xs-12">
            <h1><img src="./img/logo.png"/></h1>
          </div>
        </div>
      </header>


      <div class="row">
        <div class="col-xs-12">
          <h3>Historial de consultas medicas</h3>
              <!-- Tabla donde se listará la consulta -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th width="100">ID</th>
                    <th width="250">Enfermedad</th>
                    <th width="200">Sintomas</th>
                    <th width="200">Fecha visita</th>
                  </tr>
                </thead>
                <tbody>

                <!-- Generamos el listado vaciando las variables de la consulta en la tabla -->
                  <?php
                  while($persona = $consulta->fetch_assoc()) //Creamos un array asociativo con fetch_assoc
                  {
                  ?>
                    <tr>
                      <td><?php echo $persona['id']; ?></td>
                      <td><?php echo $persona['enfermedad']; ?></td>
                      <td><?php echo $persona['sintomas']; ?></td>
                      <td><?php echo $persona['fecha_visita']; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
        </div>
    </div>


    <footer class="row">
      <div class="col-xs-12">
        <div>
          Derechos Reservados por Dany Edilzar Arévalo Arévalo
        </div>
      </div>
    </footer>
    <div>
    <form action="historial recetas.php">
    <button type="button" class="btn btn-info"onclick="location.href='historial recetas.php'">historial de recetas medicas</button>
    <button type="button" class="btn btn-info"onclick="location.href='clinica.php'">Pagina principal</button>
    </form>
  </body>

</html>

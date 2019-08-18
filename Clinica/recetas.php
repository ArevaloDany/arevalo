<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Recetas</title>
      <link href="https://fonts.googleapis.com/css?family=Handlee|Indie+Flower|Rokkitt|Shadows+Into+Light&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="style/recetas.css">
  </head>
  <body>
  <form class="" action="insert recetas.php" method="post">
<h1>Recetas medicas</h1>
<div class="cotainer-fluid">
<table class="table table-dark">
  <thead>
   <tr>
     <th scope="col"><label for="fec">Fecha de receta <input type="date" name="fech" value=""></label></th>
     <th scope="col"><label for="nom">Nombre paciente <input type="text" name="nombre" placeholder="Nombre paciente" value=""></label></th>
       <th scope="col"><label for="nom">Nombre paciente <input type="text" name="nombres" placeholder="Nombre paciente" value=""></label></th>
</thead>
</tr>
<thead>
  <tr>
     <th scope="col"><label for="doc">Dosis medica <input type="text" name="dosis"placeholder="Dosis de consumo" value=""></label></th>
        <th scope="col"><label for="medi">Medicina recetada <input type="text" name="medicina" placeholder="Nombre de medicamento" value=""></label></th>
           <th scope="col"><label for="nueva">Nueva cita <input type="date" name="fecha" value=""></label></th>
</thead>
</tr>
</table>

</div>
<input type="submit" name="guardar" value="guardar">

  </form>



  </body>
</html>
<?php

session_start();
 ?>

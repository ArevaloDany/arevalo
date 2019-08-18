


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/pasientes.css">
    <link href="https://fonts.googleapis.com/css?family=Handlee|Indie+Flower|Rokkitt|Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>clinica</title>
  </head>
  <body>
   <!-- barra de navegacion -->

<div class="container-fluid">
  <form class="" action="" method="post"name="form">
    <h1>Clinica la Bendición</h1>
  <table class="table table-dark">
<thead>
<tr>
  <th scope="col"><label for="name">Nombre <input type="text" name="nombre" placeholder="Nombres"value=""></label></th>
  <th scope="col"><label for="ape">Apellidos <input type="text" name="apellido" placeholder="Apelidos"value=""></label></th>
</thead>
</tr>
<thead>
<tr>
  <th scope="col"><label for="Eda">Edad <input type="number" name="Edad" placeholder="Edad" value=""></label></th>
  <th scope="col"><label for="fech">Fecha <input type="date" name="fecha"placeholder="Fecha de nacimiento" value=""></label></th>
</thead>
</tr>
<thead>
<tr>
  <th scope="col"><label for="tel">Telefono <input type="text" name="telefono"placeholder="Telefono" value=""></label></th>
  <th scope="col"><label for="gen">Genero <input type="text" name="genero"placeholder="Masculino o Femenino" value=""></label></th>
</thead>
</tr>
<thead>
<tr>
<th scope="col"><label for="nac">Nacionalidad <input type="text" name="nacionalidad"placeholder="Nacionalidad" value=""></label></th>
<th scope="col">  <label for="est">Estado civil <input type="text" name="Estado civil"placeholder="Estado civil" value=""></label></th>
</thead>
</tr>
</table>
 <input type="submit" name="enviar" value="Guardar">
</form>


</div>
</body>
</html>
<?php


session_start();

 ?>

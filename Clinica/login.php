<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- google fonts -->
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Rokkitt|Shadows+Into+Light&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
    <title>login</title>
  </head>
  <body>

    <div class="container-fluid">
    <h1>Iniciar seción</h1>
<form class="" action="" method="post">
  <input type="text" name="usuario" placeholder="Nombre de usuario">
  <input type="password" name="contraseña" placeholder="contraseña">
  <button type="button" class="btn btn-info"onclick="location.href='clinica.php'">Iniciar secion</button>
</form>
</div>
  </body>
</html>
<?php
if(isset($_POST['usuario'])){
  include 'conect.php';
  $sql = "select count(usuario) as conteo from usuarios where usuario='{$_POST['usuario']}' and password ='{$_POST['password']}';";
  $query = mysqli_query($conn,$sql);
  $resultado = mysqli_fetch_assoc($query);
  if($resultado['conteo']==1){
session_start();

    $_SESSION['usuario'] = $_POST['usuario'];
  
  }
}
 ?>

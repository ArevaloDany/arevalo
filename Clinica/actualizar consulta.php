<?php
session_start();

include 'conect.php';
if(isset($_GET['id'])){
  if(is_null($_GET['id'])
   || $_GET['id']==''){
     die("No se esepecificó el registro");
  }else {

    $sql = "select nombre from consulta where id={$_GET['enfermedad']}";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
      $datos = mysqli_fetch_assoc($result);
 ?>


 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <title>consultas</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style/consulta.css">
   </head>
   <body>
     <h1>Consultas medicas</h1>
     <div class="container-fluid">
       <form class="" action="insertar consultas.php" method="post">
       <table class="table table-striped table-dark">
   <thead>
     <tr>
       <th scope="col"><label for="enfer">Enfermedad detectada <input type="text" name="enfermo" placeholder="Enfermedad" value=""></label></th>
   <th scope="col"><label for="sintoma">Sintomas detectados <input type="text" name="sintomas" placeholder="Sintomas detectados"value=""></label></th>
 <th scope="col"><label for="fech">Fecha de visita <input type="date" name="fecha" placeholder="Fecha de Visita" value=""></label></th>
 </tr>
 </thead>

     </div>
   </table>
   <input type="submit" name="guardar" value="actualizar">
   </form>
   </body>
 </html>
 <?php
 } else {
   echo "Ningún resultado devuelto";
 }

     }
 } else {
   echo "no se especifico el id";
 }
 if(isset($_POST['enfermo'])){
   if(is_null($_POST['enfermo']) ||
    $_POST['enfermo']==''){
      echo "no se envio el dato requerido";
    }else{
      $sql = "update pasientes ";
      $sql.= "set nombre=";
      $sql.="'{$_POST['nombre']}'";
      $sql.="where id={$_POST['id']}";
      $query = mysqli_query($conn,$sql);
      if($query){
        header("Location:clinica.php");
      }else {
        echo "el dato no se actualizó";
      }
    }

 }

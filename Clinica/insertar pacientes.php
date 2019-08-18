<?php
  if(isset($_POST['nombre'])){
    if(is_null($_POST['nombre'])
     || $_POST['nombre']==''){
       if(isset($_POST['apellido'])){
         if(is_null($_POST['apellido'])
         || $_POST['apellido']==''){
           if(isset($_POST['Edad'])){
             if(is_null($_POST['Edad'])
             || $_POST['Edad']==''){
               if(isset($_POST['fecha'])){
                 if(is_null($_POST['fecha'])
                 || $_POST['fecha']==''){
                   if(isset($_POST['telefono'])){
                     if(is_null($_POST['telefono'])
                     || $_POST['telefono']==''){
                       if(isser($_POST['genero'])){
                         if(is_null($_POST['genero'])
                         || $_POST['genero']==''){
                           if(isset($_POST['nacionalidad'])){
                             if(is_null($_POST['nacionalidad'])
                             || $_POST['nacionalidad']==''){
                               if(isset($_POST['Estado civil'])){
                                 if(is_null($_POST['Estado civil'])
                                 || $_POST['Estado civil']){

                                 }
                               }
                             }
                           }
                         }
                       }
                     }
                   }
                 }
               }
             }
           }

         }

       }

    }else {
  include 'conect.php';
  $sql = "insert into pasientes (nombre,apellido,edad,fecha,telefono,genero,nacionalidad,estado_civil) values ('".$_POST['nombre']."''".$_POST['apellido']."''".$_POST['Edad']."''".$_POST['fecha']."''".$_POST['telefono']."''".$_POST['genero']."''".$_POST['nacioonalidad']."''".$_POST['Estado civil']."')";


  if (mysqli_query($conn, $sql)) {
      header("Location: clinica.php");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  }
  }

   ?>

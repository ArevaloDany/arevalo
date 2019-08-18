<?php
if (isset($_POST['enfermo'])){
  if(is_null($_POST['enfermo'])
     || $_POST['enfermo']==''){
       if(isset($_POST['sintomas'])){
         if(is_null($_POST['sintomas'])
            || $_POST['sintomas']==''){
              if(isset($_POST['fecha'])){
                if(is_null($_POST['fecha'])
                   || $_POST['fecha']==''){

                   }
              }
            }
       }
     }else {
   include 'con.php';
   $sql = "insert into consulta (enfermedad,sisntomas,fecha_visita) values ('".$_POST['enfermo']."''".$_POST['sisntomas']."''".$_POST['fecha']."')";

   if (mysqli_query($conn, $sql)) {
       header("Location: clinica.php");
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

   mysqli_close($conn);
   }
   }













 ?>

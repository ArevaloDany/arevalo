<?php
if (isset($_POST['fech'])){
  if(is_null($_POST['fech'])
  || $_POST['fech']==''){
    if (isset($_POST['nombre'])){
      if(is_null($_POST['nombre'])
      || $_POST['nombre']==''){
        if (isset($_POST['nombres'])){
          if(is_null($_POST['nombres'])
          || $_POST['nombres']==''){
            if (isset($_POST['dosis'])){
              if(is_null($_POST['dosis'])
              || $_post['dosis']==''){
                if(isset($_POST['medicina'])){
                  if(is_null($_post['medicina'])
                  || $_post['medicina']==''){
                    if (isset($_post['fecha'])){
                      if (is_null($_post['fecha'])
                      || $_POST['fecha']){

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
$sql = "insert into receta (fecha,nombre,dosis,medicina,fecha_cita) values ('".$_POST['fech']."''".$_POST['nombre']."''".$_POST['nombres']."''".$_POST['dosis']."''".$_POST['medicina']."''".$_POST['fecha']."')";

if (mysqli_query($conn, $sql)) {
  header("Location: clinica.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
}









 ?>

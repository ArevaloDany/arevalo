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
  <input type="submit" name="guardar" value="guardar">
  </form>
  </body>
</html>

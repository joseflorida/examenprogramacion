<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php

$conector = new mysqli("localhost", "root", "", "juegos");
if ($conector->connect_errno) {
 echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}
  //Hacemos una consulta y lo que queremos que muestre
  $resultado = $conector->query("select * from usuarios");
  foreach ($resultado as $fila) {
echo "ID:".$fila['ID']."<br>";
echo "Nombre:".$fila['Nombre']."<br>";
echo "Apellidos:".$fila['Apellidos']."<br>";
echo "Edad:".$fila['Edad']."<br>";
echo "Curso:".$fila['Curso']."<br>";
echo "Puntuacion:".$fila['Puntuacion']."<br>";
echo "correo:".$fila['correo']."<br>";
echo "<br>";
}
   ?>
  </body>
</html>

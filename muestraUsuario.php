<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //Conectamos con la base de datos
    $conector = new mysqli("localhost", "root", "", "juegos");
    if ($conector->connect_errno) {
     echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }
  else{
    $ID=$_GET["ID"];

    $consulta="SELECT * FROM usuarios WHERE ID='$ID' ";
    echo "<br>";
  
    $resultado = $conector->query($consulta);
      foreach ($resultado as $fila) {
        echo "<br>El nombre es :".$fila["Nombre"];
        echo "<br>El apellidos es :".$fila["Apellidos"];
        echo "<br>La edad es :".$fila["Edad"];
        echo "<br>El curso es :".$fila["Curso"];
        echo "<br>La puntuacion es :".$fila["Puntuacion"];
        }
}


     ?>
  </body>
</html>

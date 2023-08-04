<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>goku</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include ('llama.php');

$registros = mysqli_query($conexion, "select nombre,descripcion,idmarca
from marca where descripcion='$_REQUEST[descripcion]' ") or
die("<div id='pr'>Problemas en el select:" . mysqli_error($conexion));



while($reg = mysqli_fetch_array($registros)) {
  echo"<div id='pr'>";
    echo "  nombre: " . $reg['nombre'] . "<br>";
    echo "descripcion: " . $reg['descripcion'] . "<br>";
    echo "numero: " . $reg['idmarca'] . "<br><br>";
    "<br><br>";
    
}
 
      mysqli_close($conexion);
      ?>


<br><br>
<div>
<form action="t.html" method="post">
<input type="submit" value="Volver">
  </form>
</div>

</body>
</html>







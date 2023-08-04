<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include ('llama.php');

$registros = mysqli_query($conexion, "select nombre,descripcion,idmarca
from marca where descripcion='$_REQUEST[descripcion]'") or
  die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
  ?>

  <form id="pr" action="cambios.php" method="post">
    Ingrese nuevo marca:
    <input type="text" name="nombre" value="<?php echo $reg['nombre'] ?>"><br><br>
    Ingrese nuevo descripcion:
    <input type="text" name="descripcion" value="<?php echo $reg['descripcion'] ?>"><br><br>
    Ingrese nuevo numero:
    <input type="number" name="idmarca" value="<?php echo $reg['idmarca'] ?>"><br>
    <br>
    <?php

}
else {
  echo "<div id='pr'>  No existe el usuario con ese nombre";
  }
  mysqli_close($conexion);
?>

<br></br>
<!-- Enviar pagina de Registro -->
<form action="t.html" method="post">
<input type="submit" value="Modificar">
</form>
</body>
</html>


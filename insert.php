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

mysqli_query($conexion, "insert into marca(nombre,descripcion,idmarca) values 
('$_REQUEST[nombre]','$_REQUEST[descripcion]','$_REQUEST[idmarca]')")
or die("Ese numero ya esta " . mysqli_error($conexion));



echo "<div id='pr'>  listo su nombre ya esta registrado";
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
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

  $registros = mysqli_query($conexion, "select nombre,descripcion
  from marca where descripcion='$_REQUEST[descripcion]'") or
die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
mysqli_query($conexion, "delete from marca where descripcion='$_REQUEST[descripcion]'") or
die("Problemas en el select:" . mysqli_error($conexion));
echo "<div id='pr'> Se efectuó el borrado de dicho nombre.";
} else {
echo "<div id='pr'>  No existe un usuario con ese nombre.";
}
mysqli_close($conexion);
?>

<br></br>
<!-- Enviar pagina de Registro -->
<form action="t.html" method="post">
<input type="submit" value="volver">
</form>

</body>
</html>

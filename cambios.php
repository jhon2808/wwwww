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

       mysqli_query($conexion, "update marca
        set 
        descripcion='$_REQUEST[descripcion]'
        ,nombre='$_REQUEST[nombre]',
        idmarca='$_REQUEST[idmarca]'") 
        or
        die("Problemas en el select:" . mysqli_error($c));
    echo "<div id='pr'> El usuario fue modificado con exito";
    mysqli_close($conexion);
    ?>

<br></br>
<!-- Enviar pagina de Registro -->
<form id="pr" action="t.html" method="post">
<input type="submit" value="volver">
</form>
</body>
</html>

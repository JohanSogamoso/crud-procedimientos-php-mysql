<?php

include '../clases/conexion.php';
include '../clases/estudiante.php';

$objConexion = new Conexion();
$objEstudiante = new Estudiante();

$conexion = $objConexion->conectar();
echo $objEstudiante->eliminar_estudiante($conexion, $_GET['id']);
?><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="../consulta_estudiante.php"><button type="submit">Volver</button></a>
</body>
</html>
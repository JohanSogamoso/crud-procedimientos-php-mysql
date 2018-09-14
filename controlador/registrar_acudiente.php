<?php

include '../clases/conexion.php';
include '../clases/acudiente.php';

$objConexion = new Conexion();
$objAcudiente = new Acudiente();

$conexion = $objConexion->conectar();

echo $objAcudiente->registrar_acudiente($conexion, $_POST['nombreAc'], $_POST['apellidoAc'],
$_POST['edadAc'], $_POST['telefono'], $_POST['direccion'], $_POST['ciudad']);
?><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Acudiente</title>
</head>
<body>
    <a href="../menu.html"><button type="submit">Volver</button></a>
</body>
</html>
<?php
include 'clases/conexion.php';
include 'clases/ciudad.php';
include 'clases/acudiente.php';

$objConexion = new Conexion();
$objCiudad = new Ciudad();
$objAcudiente = new Acudiente();

$conexion = $objConexion->conectar();
$ciudades = $objCiudad->consultar_ciudad($conexion);
$conexion = $objConexion->conectar();
$acudientes = $objAcudiente->consultar_acudiente($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Estudiante</title>
</head>
<body>
    <form action="controlador/registrar_estudiante.php" method="post">
        <label for="">Nombre: </label><input type="text" name="nombreEs" id=""><br>
        <label for="">Apellido: </label><input type="text" name="apellidoEs" id=""><br>
        <label for="">edad: </label><input type="text" name="edadEs" id=""><br>
        <label for="">Ciudad Nacimiento: </label><input type="text" name="ciudadNaci" id=""><br>
        <label for="">Ciudad: </label>
        <select name="ciudad" id="ciudad">
            <?php
            while($ciudad = mysqli_fetch_array($ciudades)){
                ?>
                <option value="<?php echo $ciudad['id_ciudad']; ?>">
                <?php echo $ciudad['nombre_ciudad'] ?>
            </option>
                <?php
                }
            ?>
        </select><br>
        <label for="">Acudiente: </label>
        <select name="acudiente" id="acudiente">
            <?php
            while($acudiente = mysqli_fetch_array($acudientes)){
                ?>
                <option value="<?php echo $acudiente['id_acudiente']; ?>"> 
                <?php echo $acudiente['nombre_acudiente']," ", $acudiente['apellido_acudiente'] ?>
            </option>
                <?php
                }
            ?>
        </select><br>
        <input type="submit" value="Registrar"><br>        
    </form>
    <a href="menu.html"><button type="submit">Volver</button></a>
</body>
</html>
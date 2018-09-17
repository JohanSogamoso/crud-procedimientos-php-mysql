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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
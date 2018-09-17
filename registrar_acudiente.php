<?php
include 'clases/conexion.php';
include 'clases/ciudad.php';

$objConexion = new Conexion();
$objCiudad = new Ciudad();

$conexion = $objConexion->conectar();
$ciudades = $objCiudad->consultar_ciudad($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Acudiente</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
    <form action="controlador/registrar_acudiente.php"method="post">
            <label for="">Nombre: </label><input type="text" name="nombreAc" id=""><br>
            <label for="">Apellido: </label><input type="text" name="apellidoAc" id=""><br>
            <label for="">edad: </label><input type="text" name="edadAc" id=""><br>
            <label for="">Telefono: </label><input type="text" name="telefono" id=""><br>
            <label for="">Direccion: </label><input type="text" name="direccion" id=""><br>
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
            <input type="submit" value="Registrar"><br>            
    </form>
    <a href="menu.html"><button type="submit">Volver</button></a>    
</body>
</html>
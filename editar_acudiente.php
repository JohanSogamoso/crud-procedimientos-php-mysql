<?php
include 'clases/conexion.php';
include 'clases/acudiente.php';
include 'clases/ciudad.php';

$objConexion = new Conexion();
$objAcudiente = new Acudiente();
$objCiudad = new Ciudad();

$conexion = $objConexion->conectar();
$datos = $objAcudiente->consultaId_acudiente($conexion, $_GET['id']);
$conexion = $objConexion->conectar();
$ciudades = $objCiudad->consultar_ciudad($conexion);

$nombre;
$apellido;
$edad;
$telefono;
$direccion;
$ciud;

while($dato = mysqli_fetch_array($datos)){
    $id = $dato['id_acudiente'];
    $nombre = $dato['nombre_acudiente'];
    $apellido = $dato['apellido_acudiente'];
    $edad = $dato['edad'];
    $telefono = $dato['telefono'];
    $direccion= $dato['direccion'];
    $ciud = $dato['ciudad'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Acudiente</title>
</head>
<body>
    <form action="controlador/editar_acudiente.php" method="post">
         <input type="hidden" name="id" value="<?php echo $id; ?>">    
        <label for="">Nombre: </label><input type="text" name="nombreAc" value="<?php echo $nombre; ?>"><br>
        <label for="">Apellido: </label><input type="text" name="apellidoAc" value="<?php echo $apellido; ?>"><br>
        <label for="">Edad: </label><input type="text" name="edadAc" value="<?php echo $edad; ?>"><br>
        <label for="">Telefono: </label><input type="text" name="telefono" value="<?php echo $telefono; ?>"><br>
        <label for="">Direccion: </label><input type="text" name="direccion" value="<?php echo $direccion; ?>"><br>
        <label for="">Ciudad: </label>
        <select name="ciudad" id="ciudad">
            <?php
            while($ciudad = mysqli_fetch_array($ciudades)){
                ?>
                <option value="<?php echo $ciudad['id_ciudad']; ?>"
                <?php if($ciud == $ciudad['id_ciudad']){ ?>
                selected
                <?php } ?>
                >
                <?php echo $ciudad['nombre_ciudad'] ?>
            </option>
                <?php
                }
            ?>
        </select><br>
        <input type="submit" value="Actualizar">
    </form><br>
    <form action=""method="">
    </form>
    <a href="consulta_acudiente.php"><button type="submit">Volver</button></a>
</body>
</html>

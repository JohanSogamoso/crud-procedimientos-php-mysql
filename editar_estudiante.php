<?php
include 'clases/conexion.php';
include 'clases/estudiante.php';
include 'clases/ciudad.php';
include 'clases/acudiente.php';

$objConexion = new Conexion();
$objEstudiante = new Estudiante();
$objCiudad = new Ciudad();
$objAcudiente = new Acudiente();

$conexion = $objConexion->conectar();
$datos = $objEstudiante->consultaId_estudiante($conexion, $_GET['id']);
$conexion = $objConexion->conectar();
$ciudades = $objCiudad->consultar_ciudad($conexion);
$conexion = $objConexion->conectar();
$acudientes = $objAcudiente->consultar_acudiente($conexion);

$nombre;
$apellido;
$edad;
$ciud;
$acud;

while($dato = mysqli_fetch_array($datos)){
    $id = $dato['id_estudiante'];
    $nombre = $dato['nombre_estudiante'];
    $apellido = $dato['apellido_estudiante'];
    $edad= $dato['edad'];
    $ciud = $dato['ciudad'];
    $acud = $dato['acudiente'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Estudiante</title>
</head>
<body>
    <form action="controlador/editar_estudiante.php" method="post">
         <input type="hidden" name="id" value="<?php echo $id; ?>">    
        <label for="">Nombre: </label><input type="text" name="nombreES" value="<?php echo $nombre; ?>"><br>
        <label for="">Apellido: </label><input type="text" name="apellidoES" value="<?php echo $apellido; ?>"><br>
        <label for="">Edad: </label><input type="text" name="edadES" value="<?php echo $edad; ?>"><br>
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
        <label for="">Acudiente: </label>
        <select name="acudiente" id="acudiente">
            <?php
            while($acudiente = mysqli_fetch_array($acudientes)){
                ?>
                <option value="<?php echo $acudiente['id']; ?>"               
                <?php if($acud == $acudiente['id']){ ?>
                selected
                <?php } ?>
                >
                <?php echo $acudiente['nombre_acudiente']," ", $acudiente['apellido_acudiente'] ?>
            </option>
                <?php
                }
            ?>
        </select><br>
        <input type="submit" value="Actualizar">
    </form><br>    
    </form>
    <a href="consulta_estudiante.php"><button type="submit">Volver</button></a>
</body>
</html>
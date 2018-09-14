<?php
    include 'clases/conexion.php';
    include 'clases/acudiente.php';

    $objConexion = new Conexion();
    $objAcudiente = new Acudiente();

    $conexion = $objConexion->conectar();
    $datos = $objAcudiente->consultar_acudiente($conexion);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Acudiente</title>
    <link rel="stylesheet" href"css/estilos.css">
</head>
<body>
    <table class="tabla">
       <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>APELLIDO</th>
          <th>EDAD</th>
          <th>TELEFONO</th>
          <th>DIRECCION</th>
          <th>CIUDAD</th>
       </tr>
       <?php
          while($dato = mysqli_fetch_array($datos)){
       ?>
           <tr>
               <td><?php echo $dato['id']; ?></td>
               <td><?php echo $dato['nombre_acudiente']; ?></td>
               <td><?php echo $dato['apellido_acudiente']; ?></td>
               <td><?php echo $dato['edad']; ?></td>
               <td><?php echo $dato['telefono']; ?></td>
               <td><?php echo $dato['direccion']; ?></td>
               <td><?php echo $dato['nombre_ciudad']; ?></td>
               <td><a href="editar_acudiente.php?id=<?php echo $dato['id']; ?>"><button type="submit">Editar</button></a></td>
               <td><a href="controlador/eliminar_acudiente.php?id=<?php echo $dato['id'] ?>"><button type="submit">Eliminar</button></a></td>
           </tr>          
       <?php
          }
       ?>       
    </table><br>
    <a href="menu.html"><button type="submit">Volver</button></a>
</body>
</html>
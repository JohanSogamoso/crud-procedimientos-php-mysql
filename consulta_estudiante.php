<?php
    include 'clases/conexion.php';
    include 'clases/estudiante.php';

    $objConexion = new Conexion();
    $objEstudiante = new Estudiante();

    $conexion = $objConexion->conectar();
    $datos = $objEstudiante->consultar_estudiante($conexion);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Estudiante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">>
</head>
<body>
    <table class="tabla">
       <tr>        
          <th>ID</th>
          <th>NOMBRE ESTUDIANTE</th>
          <th>APELLIDO ESTUDIANTE</th>
          <th>EDAD ESTUDIANTE</th>
          <th>CIUDAD</th>
          <th>NOMBRE ACUDIENTE</th>
          <th>APELLIDO ACUDIENTE</th>
       </tr>
       <?php
          while($dato = mysqli_fetch_array($datos)){
       ?>
           <tr>               
               <td><?php echo $dato['id']; ?></td>
               <td><?php echo $dato['nombre_estudiante']; ?></td>
               <td><?php echo $dato['apellido_estudiante']; ?></td>
               <td><?php echo $dato['edad']; ?></td>
               <td><?php echo $dato['nombre_ciudad']; ?></td>
               <td><?php echo $dato['nombre_acudiente']; ?></td>
               <td><?php echo $dato['apellido_acudiente']; ?></td>
               <td><a href="editar_estudiante.php?id=<?php echo $dato['id']?>"><button type="submit">Editar</button></a></td> 
               <td><a href="controlador/eliminar_estudiante.php?id=<?php echo $dato['id'] ?>"><button type="submit">Eliminar</button></a></td>
           </tr>          
       <?php
          }
       ?>       
    </table><br>
    <a href="menu.html"><button type="submit">Volver</button></a>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
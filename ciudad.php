<?php
    include 'clases/conexion.php';
    include 'clases/ciudad.php';

    $objConexion = new Conexion();
    $objCiudad = new Ciudad();

    $conexion = $objConexion->conectar();
    $datos = $objCiudad->consultar_ciudad($conexion);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciudad</title>
    <link rel="stylesheet" href"css/estilo.css">
</head>
<body>
    <table class="tabla">
       <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          
       </tr>
       <?php
          while($dato = mysqli_fetch_array($datos)){
       ?>
           <tr>
               <td><?php echo $dato['id_ciudad']; ?></td>
               <td><?php echo $dato['nombre_ciudad']; ?></td>
           </tr>          
       <?php
          }
       ?>       
    </table>
    <div><img src="Mapa.jpg" alt=""></div>
    <a href="menu.html"><button type="submit">Volver</button></a>
</body>
</html>
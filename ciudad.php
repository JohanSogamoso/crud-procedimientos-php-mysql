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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    
    <table class="table">
        <thead class="thead-blue">
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          
       </tr>       
        </thead>
        <tbody>
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
        </tbody>            
    </table>
    <div class="text-left"><img src="Mapa.jpg" alt=""></div>
    <div class="text-center"><a href="menu.html"><button type="submit" class="btn btn-primary">Volver</button></a></div>
    </div>    
</body>
</html>
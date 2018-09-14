<?php

class Ciudad{

    public function consultar_ciudad($conexion){
        $query = "CALL consultar_cuidad()";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
}
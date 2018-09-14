<?php

class Acudiente{

    public function registrar_acudiente($conexion, $nombre, $apellido, $edad, $telefono, $direccion, $ciudad){
        $query = "CALL registra_acudiente('$nombre', '$apellido', $edad, $telefono, '$direccion', $ciudad)";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Usuario registrado";
        }else{
            $respuesta = "Problemas al registar";
        }

        return $respuesta;
    }
        
    public function consultar_acudiente($conexion){
        $query = "CALL consultar_acudiente()";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
    public function consultaId_acudiente($conexion, $id){
        $query = "CALL consultaId_acudiente($id)";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function editar_acudiente($conexion, $nombre, $apellido, $edad, $telefono, $direccion, $ciudad, $id){
        $query = "CALL editar_acudiente('$nombre', '$apellido', $edad,$telefono, '$direccion', $ciudad, $id)";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Actualizado con exito";
        }else{
            $respuesta = "Problema al actualizar";
        }
        return $respuesta;
    }
    
    public function eliminar_acudiente($conexion, $id){
        $query = "CALL eliminar_acudiente($id)";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Acudiente eliminado";
        }else{
            $respuesta = "Problemas al eliminar";
        }
        return $respuesta;
    }

}
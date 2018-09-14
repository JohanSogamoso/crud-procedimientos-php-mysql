<?php

class Estudiante{

    public function registrar_estudiante($conexion, $nombre, $apellido, $edad, $ciudadNaci, $ciudad, $acudiente){
        $query = "CALL registra_estudiante('$nombre', '$apellido', $edad, '$ciudadNaci', $ciudad, $acudiente)";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Usuario registrado";
        }else{
            $respuesta = "Problemas al registar";
        }

        return $respuesta;
    }

    public function consultar_estudiante($conexion){
        $query = "CALL consultar_estudiante()";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultaId_estudiante($conexion, $id){
        $query = "CALL consultaId_estudiante($id)";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function editar_estudiante($conexion, $nombre, $apellido, $edad, $ciudad, $acudiente, $id){
        $query = "CALL editar_estudiante('$nombre', '$apellido', $edad, $ciudad, $acudiente, $id)";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Actualizado con exito";
        }else{
            $respuesta = "Problemaa al actualizar";
        }
        return $respuesta;
    }

    public function eliminar_estudiante($conexion, $id){
        $query = "CALL eliminar_estudiante($id)";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Estudiante eliminado";
        }else{
            $respuesta = "Problemas al eliminar";
        }
        return $respuesta;
    }

}
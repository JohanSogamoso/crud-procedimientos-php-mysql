<?php

class Conexion{

    public function conectar(){
        $host = "localhost";
        $user = "root";
        $password = "root";
        $db = "final_phpCurd";
        $conexion = mysqli_connect($host, $user, $password, $db);
        mysqli_query($conexion, "SET NAME 'utf8'"); //mostrar tildes

        if($conexion == false){
            die("ERROR".mysqli_connect_error);
        }
    
        return $conexion;
    }      
}

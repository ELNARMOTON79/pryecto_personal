<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

	include ("conexion.php");
	class Contacto extends Conexion{
        public function login($usuario, $contra){
            $this->sentencia = "SELECT * FROM usuario WHERE usuario = '$usuario' AND contrasena = '$contra'";
            $result = $this->obtener_sentencia();
            $rows = $result->num_rows;
            return $rows;
        }

	}
?>
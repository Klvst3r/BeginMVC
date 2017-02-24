<?php
class Conectar{
	public static function conexion(){
		$conexion = new mysqli("localhost", "dev", "desarrollo", "beginmvc");
		$conexion->query("SET NAMES 'utf8'");
		return $conexion;
	}
}

?>
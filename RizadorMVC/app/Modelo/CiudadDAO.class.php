<?php
require_once 'BD.class.php';

class CiudadDAO  {

	function crearCiudad($arrayCiudad){
	$conexion = new BD();
	
	$resultado = $conexion->insertar('Ciudades',$arrayCiudad);

	return $resultado;
	}
	
}

?>
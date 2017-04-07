<?php
require_once 'BD.class.php';

class CiudadDAO  {

	function crearCiudad($arrayCiudad){
	$conexion = new BD();
	
	$resultado = $conexion->insertar('Ciudades',$arrayCiudad);

	return $resultado;
	}


	function traerCiudades(){
	$conexion = new BD();
	
	$resultado = $conexion->consultaAll('Ciudades');

	return $resultado;
	}


	
}

?>
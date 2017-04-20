<?php
require_once 'BD.class.php';

class ConfigProductoDAO  {

	function totalReservas($idProducto){
	$conexion = new BD();
	
	$resultado = $conexion->consultaColumna('cantTotalReservas', 'ConfigProducto','idConfigProducto',$idProducto)

	return $resultado;
	}


	function traerCiudades(){
	$conexion = new BD();
	
	$resultado = $conexion->consultaAll('Ciudades');

	return $resultado;
	}


	
}

?>
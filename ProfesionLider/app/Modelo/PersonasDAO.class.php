<?php
require_once 'BD.class.php';

class PersonasDAO  {

	function AgregarPersona($arrayCiudad){
	$conexion = new BD();
	
	$resultado = $conexion->insertar('Personas',$arrayCiudad);

	return $resultado;
	}


	function existeXCedula($numCedula){
		$conexion = new BD();
	
		$array = $conexion->consulta('Personas','cedula_Persona',$numCedula);

		if (empty($array)) {
		 	return false;
		 } else{
		 	return true;
		 }
	}


	function traerCiudades(){
	$conexion = new BD();
	
	$resultado = $conexion->consultaAll('Ciudades');

	return $resultado;
	}


	
}

?>
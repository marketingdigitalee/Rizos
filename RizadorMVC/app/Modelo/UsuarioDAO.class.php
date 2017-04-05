<?php
require_once 'BD.class.php';

class UsuarioDAO  {

	
	//Agregar usuario
	public function agregarUsuarioBD($arrayPOST){

		//Instacia de BD
		$conexion = new BD();
		// conectar base de datos 

	$resultado = $conexion->insertar('Usuario',$arrayPOST);

	return $resultado;


	}

	public function traerUsuarioBDXCedula($numCedula){

		$conexion = new BD();

		$array = $conexion->consulta('Usuario','cedulaUsuario' ,$numCedula);

		return $array;
		

	}

	public function existeUsuario($numCedula){

		$conexion = new BD();

		$array = $conexion->consulta('Usuario','cedulaUsuario' ,$numCedula);

		if (empty($array)) {
		 	return false;
		 } else{
		 	return true;
		 }

	}




}



?>


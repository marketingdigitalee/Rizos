<?php
require_once 'BD.class.php';
	
class UserSystemDAO  {
	function existeUsuario($array){
		$conexion = new BD();
		$funciones = new Funciones();
		$result = null;
		$resultPass = null;
		
		$resultUser = $conexion->traerUserSytem($array['user'], $array['pass']);

		return $resultUser;

	}

	function crearUserSystemDAO($array){
		$conexion = new BD();

		$resultUser = $conexion->insertar('UserSystem',$array);

		return $resultUser;


	}

	function consultarVentas($idUser){
		$conexion = new BD();


		$resultUser = $conexion->contarColumna('Reservas','idVendedor', $idUser);

		return $resultUser;


	}



}

?>

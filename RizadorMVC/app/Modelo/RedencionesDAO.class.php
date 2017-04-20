<?php
require_once 'BD.class.php';

class RedencionesDAO{

	public function traerRedencionesXid($idProducto){

			$conexion = new BD();

			$array = $conexion->consulta('Redenciones','idProducto' ,$idProducto);

			return $array;

	}


	public function traerRedencionesActivaXid($idProducto){

		$conexion = new BD();
		$sql = "SELECT * FROM Redenciones WHERE idProducto = '$idProducto' AND activada = '1'";

			$array = $conexion->consultaSQL($sql);

			return $array;

	}


}

?>
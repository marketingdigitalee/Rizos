<?php
require_once 'BD.class.php';

class RedencionesDAO {

	public function traerRedencionesXidProducto($idProducto){

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

	public function cambiarEstadoRendencion($idRedencion, $estado){

		$conexion = new BD();
		$sql = "UPDATE Redenciones SET activada ='$estado' WHERE idRedenciones ='$idRedencion'";

			$array = $conexion->consultaSQL($sql);

			return $array;

	}






}

?>
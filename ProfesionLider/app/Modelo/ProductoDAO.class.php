<?php
require_once 'BD.class.php';

class ProductoDAO  {

	
		//Agregar usuario
	public function insertarProducto($arrayPOST){
			//Instacia de BD
		$conexion = new BD();
			// conectar base de datos 

		$resultado = $conexion->insertar('Producto',$arrayPOST);

		return $resultado;

	}

	public function traerProductoXid($idProducto){

			$conexion = new BD();

			$array = $conexion->consulta('Producto','idProducto' ,$idProducto);

			return $array;

	}

	public function traerAllProductos(){

			$conexion = new BD();

			$array = $conexion->consultaAll('Producto');
			
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
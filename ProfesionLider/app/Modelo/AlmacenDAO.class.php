<?php
require_once 'BD.class.php';

class AlmacenDAO  {

	
	//Agregar usuario
public function agregarAlmacenBD($arrayPOST){
		//Instacia de BD
	$conexion = new BD();
		// conectar base de datos 

	$resultado = $conexion->insertar('Almacenes',$arrayPOST);

	return $resultado;

}

public function traerAlmacenBDxCodigo($codigo){

		$conexion = new BD();

		$array = $conexion->consulta('Almacenes','codAlmacen' ,$codigo);

		return $array;

}

public function traerTablaAlmacenes(){

		$conexion = new BD();

		$array = $conexion->consultaAll('Almacenes');
		
		return $array;

	}


}
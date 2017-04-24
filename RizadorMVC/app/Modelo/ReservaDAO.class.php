<?php
require_once 'BD.class.php';

class ReservaDAO  {

	
	//Agregar usuario
	public function agregarReservaBD($arrayPOST){
		$conexion = new BD();

		$resultado = $conexion->insertar('Reservas',$arrayPOST);

		return $resultado;


}

	public function traerReserva($idReserva){

		$conexion = new BD();

		$array = $conexion->consulta('Reservas','idReservas' ,$idReserva);

		return $array;

	}

	public function ExisteCodigoReserva($codigo){

		$conexion = new BD();

		$array = $conexion->consulta('Reservas','codigoReserva' ,$codigo);
		
		if(empty($array)){
			return true;
		} else{
			return false;
		}

	}

		public function TraerReservaXCodigo($codigo){

		$conexion = new BD();

		$array = $conexion->consulta('Reservas','codigoReserva' ,$codigo);
		
		return $array;

	}

	public function contarCantProdReserv(){
	$conexion = new BD();
	
	$resultado = $conexion->SumarCantidadProductosReservados('Reservas','cantReservas');

	return $resultado;
	}

	public function cambiarColumnaEnvioCorreo($idReserva,$datoCambiar){

		$conexion = new BD();
		$resultado = $conexion->ActualizarColumn('Reserva','envioNotificacion','idReservas',$datoCambiar,$idReserva);

		return $resultado;
	}



}
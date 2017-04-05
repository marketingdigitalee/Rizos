<?php

require_once 'BD.class.php';
require_once 'funciones.php';


class LogEventosDAO  {

	function CrearLog($mensaje,$idUser){
		$conexion = new BD();
		$date = date('Y-m-d H:i:s');
		date_default_timezone_set('America/Bogota');


		$array['descripcionEvento'] = $mensaje;
		$array['FechaEvento']= $date;
		$array['idUser'] = $idUser;

		$conexion->insertar('logEventos',$array);
	}


}

?>
<?php
	require_once 'app/Controlador/controladorVistas.php';
	require_once 'app/Controlador/controladorReserva.php';


	$control = new controladorVistas();
	$registro = new ControladorReserva();
	session_start();

	global $arrayUsuario;

if(!empty($_GET['action'])){

	if(  $_GET['action'] == 'nuevo' ) {	
		$control->cargarPrincipal('form');	
	}
	elseif($_GET['action'] == 'registrado') {
		$control->cargarPrincipal("registrado");	
	}

}elseif(!empty($_POST)){
	if(isset($_POST['nomUsuario']) && isset($_POST['apellUsuario']) && isset($_POST['cedulaUsuario']) && isset($_POST['emailUsuario']) && isset($_POST['dirUsuario'])&& isset($_POST['nomCiudad']) && isset($_POST['telUsuario']) && isset($_POST['nombreRecoje']) && isset($_POST['apellRecoje']) && isset($_POST['cedulaRecoje'] ))
	{

		  $resultado = $registro->agregarRegistro($_POST);
		 switch ($resultado) {
		 	case 'error1':
		 		$control->cargarMensajesReserva("NO SE LOGRO GUARDAR EL REGISTRO","botones");
		 		break;

		 	case 'error2':
		 		$control->cargarMensajesReserva("NO ACEPTASTE LOS TERMINOS Y CONDICIONES, NO SE REALIARÀ EL REGISTRO", 'form');
		 		break;

		 	case 'error3':
		 		$control->cargarMensajesReserva("YA SE ENCUENTRA REGISTRADO POR FAVOR PRESIONE EL BOTON DE YA ME ENCUENTRO REGISTRADO", 'botones');
		 		break;

		 	case 'error4':
		 		$control->cargarMensajesReserva("VALIDACION CAPTCHA NO VALIDA, POR FAVOR INTENTELO DE NUEVO", 'botones');
		 		break;
		 	
		 	default:

		 		$_SESSION = $resultado;
		 				 		
		 		$control->cargarPrincipal('reserva');
		 		break;
		 }

	}elseif(isset($_POST['nomAlmacen']) && isset($_POST['cantReserva']) && isset($_SESSION)){
			
		if(isset($_SESSION)){
			$resultado = $registro->crearReserva($_POST,$_SESSION);

		switch ($resultado) {
		 	case 'error1':
		 		$control->cargarMensajesReserva("NO SE LOGRO GUARDAR LA RESERVA","reserva");
		 		break;

		 	case 'ok':
		 		$control->cargarMensajesReserva("Felicitacion Reserva registrada Correctamente","botones",$_POST['html']);
		 		session_destroy();
		 		break;		 	
		 	default:

		 		$control->cargarMensajesReserva("NO SE LOGRO REALIZAR LA RESERVA ERROR DESCONOCIDO ","botones");
		 		
		 		break;
		 }

		}else{
			//Error 
			var_dump("error de el array de usuario");
			
		}
		

	}elseif(isset($_POST['numCedulaRegistrado'])){

		$resultado = $registro->traerUsuarioXCedula($_POST['numCedulaRegistrado']);

		switch ($resultado) {
				case 'error1':
					$control->cargarMensajesReserva("NO SE ENCUENTRA REGISTRADO POR FAVOR REGISTRESE","form");
					break;
				default:
					$_SESSION['cedula'] = $resultado;
		 			$control->cargarPrincipal('reserva');
		 			break;
			}	
	}

}elseif(isset($_SESSION['cedula'])){
	session_destroy();
	$control->cargarPrincipal('botones');


}else{	
	$control->cargarPrincipal('botones');
}


?>


<?php
	require_once 'app/Controlador/controladorVistas.php';
	require_once 'app/Controlador/controladorReserva.php';
 	include_once("analyticstracking.php");
	
	$control = new controladorVistas();
	$registro = new ControladorReserva();
session_start();

if(!empty($_GET['action'])){


	if(  $_GET['action'] == 'nuevo' ) {	
		$control->cargarPrincipal('form');	
	}
	elseif($_GET['action'] == 'registrado') {
		$control->cargarPrincipal("registrado");	
	}else{
		$control->cargarPrincipal('botones');
	}
/*----------------------LLENADO DE FORMULARIO------------------*/
}elseif(!empty($_POST)){

	if(isset($_POST['nomUsuario']) && isset($_POST['apellUsuario']) && isset($_POST['cedulaUsuario']) && isset($_POST['emailUsuario']) && isset($_POST['dirUsuario'])&& isset($_POST['nomCiudad']) && isset($_POST['telUsuario']) && isset($_POST['nombreRecoje']) && isset($_POST['apellRecoje']) && isset($_POST['cedulaRecoje'] ))
	{
		$_SESSION['idUser'] = (int) 0;
		  $resultado = $registro->agregarRegistro($_POST);
		  
		 switch ($resultado) {
		 	case 'ok':
		 		$control->cargarPrincipal('reserva');
		 		break;
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
			 	$control->cargarMensajesReserva("Error desconocido", 'botones');
		 		break;
		 				 		
		 		
		 }
	/*------------------CREAR RESERVACIONES ----------*/
	}elseif(isset($_POST['nomAlmacen']) && isset($_POST['cantReserva']) && isset($_SESSION)){
			
			$resultado = $registro->crearReserva($_POST,$_SESSION);
		
		switch ($resultado) {
			case 'ok':
		 		$control->cargarMensajesReserva("Felicitacion Reserva registrada Correctamente","botones",$_POST['html']);
		 		
		 		break;	

		 	case 'error1':
		 		$control->cargarMensajesReserva("NO SE LOGRO GUARDAR LA RESERVA","reserva");
		 		session_destroy();
		 		break;

		 		
		 	default:
		 		$control->cargarMensajesReserva("NO SE LOGRO REALIZAR LA RESERVA ERROR DESCONOCIDO INTENTELO DE NUEVO ","botones");
		 		session_destroy();
		 		
		 		break;
		 }

				
		 /*------------------BUSCAR X CEDULA ----------*/
	}elseif(isset($_POST['numCedulaRegistrado'])){
		$_SESSION['idUser'] = (int) 0;

		$resultado = $registro->traerUsuarioXCedula($_POST, $_SESSION);

		switch ($resultado) {
			case 'ok':
				$control->cargarPrincipal('reserva');
		 		break;

			default:
				$control->cargarMensajesReserva($resultado,"form");
				break;				
					
			}	
	}else{
		$control->cargarMensajesReserva($resultado,"botones");
	}

}elseif(isset($_SESSION)){

	if (isset($_SESSION['idUserd'])) {
		if (isset($_SESSION['dataUsuario']) && empty($_SESSION['dataUsuario'])) {
			$control->cargarMensajesReserva("INTENTELO NUEVAMENTE","botones");
			session_destroy();
		}elseif(isset($_SESSION['dataUsuario']) && !empty($_SESSION['dataUsuario']) && is_array($_SESSION['dataUsuario'])) {
			
			$control->cargarPrincipal('reserva');
		}else{
			session_destroy();
			$control->cargarPrincipal('botones');
		}
	}else{
			session_destroy();
			$control->cargarPrincipal('botones');
		}

}else{
	
	$control->cargarPrincipal('botones');

}


?>
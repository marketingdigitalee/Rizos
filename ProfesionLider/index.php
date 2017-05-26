<?php
	require_once 'app/Controlador/controladorVistas.php';
	require_once 'app/Controlador/controladorReserva.php';
	require_once 'app/Modelo/funciones.php';
 	include_once("analyticstracking.php");
	
	$control = new controladorVistas();
	$formularios = new ControladorFormularios();
	$funciones = new Funciones;
session_start();

if(!empty($_GET['reg'])){


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

	if(isset($_POST['doccedula']) && isset($_POST['nom_Persona']) && isset($_POST['apell_Persona']) && isset($_POST['correo_Persona']) && isset($_POST['cedula_Persona']) && isset($_POST['tel_Persona'])&& isset($_POST['genero_Persona']) && isset($_POST['terminos']) && isset($_POST['numForm']))
	{	
		$resultado = null;

		if(is_null($_POST['doccedula'])){
			$resultado = $formularios->ValidarUsuario($_POST['doccedula']);
		}else{
			$resultado = $formularios->AgregarPersona($_POST);
		}

		switch ($resultado) {
		 	case 'ok':
		 		$control->cargarMensajesPopup('SELECCIONE EL ALMACEN Y LA CANTIDAD','reserva');
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
		 }elseif(){


		 }


}else{
	
	$control->cargarPrincipal('fromInscripcion');

}


?>
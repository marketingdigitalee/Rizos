<?php
	require_once 'app/Controlador/controladorFormularios.php';
	require_once 'app/Controlador/controladorVistas.php';
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
		var_dump("Entro aqui");

		if(is_null($_POST['doccedula'])){
			
			if($$formularios->ValidarUsuario($_POST['doccedula'])){
				$resultado = 'ok';
			}else{
				$resultado = 'error1';
			}
		}else{
			$resultado = $formularios->AgregarPersona($_POST);
		}


		switch ($resultado) {
		 	case 'ok':
		 		$control->cargarMensajesPopup('SELECCIONE EL ALMACEN Y LA CANTIDAD','reserva');
		 		break;
		 	case 'error1':
		 		$control->cargarMensajesReserva("NO SE LOGRO GUARDAR EL REGISTRO","botones");
		 		var_dump("entro al error 1");
		 		break;

		 	default:
			 	$control->cargarPrincipal('fromInscripcion');
		 		break;
		 				 		
		 		
		 	}
		 }


}else{
	
	$control->cargarPrincipal('fromInscripcion');

}


?>
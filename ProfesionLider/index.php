<?php
	require_once 'app/Controlador/controladorFormularios.php';
	require_once 'app/Controlador/controladorVistas.php';
	require_once 'app/Modelo/funciones.php';
 	include_once("analyticstracking.php");
	
	$control = new controladorVistas();
	$formularios = new ControladorFormularios();
	$funciones = new Funciones;

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
 	if(isset($_POST['numForm'])){
 		
 		if($_POST['numForm'] == "1"){
 			var_dump($_POST);
 			
	 		if(isset($_POST['doccedula']) && isset($_POST['nom_Persona']) && isset($_POST['apell_Persona']) && isset($_POST['correo_Persona']) && isset($_POST['genero_Persona']) && isset($_POST['cedula_Persona']) && isset($_POST['tel_Persona']) && isset($_POST['emp_Persona']) && isset($_POST['acepto_Persona']) ){	

					$resultado = null;
					if(empty($_POST['doccedula'])){
						$resultado = $formularios->AgregarPersona($_POST);
					}else{
						
						$resultado = $formularios->ValidarUsuario($_POST);
					}


					switch ($resultado) {
					 	case 'ok':
					 		//Descargar PDF
					 		var_dump("Descargar PDF");
					 		break;
					 	case 'error1':
					 		var_dump("ya estabas registrado");
					 		break;
					 	case 'error3':
					 		var_dump("no estabas registrado");
					 		break;

					 	case 'error2':
					 		var_dump("Debe aceptar los terminos");
					 		break;

					 	default:
						 	var_dump("entro al default");
					 		break;
					 	}
				} 			
			}elseif ($_POST['numForm'] == "2") {
				var_dump("Entro al 2");
			}
 	}else{
 		var_dump("no Entro ");
 	}



}else{	
	$control->cargarPrincipal('fromInscripcion');
}


?>
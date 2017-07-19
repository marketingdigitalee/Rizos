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
 			 			
	 		if(isset($_POST['idDescarga']) && isset($_POST['doccedula']) && isset($_POST['nom_Persona']) && isset($_POST['apell_Persona']) && isset($_POST['correo_Persona']) && isset($_POST['genero_Persona']) && isset($_POST['cedula_Persona']) && isset($_POST['tel_Persona']) && isset($_POST['emp_Persona']) && isset($_POST['acepto_Persona']) ){	

					$resultado = null;
					if(empty($_POST['doccedula'])){
						$resultado = $formularios->AgregarPersona($_POST);
					}else{
						
						$resultado = $formularios->ValidarUsuario($_POST);
					}


					switch ($resultado) {
					 	case 'ok':
					 		//Descargar PDF
					 		$funciones->descargaPDF($_POST['idDescarga']);
					 		$funciones->ejecutarJS('LimpiarForm');
					 		$control->cargarPrincipal('fromInscripcion');
					 		break;
					 	
					 	default:
					 		echo '<SCRIPT LANGUAGE="JavaScript">  ';
							echo 'confirm("'. $resultado.'");  ';
							echo '</SCRIPT>';
							$control->cargarPrincipal('fromInscripcion');
													 	
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
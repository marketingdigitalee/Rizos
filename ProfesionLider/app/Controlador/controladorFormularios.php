<?php 
require 'app/Modelo/PersonasDAO.class.php';
require_once 'app/Modelo/funciones.php';
require_once 'app/Controlador/libreria/recaptcha/recaptchalib.php';
require_once 'controladorVistas.php';
require_once 'app/Modelo/LogEventosDAO.class.php';

class ControladorFormularios{

function ValidarUsuario($POST){
	$modPersonas = new PersonasDAO();

	$respuesta = null;

	if(array_key_exists("doccedula", $POST)){
		
		if($modPersonas->existeXCedula($POST['doccedula'])){
			$respuesta = 'ok';
		}else{
			$respuesta = 'Usuario no existe, diligencie el formulario completo';
		}
	}

	return $respuesta;

}

function AgregarPersona($POST){
	$modPersonas = new PersonasDAO();
	$funciones = new Funciones();
	$respuesta = null;
	if($POST['acepto_Persona'] == 'on'){

		$POST['acepto_Persona'] = true;

		if(empty($POST['cedula_Persona'])|| empty($POST['nom_Persona']) || empty($POST['apell_Persona']) || empty($POST['correo_Persona']) || empty($POST['genero_Persona']) || empty($POST['cedula_Persona']) || empty($POST['tel_Persona'])){

				$respuesta = 'Llene todos los campos';

		}else{

			if($modPersonas->existeXCedula($POST['cedula_Persona'])){
				$respuesta = 'Cedula ya existe en el sistema';
			}else{
		
			//Validar campos que no esten vacios 

				$nuevoArray = $funciones->quitarDatosArreglo($POST,'doccedula');
				$nuevoArray = $funciones->quitarDatosArreglo($nuevoArray,'numForm');
				$servidor = $_SERVER;
				$nuevoArray['ip_Persona'] = $funciones->getRealIP($servidor);


			//Se envia objeto nuevo creado los datos enviados

				$resultado = $modPersonas->AgregarPersona($nuevoArray);
				if ($resultado){
					$respuesta = 'ok';
				}else{
					$respuesta = 'Error al guardar el Usuario';
				}
		
			}

		}
				

	}else{
		$respuesta = 'No ha aceptado los terminos y condiciones';
	}
return $respuesta;
}


}

 ?>
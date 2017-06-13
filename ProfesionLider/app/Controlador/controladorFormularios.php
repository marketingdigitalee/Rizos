<?php 
require 'app/Modelo/PersonasDAO.class.php';
require 'app/Modelo/AlmacenDAO.class.php';
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
			$respuesta = 'error3';
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
				
		if($modPersonas->existeXCedula($POST['cedula_Persona'])){
			$respuesta = 'error1';
		}else{

			$nuevoArray = $funciones->quitarDatosArreglo($POST,'doccedula');
			$nuevoArray = $funciones->quitarDatosArreglo($nuevoArray,'numForm');
			$servidor = $_SERVER;
			$nuevoArray['ip_Persona'] = $funciones->getRealIP($servidor);


		//Se envia objeto nuevo creado los datos enviados

			$resultado = $modPersonas->AgregarPersona($nuevoArray);
			var_dump($resultado);

				if ($resultado){
					$respuesta = 'ok';
				}else{
					$respuesta = 'error1';
				}

		}
	}else{
		$respuesta = 'error2';
	}
return $respuesta;
}


}

 ?>
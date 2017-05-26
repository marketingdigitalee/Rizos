<?php 
require 'app/Modelo/PersonasDAO.class.php';
require 'app/Modelo/ReservaDAO.class.php';
require 'app/Modelo/AlmacenDAO.class.php';
require 'app/Modelo/ProductoDAO.class.php';
require 'app/Modelo/RedencionesDAO.class.php';
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

		}
	}

				

}

function AgregarPersona($POST){
	if(array_key_exists('terminos', $POST)){
				
		if($modUsuario->existeUsuario($POST['cedula'])){
			$respuesta = 'ok';
		}else{

			$nuevoArray = $funciones->quitarDatosArreglo($POST,'terminos');
			$servidor = $_SERVER;
			$nuevoArray['ip_Persona'] = $funciones->getRealIP($servidor);
				
		//Se envia objeto nuevo creado los datos enviados

			$resultado = $modUsuario->agregarUsuarioBD($nuevoArray);

					

					if ($resultado){

						$_SESSION['dataUsuario'] = $modUsuario->traerUsuarioBDXCedula($POST['cedulaUsuario']);

						
						$respuesta = 'ok';
					}else{
						$respuesta = 'error1';
					}

				}
			}else{
				$respuesta = 'error2';
			}
}

}

 ?>
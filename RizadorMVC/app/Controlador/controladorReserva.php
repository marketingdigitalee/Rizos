<?php
require 'app/Modelo/UsuarioDAO.class.php';
require 'app/Modelo/ReservaDAO.class.php';
require 'app/Modelo/AlmacenDAO.class.php';
require_once 'app/Modelo/funciones.php';
require_once 'app/Controlador/libreria/recaptcha/recaptchalib.php';
require_once 'controladorVistas.php';


class ControladorReserva{

function agregarRegistro($POST){
	try {
		

	$nuevoArray= null;
	$modUsuario = new UsuarioDAO();
	$respuesta = null;
	$funciones = new Funciones;

	// your secret key
	$secret = "6Le4_RoUAAAAAMCZtCrZS0E79nCV3rBby-ID4vlF";
	 
	// empty response
	$response = null;
	 
	// check secret key
	$reCaptcha = new ReCaptcha($secret);

	if($POST["g-recaptcha-response"]){
		$response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"],$POST["g-recaptcha-response"]);

		if ($response != null && $response->success) {
		   
			if(array_key_exists('habeas', $POST)){
				
				if($modUsuario->existeUsuario($POST['cedulaUsuario']))
				{
					$respuesta = 'error3';
				}else{

					$nuevoArray = $funciones->quitarDatosArreglo($POST,'habeas');
					$servidor = $_SERVER;

					$nuevoArray['ipUsuario'] = $funciones->getRealIP($servidor);
				
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
		} else {
			$respuesta = 'error4';
		}

	}
	
	return $respuesta;

} catch (Exception $e) {
	return $e->getMessage();
}
}	

function crearReserva($POST,$Sesion){
try {
	

	$modAlmacen = new AlmacenDAO;
	$modReserva = new ReservaDAO;
	$modUsuario = new UsuarioDAO;
	$vistaControl = new controladorVistas;
	$funciones = new Funciones;
	$cedula = null;
	$codigo = null;
	$cantidad = null;
	$idVen = null;
	$arrayUsuario = null;


		foreach ($Sesion as  $key => $value) {
				if($key == 'idUser'){
					$idVen = $value;
				}if($key == 'dataUsuario'){
					$arrayUsuario = $value;
				}

		}


		foreach ($POST as  $key2 => $value2) {
				if($key2 == 'cedula'){
					$cedula = $value2;
				}
			
		}

		foreach ($POST as  $key2 => $value2) {
				if($key2 == 'nomAlmacen'){
					$codigo = $value2;
				}
			
		}
		foreach ($POST as $key3 => $value3) {
				if($key3 == 'cantReserva'){
					$cantidad = $value3;
				}
		}


	date_default_timezone_set('America/Bogota');
	$date = date('Y-m-d H:i:s');
				
	$arrayAlmacen = $modAlmacen->traerAlmacenBDxCodigo($codigo);
	
	$arrayAlmacenNEW=null;
	
	if (!is_null($arrayAlmacen) && is_array($arrayAlmacen)) {
	
		$arrayAlmacenNEW = $funciones->arreglarArrayBD($arrayAlmacen);

		}else{
			return 'error2';
			exit;
		}

						 
	/*$arrayUsuario = $modUsuario->traerUsuarioBDXCedula($cedula);*/

	$arrayUsuarioNEW=null;
	
	if (!is_null($arrayUsuario) && is_array($arrayUsuario)) {
	
		$arrayUsuarioNEW = $funciones->arreglarArrayBD($arrayUsuario);

		}else{
			return 'error3';
			exit;
		}
	
	if (is_null($idVen)) {
		return 'error4';
		exit;
	}
							
	$codigoReserva = NULL;

	do {
		$codigoReserva = $funciones->generarCodigo(6);
	}while (!$modReserva->ExisteCodigoReserva($codigoReserva));


	$nombreMail = $arrayUsuarioNEW['nomUsuario'].' '.$arrayUsuarioNEW['apellUsuario'];
	$nomAlmacen = $arrayAlmacenNEW['nomAlmacen'];
	$ciudadAlmacen = $arrayAlmacenNEW['nomCiudad'];
	$fechaRedencion ='12/03/2017';
	$mailUsuario = $arrayUsuarioNEW['emailUsuario'];

	$html = $vistaControl->crearMensajeHtml($nombreMail,$nomAlmacen,$ciudadAlmacen,$cantidad,$fechaRedencion,$codigoReserva, $mailUsuario);



	$nuevoArray['idUsuario']= $arrayUsuarioNEW['idUsuario'] ;
	$nuevoArray['idAlmacen']= $arrayAlmacenNEW['idAlmacen'];
	$nuevoArray['cantReservas']= $cantidad;
	$nuevoArray['fechaReserva']=  $date;
	$nuevoArray['idEstadoReserva']= 1;
	$nuevoArray['codigoReserva']= $codigoReserva;
	$nuevoArray['emailUsuario']= $codigoReserva;
	$nuevoArray['idVendedor']= $idVen;
	$nuevoArray['htmlReserva']= $html;
	

			
	$arrayReserva = $modReserva->agregarReservaBD($nuevoArray);
	
		if ($arrayReserva){
			$_POST['html'] = $html;
		return 'ok';
		}else{
			return 'error1';

		}

} catch (Exception $e) {
	return $e->getMessage();
}

}

	//TRAE EL USUARIO POR CEDULA
function traerUsuarioXCedula($POST, $SESSION){
try {
	

	$modUsuario = new UsuarioDAO();
	$resultado = null;
	$cedulaUsuario = null;
	$idUsuario = null;

	// your secret key
	$secret = "6Le4_RoUAAAAAMCZtCrZS0E79nCV3rBby-ID4vlF";
	 
	// empty response
	$response = null;
	 
	// check secret key
	$reCaptcha = new ReCaptcha($secret);

	if($POST["g-recaptcha-response"]){
		$response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"],$POST["g-recaptcha-response"]);

		if ($response != null && $response->success) {
			
			foreach ($POST as $key => $value) {
				if ($key == 'numCedulaRegistrado') {
						$cedulaUsuario = $value;
						break;
				}	
			}
			if (is_null($cedulaUsuario) || empty($cedulaUsuario)) {
				var_dump("error cedula");
			}


			foreach ($SESSION as $key => $value) {
				if ($key == 'idUser') {
						$idUsuario = $value;
				}	
			}

		/*	if (is_null($idUsuario) || empty($idUsuario)) {
				var_dump($idUsuario);
			}

*/

			$array = $modUsuario->traerUsuarioBDXCedula($cedulaUsuario);

			
			if(!is_array($array)){
				$resultado = "NO SE ENCUENTRA REGISTRADO POR FAVOR REGISTRESE";		
			
			}else{

				$_SESSION['dataUsuario'] = $array;
				$resultado = 'ok';
			}

			
	
		}else{
			//error 2

		}
	}else{
	//error 3

	}

	return $resultado;

} catch (Exception $e) {
	return $e->getMessage();
}


}



}



?>
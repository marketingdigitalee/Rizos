<?php
require_once 'app/Modelo/UserSystemDAO.class.php';
require_once 'app/Modelo/LogEventosDAO.class.php';
require_once 'app/Modelo/funciones.php';
require_once 'app/Modelo/CiudadDAO.class.php';
require_once 'app/Controlador/controladorVistas.php';
require_once 'app/Controlador/libreria/recaptcha/recaptchalib.php';



class ControladorConfig{

	function login($POST){
try {
	

// your secret key
	$secret = "6Le4_RoUAAAAAMCZtCrZS0E79nCV3rBby-ID4vlF";
	 
	// empty response
	$response = null;
	 
	// check secret key
	$reCaptcha = new ReCaptcha($secret);

	if($POST["g-recaptcha-response"]){
		$response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"],$POST["g-recaptcha-response"]);

		if ($response != null && $response->success) {

		$userSystem = new UserSystemDAO;
		$logEventos = new LogEventosDAO;
		$funciones = new Funciones;
		$controlVistas = new controladorVistas;

		$result = null;
		$nombreUser = null;
		$cedulaUser = null;
		$cargoUser = null;
		$correoUser = null;
		$numeroRegistros = null;
		$valor = null;
		$idRoll = null;


		$resultPass = $funciones->encriptar($POST['txtpassword']);
		
		$arreglo['user'] = $POST['txtusuario'];
		$arreglo['pass'] = $resultPass;

		$array = $userSystem->existeUsuario($arreglo);
				
		$idUser = null;
		

			if (is_array($array) && !empty($array)) {
				
				foreach ($array as $key) {
					foreach ($key as $key2 => $value2) {
						if($key2 == 'idUserSystem'){
							$idUser = $value2;
							
						}elseif($key2 == 'nomUser'){
							$nombreUser = $value2;
							

						}elseif($key2 == 'cedulaUser'){
							$cedulaUser = $value2;
							
							
						}elseif($key2 == 'cargoUser'){
							$cargoUser = $value2;
							
							
						}elseif($key2 == 'emailUser'){
							$correoUser = $value2;
							
						}elseif($key2 == 'idRoll'){
							$idRoll = $value2;
							
						}
					}
					
				}

				

				$numeroRegistros = $userSystem->consultarVentas($idUser);
				foreach ($numeroRegistros as $key) {
					foreach ($key as $key2 => $value2) {
						$valor = $value2;
					}
					
				}
				
				$htmlUser = $controlVistas->crearDataUser($nombreUser,$cedulaUser,$cargoUser,$correoUser,$valor);

				

				$_SESSION['idUser'] = (int) $idUser;
				$_SESSION['htmlUser'] = $htmlUser;
				$_SESSION['idRoll'] = $idRoll;

				if ($idRoll == '1') {
					$logEventos->CrearLog('Registro Exitoso Administrador con id: ',$idUser);
					$result = 'admin';
				}elseif($idRoll == '3'){
					$logEventos->CrearLog('Registro Exitoso Supervisor con id: ',$idUser);
					$result = 'super';
				}else{
					$result = 'ok';
					$logEventos->CrearLog('Registro Exitoso Vendedor con id: ',$idUser);
				}
			

			}else{

				$result = 'ERROR AL TRATAR DE ENCONTRAR EL ARREGLO CON INFORMACIÓN';
			}
		

		}else{
			$result = 'ERROR AL VALIDAR EL CAPTCHA INTENTENTELO DE NUEVO'; //Problema al validar chaptcha

		}
	}else{
		$result = 'VALIDE EL CAPTCHA CORRECTAMENTE O NO SE EL PERMITIRA EL ACCESO' ;
	}


return $result;

} catch (Exception $e) {
	return $e->getMessage();
}
}

	function crearUserSystem($POST){
		try {

// your secret key
	$secret = "6Le4_RoUAAAAAMCZtCrZS0E79nCV3rBby-ID4vlF";
	 
	// empty response
	$response = null;
	 
	// check secret key
	$reCaptcha = new ReCaptcha($secret);

	if($POST["g-recaptcha-response"]){
		$response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"],$POST["g-recaptcha-response"]);

		if ($response != null && $response->success) {


		$userSystem = new UserSystemDAO;
		$logEventos = new LogEventosDAO;
		$funciones = new Funciones;
		$result = null;
		
		if($POST['txtPassUser'] == $POST['txtPassUserConfirm']){
			$existe = $userSystem->existeCorreo($POST['txtCorreoUser']);
			if ($existe) {
				$result = "error1";
				
			}else{
				$password = $funciones->encriptar($POST['txtPassUser']);
				$arreglo['nomUser'] = $POST['txtNombreUser'];
				$arreglo['cedulaUser'] = $POST['txtCedulaUser'];
				$arreglo['cargoUser'] = $POST['txtCargoUser'];
				$arreglo['emailUser'] = $POST['txtCorreoUser'];
				$arreglo['passUser'] = $password;
				$arreglo['idRoll'] = 2;//Vendedores por defecto

				$respuesta = $userSystem->crearUserSystemDAO($arreglo);
				
				if($respuesta){
					$result = 'ok';

				}else{
					$result = 'NO SE LOGRO LA CREACIÓN DEL USUARIO';

				}

			}
			

		}else{
			$result = "La contraseña no corresponde";
		}
	}else{
		$result = 'ERROR AL VALIDAR EL CAPTCHA INTENTENTELO DE NUEVO'; //Problema al validar chaptcha

	}
}else{
$result = 'VALIDE EL CAPTCHA CORRECTAMENTE O NO SE EL PERMITIRA EL ACCESO';
}

return $result;
			
} catch (Exception $e) {
			
	return $e->getMessage();
}

}

	function crearCiudad($nombreCiudad){

		$modCiudad = new CiudadDAO;

		$arrayCiudad['nombreCiudad'] = $nombreCiudad;

		$resultado = $modCiudad->crearCiudad($arrayCiudad);

		return $resultado;
	}


	function crearAlmacenes($POST){

		$modCiudad = new AlmacenDAO;

		$arrayAlmacen['codAlmacen'] = $POST['codAlmacenBD'];
		$arrayAlmacen['nomAlmacen'] = $POST['nomAlmacenBD'];
		$arrayAlmacen['nomCiudad'] = $POST['ciudadAlmacenBD'];
		$arrayAlmacen['dirAlmacen'] = $POST['dirAlmacenBD'];

		$resultado = $modCiudad->agregarAlmacenBD($arrayAlmacen);

		return $resultado;
	}

}
?>
<?php
require 'app/Modelo/UsuarioDAO.class.php';
require 'app/Modelo/ReservaDAO.class.php';
require 'app/Modelo/AlmacenDAO.class.php';
require 'app/Modelo/ProductoDAO.class.php';
require 'app/Modelo/RedencionesDAO.class.php';
require_once 'app/Modelo/funciones.php';
require_once 'app/Controlador/libreria/recaptcha/recaptchalib.php';
require_once 'controladorVistas.php';
require_once 'app/Modelo/LogEventosDAO.class.php';


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
	$Producto = new ProductoDAO;
	$Redenciones = new RedencionesDAO;
	$logEventos = new LogEventosDAO;

	$cedula = null;
	$codigo = null;
	$cantidad = null;
	$idVen = null;
	$arrayUsuario = null;
	$fechaActiva = null;
	$EstadoActual = null;
	$arrayConfig = null;
	$cantidadReservas = null;
	$estadoProducto = null;
	$estadoReserva = 1;


	foreach ($Sesion as  $key => $value) {
		if($key == 'idUser'){
			$idVen = $value;
		}
		if($key == 'dataUsuario'){
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

			/*realiza la comprobacion de las reservas */
		
		$arrayProductoNEW= null;

		$arrayProducto = $Producto->traerProductoXid(1);
		
		if(!is_null($arrayProducto) && is_array($arrayProducto)){

			$arrayProductoNEW = $funciones->arreglarArrayBD($arrayProducto);

			foreach ($arrayProductoNEW as $key3 => $value3) {
					
					if($key3 == 'estadoProducto'){
						$estadoProducto = $value3;
					}

					if($key3 == 'stockProducto'){
						$cantidadReservas = $value3;
					}
			}

			if($estadoProducto == 3){
				return 'error5';
				exit;
			}else{
				$totalReservas = $modReserva->contarCantProdReserv();

				$arrayTotalReserv = $funciones->arreglarArrayBD($totalReservas);
				$totalReservas = null;

				foreach ($arrayTotalReserv as $key => $value) {
					if($key == 'total'){
						$totalReservas = $value;
					}
				}
				
				if($totalReservas == $arrayProductoNEW['stockProducto']){
					$estadoReserva = 2;

				}else{

					$estadoReserva = 1;
				}

				
			}

		}

		$arrayRedencionNEW= null;
		$resultadoFecha = true;
		$arrayRedenciones = $Redenciones->traerRedencionesActivaXid(1);
		$cantProd = null;
		$fechaRedencion = null;
		$idRedencion = null;
		

		if(!empty($arrayRedenciones) && is_array($arrayRedenciones)){

			do {
				$ordemanientoActual = null;

				$arrayRedencionNEW = $funciones->arreglarArrayBD($arrayRedenciones);
			
				foreach ($arrayRedencionNEW as $key => $value) {
					
					if($key == 'cantidadProductos'){
						$cantProd = $value;
					}

					if($key == 'fechaRedencion'){
						$fechaRedencion = $value;
					}

					if($key == 'idRedenciones'){
						$idRedencion = $value;
					}

					if($key == 'ordenamientoRedenciones'){
						$ordemanientoActual = $value;
					}
				}
				$cantidadActual = $modReserva->contarCantProdReserv();
				$cantidadActual = $funciones->arreglarArrayBD($cantidadActual);
				$cantActualEntera = (int) $cantidadActual['total'];
				$cantProdEntera = (int) $cantProd;
				$idRedencion = (int) $idRedencion;

				if($cantActualEntera > $cantProdEntera){
					$Redenciones->cambiarEstadoRendencion('1', '0');
					$Redenciones->cambiarEstadoRendencion('2', '1');
					$logEventos->CrearLog("Se ha cambiado la fecha de redencion de forma automatica ",$arrayUsuarioNEW['idUsuario']);
	
				
				}else{
					$resultadoFecha = false;

				}
				
			} while ($resultadoFecha);

		}


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
	$nuevoArray['idRedenciones']= $idRedencion;
	$nuevoArray['envioNotificacion']= 0;
	

			
	$arrayReserva = $modReserva->agregarReservaBD($nuevoArray);
	
	if ($arrayReserva){
		$_POST['html'] = $html;
		if($estadoReserva == 1){
			return 'ok';
		}else{
			return 'error4';
		}
				
	}else{
		return 'error1';
	}

}catch (Exception $e) {
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
					return 'error1';		
					exit;
				}


			foreach ($SESSION as $key => $value) {
				if ($key == 'idUser') {
						$idUsuario = $value;
				}	
			}

			$array = $modUsuario->traerUsuarioBDXCedula($cedulaUsuario);

			
			if(!is_array($array)){
				$resultado = "NO SE ENCUENTRA REGISTRADO POR FAVOR REGISTRESE";		
			
			}else{

				$_SESSION['dataUsuario'] = $array;
				$resultado = 'ok';
			}

			
	
		}else{
			return 'Valide todos los campos';

		}
	}else{
	return 'Compruebe que no es un robot';

	}

	return $resultado;

} catch (Exception $e) {
	return $e->getMessage();
}


}



}



?>
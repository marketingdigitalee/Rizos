<?php
require 'app/Modelo/UsuarioDAO.class.php';
require 'app/Modelo/ReservaDAO.class.php';
require 'app/Modelo/AlmacenDAO.class.php';
require 'app/Modelo/ProductoDAO.class.php';
require 'app/Modelo/RedencionesDAO.class.php';
require_once 'app/Modelo/funciones.php';
require_once 'controladorVistas.php';
require_once 'app/Modelo/LogEventosDAO.class.php';



class ControladorReserva{

	function agregarRegistro($POST){
		$nuevoArray= null;
		$modUsuario = new UsuarioDAO();
		$respuesta = null;
		$funciones = new Funciones;

		   
		if(array_key_exists('habeas', $POST)){
						
			if($modUsuario->existeUsuario($POST['cedulaUsuario'])){
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

		}	
		return $respuesta;
	}


	function crearReserva($POST,$Sesion){	

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
		$fechaRedencion = $fechaRedencion;
		$mailUsuario = $arrayUsuarioNEW['emailUsuario'];

		$html = $vistaControl->crearMensajeHtml($nombreMail,$nomAlmacen,$ciudadAlmacen,$cantidad,$fechaRedencion,$codigoReserva, $mailUsuario);



		$nuevoArray['idUsuario']= $arrayUsuarioNEW['idUsuario'] ;
		$nuevoArray['idAlmacen']= $arrayAlmacenNEW['idAlmacen'];
		$nuevoArray['cantReservas']= $cantidad;
		$nuevoArray['fechaReserva']=  $date;
		$nuevoArray['idEstadoReserva']= $estadoReserva;
		$nuevoArray['codigoReserva']= $codigoReserva;
		$nuevoArray['emailUsuario']= $codigoReserva;
		$nuevoArray['idVendedor']= $idVen;
		$nuevoArray['htmlReserva']= $html;
		$nuevoArray['idRedenciones']= $idRedencion;
		$nuevoArray['envioNotificacion']= 0;

		$CustomFields = null;

				
		$arrayReserva = $modReserva->agregarReservaBD($nuevoArray);
		
			if ($arrayReserva){
				$_POST['html'] = $html;

//Funcionalidad envio de correo automatico 

				// if($estadoReserva == 1){
					
				// 	$nombre= $arrayUsuarioNEW['nomUsuario'];
				// 	$apellido= $arrayUsuarioNEW['apellUsuario'];
				// 	$arregloMail['CustomFields'] =  array(2 => $nombre,61=> $nomAlmacen, 8=> $ciudadAlmacen, 62 => $cantidad,66=> $fechaRedencion,64=>$codigoReserva,3=>$apellido);
				// 	$arregloMail["email"] = $mailUsuario;
				// 	var_dump($arregloMail);

				// 	$respu = $funciones->envioMail($arregloMail);
			 // 		if($respu){
			 // 			$arregloReserva2 = $modReserva->TraerReservaXCodigo($codigoReserva);
			 // 			$valorid = null;
			 // 			$arregloReserva2 = $funciones->arreglarArrayBD($arregloReserva2);
			 			
			 // 			foreach ($arregloReserva2 as $key => $value) {
			 // 				if($key == 'idReservas'){
			 // 					$valorid = 	$value;
			 // 					break;
			 // 				}
			 // 			}
			 // 			$resulCambio = $modReserva->cambiarColumnaEnvioCorreo($valorid,1);
			 			

			 // 			if($resulCambio){

			 // 				return 'ok';
			 // 			}else{
			 // 				$logEventos->CrearLog("No cambio el estado del envio de la reserva numero -".$valorid. " -Pero si envio el correo electronico",$arrayUsuarioNEW['idUsuario']);
			 // 				return 'error8';
			 // 			}

			 			
			 // 		}else{
			 // 			return 'error7';
			 // 		}

					

				// }else{
				// 	return 'error4';
				// }
				return 'ok';
			}else{
				return 'error1';

			}
	}

		//TRAE EL USUARIO POR CEDULA
	function traerUsuarioXCedula($POST, $SESSION){

		$modUsuario = new UsuarioDAO();
		$resultado = null;
		$cedulaUsuario = null;
		$idUsuario = null;

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

		if (is_null($idUsuario) || empty($idUsuario)) {
			return "error Id usuario debo salir por y volver a logearme";
		}


		$array = $modUsuario->traerUsuarioBDXCedula($cedulaUsuario);

			
		if(!is_array($array) || empty($array)){
			$resultado = "NO SE ENCUENTRA REGISTRADO POR FAVOR REGISTRESE";		
		}else{
			$_SESSION['dataUsuario'] = $array;
			$resultado = 'ok';
		}

		return $resultado;

	}



}

?>
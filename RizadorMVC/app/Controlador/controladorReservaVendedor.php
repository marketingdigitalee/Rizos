<?php
require 'app/Modelo/UsuarioDAO.class.php';
require 'app/Modelo/ReservaDAO.class.php';
require 'app/Modelo/AlmacenDAO.class.php';
require 'app/Modelo/ProductoDAO.class.php';
require_once 'app/Modelo/funciones.php';
require_once 'controladorVistas.php';


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

		$arrayProducto  = $Producto->traerProductoXid(1);
		
		if(!is_null($arrayProducto) && is_array($arrayProducto){

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

				if($totalReservas>$arrayProductoNEW['cantTotalReservas']){
					$estadoReserva = 2;

				}else{

					$estadoReserva = 1;
				}

				
			}

		}

		$arrayRedencionNEW= null;
		$resultadoFecha = false;
		$arrayRedenciones = $Redenciones->traerRedencionesActivaXid(1)
		$cantProd


		

		if(!is_null($arrayRedenciones) && is_array($arrayRedenciones){

			do {

				$arrayRedencionNEW = $funciones->arreglarArrayBD($arrayRedenciones);
			
				foreach ($arrayRedencionNEW as $key => $value) {
					
					if($key3 == 'cantidadProductos'){
						$estadoProducto = $value3;
					}

					if($key3 == 'stockProducto'){
						$cantidadReservas = $value3;
					}
				}
				
			} while ( $resultadoFecha);



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

				if($totalReservas>$arrayProductoNEW['cantTotalReservas']){
					$estadoReserva = 2;

				}else{

					$estadoReserva = 1;
				}

				
			}

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
		$nuevoArray['idEstadoReserva']= $estadoReserva;
		$nuevoArray['codigoReserva']= $codigoReserva;
		$nuevoArray['emailUsuario']= $codigoReserva;
		$nuevoArray['idVendedor']= $idVen;
		$nuevoArray['htmlReserva']= $html;
		$nuevoArray['idRedenciones']= ;
		

				
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
			var_dump("error cedula");
		}

		foreach ($SESSION as $key => $value) {
			if ($key == 'idUser') {
				$idUsuario = $value;
			}	
		}

		if (is_null($idUsuario) || empty($idUsuario)) {
			var_dump("error Id usuario debo salir por y volver a logearme");
		}


		$array = $modUsuario->traerUsuarioBDXCedula($cedulaUsuario);
			
		if(!is_array($array)){
			$resultado = "NO SE ENCUENTRA REGISTRADO POR FAVOR REGISTRESE";		
		}else{
			$_SESSION['dataUsuario'] = $array;
			$resultado = 'ok';
		}

		return $resultado;

	}



}

?>
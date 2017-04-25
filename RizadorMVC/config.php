<?php
	require_once 'app/Controlador/controladorVistas.php';
	require_once 'app/Controlador/controladorConfig.php';
	require_once 'app/Controlador/controladorReservaVendedor.php';	

	$control = new controladorVistas;
	$config = new ControladorConfig;
	$registro = new ControladorReserva;
	$funciones = new Funciones;

	session_start();

	if(!empty($_POST)){
		/*----------LOGIN----------*/
		if(isset($_POST['txtusuario']) && isset($_POST['txtpassword'])){
			$resultado = $config->login($_POST);

			//Verificar los roles
			switch ($resultado) {
				case 'ok':
					$control->cargarMensajesLogin('Bienvenido','VistasConfig/botonesVendedor',$_SESSION['htmlUser'], '');
					break;
				case 'admin':
					$control->cargarMensajesLogin('Bienvenido','VistasConfig/vistaAdmon',$_SESSION['htmlUser'], '');
					break;
				case 'super':
					$control->cargarMensajesLogin('Bienvenido','VistasConfig/vistaSuper',$_SESSION['htmlUser'], '');
					break;

				default:
					$control->cargarMensajesLogin($resultado, 'VistasConfig/login');
					break;
			}
			if(is_int($resultado)){			
				$control->cargarMensajesLogin('Bienvenido','VistasConfig/botonesVendedor');

			}elseif(is_bool($resultado)){
				$control->cargarMensajesLogin('Escriba de nuevo sus datos','VistasConfig/login');

			}

			/*------REGISTRO DE USUARIO NUEVO--------*/
		}elseif(isset($_POST['txtNombreUser']) && isset($_POST['txtCedulaUser'])&&isset($_POST['txtCargoUser'])&&isset($_POST['txtCorreoUser'])&&isset($_POST['txtPassUser'])&&isset($_POST['txtPassUserConfirm'])){

				$resultado = $config->crearUserSystem($_POST);
				switch ($resultado) {
					case 'ok':
						$control->cargarMensajesLogin("USUARIO REGISTRADO CORRECTAMENTE", 'VistasConfig/login');
						break;
					case 'error1':
						$control->cargarMensajesLogin("EL CORREO INGRESADO YA EXISTE REVISE SUS DATOS", 'VistasConfig/registroUsers');
						break;

					default:
						$control->cargarMensajesLogin($resultado, 'VistasConfig/login');
						break;
				}
				

				/*----------FORMULARIO RESERVA-----------*/

		}elseif(isset($_POST['nomUsuario']) && isset($_POST['apellUsuario']) && isset($_POST['cedulaUsuario']) && isset($_POST['emailUsuario']) && isset($_POST['dirUsuario'])&& isset($_POST['nomCiudad']) && isset($_POST['telUsuario']) && isset($_POST['nombreRecoje']) && isset($_POST['apellRecoje']) && isset($_POST['cedulaRecoje'] )){

			$resultado = $registro->agregarRegistro($_POST);
		 switch ($resultado) {
		 	case 'error1':
		 		$control->cargarMensajesLogin("NO SE LOGRO GUARDAR EL REGISTRO","VistasConfig/formVendedor", $_SESSION['htmlUser']);
		 		break;

		 	case 'error2':
		 		$control->cargarMensajesLogin("NO ACEPTASTE LOS TERMINOS Y CONDICIONES, NO SE REALIARÀ EL REGISTRO", 'VistasConfig/formVendedor', $_SESSION['htmlUser']);
		 		break;

		 	case 'error3':
		 		$control->cargarMensajesLogin("YA SE ENCUENTRA REGISTRADO POR FAVOR PRESIONE EL BOTON DE YA ME ENCUENTRO REGISTRADO", 'VistasConfig/botonesVendedor', $_SESSION['htmlUser']);
		 		break;

		 	case 'error4':
		 		$control->cargarMensajesLogin("VALIDACION CAPTCHA NO VALIDA, POR FAVOR INTENTELO DE NUEVO", 'VistasConfig/botonesVendedor', $_SESSION['htmlUser']);
		 		break;
		 	case 'ok';
		 				 				 		
		 		$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/reservaVendedor', $_SESSION['htmlUser']);
		 		break;

		 	
		 	default:
		 	$control->cargarMensajesLogin("error desconocido", 'VistasConfig/botonesVendedor', $_SESSION['htmlUser']);
		 		break;

		 		
		 }
		 /*--------------CARGAR RESERVA -------------*/

		}elseif(isset($_POST['nomAlmacen']) && isset($_POST['cantReserva']) && isset($_SESSION['idUser']) && isset($_SESSION['dataUsuario'])){
			
			$resultado = $registro->crearReserva($_POST,$_SESSION);

			switch ($resultado) {
			 	case 'error1':
			 		$control->cargarMensajesLogin("NO SE LOGRO GUARDAR LA RESERVA","VistasConfig/reservaVendedor", $_SESSION['htmlUser'],'-');

			 		break;

			 	case 'ok':
			 		$control->cargarMensajesLogin("Felicitacion Reserva registrada Correctamente","VistasConfig/botonesVendedor",$_SESSION['htmlUser'], $_POST['html']);

			 		break;	
			 	case 'erro2':
			 		$control->cargarMensajesLogin("no se logro cargar el Almacen RESERVA FALLIDA ","VistasConfig/botonesVendedor", $_SESSION['htmlUser'],'-');
			 		
			 		break; 	
			 	case 'error3':
			 		$control->cargarMensajesLogin("no se logro cargar el USUARIO RESERVA FALLIDA","VistasConfig/botonesVendedor",  $_SESSION['htmlUser'],'-');
			 		
			 		break;
			 	case 'error4':
			 		$control->cargarMensajesLogin("no se logro cargar el id del Vendedor","VistasConfig/botonesVendedor", $_SESSION['htmlUser'],'-');
			 		break;
			 	case 'error5':
			 		$control->cargarMensajesLogin("Este Cliente queda registrado pero NO SE CREAN RESERVAS YA CERRARON para este producto","VistasConfig/botonesVendedor", $_SESSION['htmlUser'],'-');

			 		break;

			 	case 'error6':
			 		$control->cargarMensajesLogin("Este Cliente queda en lista de Espera","VistasConfig/botonesVendedor", $_SESSION['htmlUser'],'-');

			 		break;
			 	case 'error7':
			 		$control->cargarMensajesLogin("Cargo correctamente la Reserva, pero no se envio el correo","VistasConfig/botonesVendedor", $_SESSION['htmlUser'],'-');

			 		break;
			 	case 'error8':
			 		$control->cargarMensajesLogin("Cargo correctamente la Reserva, se envió el correo correctamente","VistasConfig/botonesVendedor", $_SESSION['htmlUser'],'-');

			 		break;

			 	default:
			 		
			 		$control->cargarMensajesLogin("NO SE LOGRO REALIZAR LA RESERVA ERROR DESCONOCIDO ","VistasConfig/botonesVendedor",  $_SESSION['htmlUser'],'-');
			 		
			 		break;
			 }


		 /*--------------Buscar Usuario Registrado -------------*/	

		}elseif(isset($_POST['numCedulaRegistrado'])){

		$resultado = $registro->traerUsuarioXCedula($_POST, $_SESSION);

			switch ($resultado) {
					case 'ok':

			 			$control->cargarMensajesLogin('VistasConfig/headerUser','VistasConfig/reservaVendedor', $_SESSION['htmlUser'],'-');
			 			break;
					case 'error1':
						$control->cargarMensajesLogin("Los campos no pueden estar vacios",'VistasConfig/botonesVendedor', $_SESSION['htmlUser'],'-');
						break;
					default:
						$control->cargarMensajesLogin($resultado,"VistasConfig/formVendedor", $_SESSION['htmlUser'],'-');
						break;
						
				}	

		 /*--------------CARGAR CIUDAD -------------*/				
		}elseif(isset($_POST['nombreCiudadBD'])){

			$result = $config->crearCiudad($_POST['nombreCiudadBD']);

			if ($result) {
				cargarMensajesLogin("Se cargo la Ciudad CORRECTAMENTE","VistasConfig/AddCiudades", $_SESSION['htmlUser'],'-');
			}else{
				cargarMensajesLogin("NO se cargo la Ciudad INTENTENLO DE NUEVO","VistasConfig/AddCiudades", $_SESSION['htmlUser'],'-');
			}
		 /*--------------CARGAR ALMACENES -------------*/	
		}elseif(isset($_POST['codAlmacenBD'])&&isset($_POST['nomAlmacenBD'])&&isset($_POST['ciudadAlmacenBD'])&&isset($_POST['dirAlmacenBD'])){

			$result = $config->crearAlmacenes($_POST);

			if ($result) {
				cargarMensajesLogin("Se cargo el Almacen CORRECTAMENTE","VistasConfig/AddAlmacenes", $_SESSION['htmlUser'],'-');
			}else{
				cargarMensajesLogin("NO cargo el Almacen INTENTELO DE NUEVO","VistasConfig/AddAlmacenes", $_SESSION['htmlUser'],'-');
			}
		}else{
			//var_dump($_POST);
			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/login');
			session_destroy();
		}

	

	}elseif(!empty($_GET['action'])){



		if($_GET['action'] == 'registroUsers'){
			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/registroUsers');
		}elseif(  $_GET['action'] == 'nuevo' ) {
			$control->cargarMensajesLogin('REGISTRE EL COMPRADOR LLENANDO TODOS LOS CAMPOS','VistasConfig/formVendedor',$_SESSION['htmlUser'],'-');	
		}elseif($_GET['action'] == 'registrado') {
		
			$control->cargarMensajesLogin('ESCRIBA EN NUMERO DE CEDULA SIN PUNTOS','VistasConfig/registradoVendedor',$_SESSION['htmlUser'],'-');	
		}elseif($_GET['action'] == 'addCiudad'){
			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/AddCiudades');
		}elseif($_GET['action'] == 'addAlmacen'){
			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/AddAlmacenes');
		}elseif($_GET['action'] == 'home'){
			if($_SESSION['idRoll'] == 1){
				$control->cargarMensajesLogin('Bienvenido Administrador','VistasConfig/vistaAdmon',$_SESSION['htmlUser'], '');

			}elseif($_SESSION['idRoll'] == 3){
				$control->cargarMensajesLogin('Bienvenido Supervisor','VistasConfig/vistaSuper',$_SESSION['htmlUser'], '');

			}else{
				$control->cargarMensajesLogin('Bienvenido','VistasConfig/botonesVendedor',$_SESSION['htmlUser'], '');
			}
			
			
		}elseif($_GET['action'] == 'salir'){
			session_destroy();
			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/login');
			
		}

	}elseif(!empty($_SESSION['idUser'])){
		$_SESSION['dataUsuario'] = null;
				$control->cargarMensajesLogin('Continua con tus reservas','VistasConfig/botonesVendedor');


	}else{

		$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/login');
		session_destroy();

	}


?>
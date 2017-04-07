<?php
	require_once 'app/Controlador/controladorVistas.php';
	require_once 'app/Controlador/controladorConfig.php';
	require_once 'app/Controlador/controladorReserva.php';		


	$control = new controladorVistas;
	$config = new ControladorConfig;
	$registro = new ControladorReserva;

	session_start();

	if(!empty($_POST)){
		/*----------LOGIN----------*/
		if(isset($_POST['txtusuario']) && isset($_POST['txtpassword'])){
			$resultado = $config->login($_POST);
			var_dump($resultado);

			//Verificar los roles
			if(is_int($resultado)){
				$_SESSION['idUser'] = $resultado;
				var_dump($_SESSION);

				$control->cargarMensajesLogin('Bienvenido','VistasConfig/botonesVendedor');


			}elseif(is_bool($resultado)){
				$control->cargarMensajesLogin('Escriba de nuevo sus datos','VistasConfig/login');

			}

			/*------REGISTRO DE USUARIO NUEVO--------*/
		}elseif(isset($_POST['txtNombreUser']) && isset($_POST['txtCedulaUser'])&&isset($_POST['txtCargoUser'])&&isset($_POST['txtCorreoUser'])&&isset($_POST['txtPassUser'])&&isset($_POST['txtPassUserConfirm'])){

				$resultado = $config->crearUserSystem($_POST);
				if (is_bool($resultado)) {
					if ($resultado) {
						$control->cargarMensajesLogin("USUARIO REGISTRADO CORRECTAMENTE", 'VistasConfig/login');

					}else{
						$control->cargarMensajesLogin("NO SE LOGRO EL REGISTRO CORRECTAMENTE CONTACTE AL ADMINISTRADOR", 'VistasConfig/login');

					}
				}else{
					$control->cargarMensajesLogin($resultado, 'VistasConfig/registroUsers');

				}

				/*----------FORMULARIO RESERVA-----------*/

		}elseif(isset($_POST['nomUsuario']) && isset($_POST['apellUsuario']) && isset($_POST['cedulaUsuario']) && isset($_POST['emailUsuario']) && isset($_POST['dirUsuario'])&& isset($_POST['nomCiudad']) && isset($_POST['telUsuario']) && isset($_POST['nombreRecoje']) && isset($_POST['apellRecoje']) && isset($_POST['cedulaRecoje'] )){

			$resultado = $registro->agregarRegistro($_POST);
		 switch ($resultado) {
		 	case 'error1':
		 		$control->cargarMensajesLogin("NO SE LOGRO GUARDAR EL REGISTRO","VistasConfig/formVendedor");
		 		break;

		 	case 'error2':
		 		$control->cargarMensajesLogin("NO ACEPTASTE LOS TERMINOS Y CONDICIONES, NO SE REALIARÀ EL REGISTRO", 'VistasConfig/formVendedor');
		 		break;

		 	case 'error3':
		 		$control->cargarMensajesLogin("YA SE ENCUENTRA REGISTRADO POR FAVOR PRESIONE EL BOTON DE YA ME ENCUENTRO REGISTRADO", 'VistasConfig/botonesVendedor');
		 		break;

		 	case 'error4':
		 		$control->cargarMensajesLogin("VALIDACION CAPTCHA NO VALIDA, POR FAVOR INTENTELO DE NUEVO", 'VistasConfig/botonesVendedor');
		 		break;
		 	case 'ok';
		 				 				 		
		 		$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/reservaVendedor');
		 		break;

		 	
		 	default:
		 	$control->cargarMensajesLogin("error desconocido", 'VistasConfig/botonesVendedor');
		 		break;

		 		
		 }
		 /*--------------CARGAR RESERVA -------------*/

		}elseif(isset($_POST['nomAlmacen']) && isset($_POST['cantReserva']) && isset($_SESSION['idUser']) && isset($_SESSION['dataUsuario'])){
			
			$resultado = $registro->crearReserva($_POST,$_SESSION);

			switch ($resultado) {
			 	case 'error1':
			 		$control->cargarMensajesLogin("NO SE LOGRO GUARDAR LA RESERVA","VistasConfig/reservaVendedor");
			 		break;

			 	case 'ok':
			 		$control->cargarMensajesLogin("Felicitacion Reserva registrada Correctamente","VistasConfig/botonesVendedor",$_POST['html']);
			 		break;	
			 	case 'erro2':
			 		$control->cargarMensajesLogin("no se logro cargar el Almacen RESERVA FALLIDA ","VistasConfig/botonesVendedor");
			 		
			 		break; 	
			 	case 'error3':
			 		$control->cargarMensajesLogin("no se logro cargar el USUARIO RESERVA FALLIDA","VistasConfig/botonesVendedor");
			 		
			 		break;
			 	case 'error4':
			 		$control->cargarMensajesLogin("no se logro cargar el id del Vendedor","VistasConfig/botonesVendedor");
			 		
			 		break;

			 	default:
			 		var_dump($resultado);
			 		$control->cargarMensajesLogin("NO SE LOGRO REALIZAR LA RESERVA ERROR DESCONOCIDO ","VistasConfig/botonesVendedor");
			 		
			 		break;
			 }


		 /*--------------Buscar Usuario Registrado -------------*/	

		}elseif(isset($_POST['numCedulaRegistrado'])&& isset($_POST['g-recaptcha-response'])){

		$resultado = $registro->traerUsuarioXCedula($_POST, $_SESSION);

		switch ($resultado) {
				case 'error1':
					$control->cargarMensajesLogin("NO SE ENCUENTRA REGISTRADO POR FAVOR REGISTRESE","VistasConfig/formVendedor");
					break;
				default:
					
					$_SESSION['dataUsuario'] = $resultado;
					var_dump($_SESSION);
		 			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/reservaVendedor');
		 			break;
			}	
		 /*--------------CARGAR CIUDAD -------------*/				
		}elseif(isset($_POST['nombreCiudad'])){

			$result = $config->crearCiudad($_POST['nombreCiudad']);

			if ($result) {
				cargarMensajesLogin("Se cargo la Ciudad ".$_POST['nombreCiudad']." CORRECTAMENTE","VistasConfig/AddCiudades");
			}else{
				cargarMensajesLogin("NO se cargo la Ciudad ".$_POST['nombreCiudad']." INTENTENLO DE NUEVO","VistasConfig/AddCiudades");
			}
		}else{
			var_dump("llego al final del if de los POST fallo");
		}

	

	}elseif(!empty($_GET['action']) && !empty($_SESSION['idUser'])){

		if($_GET['action'] == 'registrarUser'){
			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/registroUsers');
		}elseif(  $_GET['action'] == 'nuevo' ) {
			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/formVendedor');	
		}elseif($_GET['action'] == 'registrado') {
			var_dump($_SESSION);
			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/registradoVendedor');	
		}elseif($_GET['action'] == 'addCiudad'){
			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/AddCiudades');
		}elseif($_GET['action'] == 'addAlmacen'){
			$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/AddAlmacenes');
		}

	}elseif(!empty($_SESSION['idUser'])){
		$_SESSION['dataUsuario'] = null;
		var_dump($_SESSION);
		$control->cargarMensajesLogin('Continua con tus reservas','VistasConfig/botonesVendedor');


	}else{

		$control->cargarPrincipalConfig('VistasConfig/headerUser','VistasConfig/login');
		session_destroy();

	}


?>
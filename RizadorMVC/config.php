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

			//Verificar los roles
			if(is_int($resultado)){
				$_SESSION['idUser'] = $resultado['idUser'];
				$control->cargarPrincipalConfig('headerUser','VistasConfig/botonesVendedor');


			}elseif(is_bool($resultado)){
				$control->cargarPrincipalConfig('headerUser','VistasConfig/login');

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
		 	
		 	default:

		 		$_SESSION = $resultado;
		 				 		
		 		$control->cargarPrincipalConfig('VistasConfig/reservaVendedor');
		 		break;
		 }
		 /*--------------CARGAR RESERVA -------------*/

		}elseif(isset($_POST['nomAlmacen']) && isset($_POST['cantReserva']) && isset($_SESSION)){
			
			if(isset($_SESSION)){
				$resultado = $registro->crearReserva($_POST,$_SESSION);

			switch ($resultado) {
			 	case 'error1':
			 		$control->cargarMensajesLogin("NO SE LOGRO GUARDAR LA RESERVA","VistasConfig/reservaVendedor");
			 		break;

			 	case 'ok':
			 		$control->cargarMensajesLogin("Felicitacion Reserva registrada Correctamente","VistasConfig/botonesVendedor",$_POST['html']);
			 		session_destroy();
			 		break;		 	
			 	default:

			 		$control->cargarMensajesLogin("NO SE LOGRO REALIZAR LA RESERVA ERROR DESCONOCIDO ","VistasConfig/botonesVendedor");
			 		
			 		break;
			 }

			}else{
				//Error 
				var_dump("error de el array de usuario");
				
			}
		

		}elseif(isset($_POST['nombreCiudad'])){

			$result = $config->crearCiudad($nombreCiudad);

			if ($result) {
				cargarMensajesLogin("Se cargo la Ciudad ".$_POST['nombreCiudad']." CORRECTAMENTE","VistasConfig/AddCiudades");
			}else{
				cargarMensajesLogin("NO se cargo la Ciudad ".$_POST['nombreCiudad']." INTENTENLO DE NUEVO","VistasConfig/AddCiudades");
			}
		}
	

	}elseif(!empty($_GET['action'])){

		if($_GET['action'] == 'registrarUser'){
			$control->cargarPrincipalConfig('headerUser','VistasConfig/registroUsers');
		}elseif(  $_GET['action'] == 'nuevo' ) {	
			$control->cargarPrincipalConfig('headerUser','VistasConfig/formVendedor');	
		}elseif($_GET['action'] == 'registrado') {
			$control->cargarPrincipalConfig('headerUser','VistasConfig/registradoVendedor');	
		}elseif($_GET['action'] == 'addCiudad'){
			$control->cargarPrincipalConfig('headerUser','VistasConfig/AddCiudades');
		}elseif($_GET['action'] == 'addAlmacen'){
			$control->cargarPrincipalConfig('headerUser','VistasConfig/AddAlmacenes');
		}

	}else{

		$control->cargarPrincipalConfig('headerUser','VistasConfig/login');

	}


?>
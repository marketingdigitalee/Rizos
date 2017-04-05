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
				$control->cargarPrincipalConfig('headerUser','botonesVendedor');


			}elseif(is_bool($resultado)){
				$control->cargarPrincipalConfig('headerUser','login');

			}

			/*------REGISTRO DE USUARIO NUEVO--------*/
		}elseif(isset($_POST['txtNombreUser']) && isset($_POST['txtCedulaUser'])&&isset($_POST['txtCargoUser'])&&isset($_POST['txtCorreoUser'])&&isset($_POST['txtPassUser'])&&isset($_POST['txtPassUserConfirm'])){

				$resultado = $config->crearUserSystem($_POST);
				if (is_bool($resultado)) {
					if ($resultado) {
						$control->cargarMensajesLogin("USUARIO REGISTRADO CORRECTAMENTE", 'login');

					}else{
						$control->cargarMensajesLogin("NO SE LOGRO EL REGISTRO CORRECTAMENTE CONTACTE AL ADMINISTRADOR", 'login');

					}
				}else{
					$control->cargarMensajesLogin($resultado, 'registroUsers');

				}

				/*----------FORMULARIO RESERVA-----------*/

		}elseif(isset($_POST['nomUsuario']) && isset($_POST['apellUsuario']) && isset($_POST['cedulaUsuario']) && isset($_POST['emailUsuario']) && isset($_POST['dirUsuario'])&& isset($_POST['nomCiudad']) && isset($_POST['telUsuario']) && isset($_POST['nombreRecoje']) && isset($_POST['apellRecoje']) && isset($_POST['cedulaRecoje'] )){

			$resultado = $registro->agregarRegistro($_POST);
		 switch ($resultado) {
		 	case 'error1':
		 		$control->cargarMensajesLogin("NO SE LOGRO GUARDAR EL REGISTRO","formVendedor");
		 		break;

		 	case 'error2':
		 		$control->cargarMensajesLogin("NO ACEPTASTE LOS TERMINOS Y CONDICIONES, NO SE REALIARÀ EL REGISTRO", 'formVendedor');
		 		break;

		 	case 'error3':
		 		$control->cargarMensajesLogin("YA SE ENCUENTRA REGISTRADO POR FAVOR PRESIONE EL BOTON DE YA ME ENCUENTRO REGISTRADO", 'botonesVendedor');
		 		break;

		 	case 'error4':
		 		$control->cargarMensajesLogin("VALIDACION CAPTCHA NO VALIDA, POR FAVOR INTENTELO DE NUEVO", 'botonesVendedor');
		 		break;
		 	
		 	default:

		 		$_SESSION = $resultado;
		 				 		
		 		$control->cargarPrincipalConfig('reservaVendedor');
		 		break;
		 }
		 /*--------------CARGAR RESERVA -------------*/

		}elseif(isset($_POST['nomAlmacen']) && isset($_POST['cantReserva']) && isset($_SESSION)){
			
		if(isset($_SESSION)){
			$resultado = $registro->crearReserva($_POST,$_SESSION);

		switch ($resultado) {
		 	case 'error1':
		 		$control->cargarMensajesLogin("NO SE LOGRO GUARDAR LA RESERVA","reserva");
		 		break;

		 	case 'ok':
		 		$control->cargarMensajesLogin("Felicitacion Reserva registrada Correctamente","botones",$_POST['html']);
		 		session_destroy();
		 		break;		 	
		 	default:

		 		$control->cargarMensajesLogin("NO SE LOGRO REALIZAR LA RESERVA ERROR DESCONOCIDO ","botones");
		 		
		 		break;
		 }

		}else{
			//Error 
			var_dump("error de el array de usuario");
			
		}
		

	}


	}elseif(!empty($_GET['action'])){

		if($_GET['action'] == 'registrarUser'){
			$control->cargarPrincipalConfig('headerUser','registroUsers');
		}elseif(  $_GET['action'] == 'nuevo' ) {	
			$control->cargarPrincipalConfig('headerUser','formVendedor');	
		}elseif($_GET['action'] == 'registrado') {
			$control->cargarPrincipalConfig('headerUser','registradoVendedor');	
		}

	}else{

		$control->cargarPrincipalConfig('headerUser','login');

	}


?>
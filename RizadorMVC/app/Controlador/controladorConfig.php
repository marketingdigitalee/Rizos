<?php
require_once 'app/Modelo/UserSystemDAO.class.php';
require_once 'app/Modelo/LogEventosDAO.class.php';
require_once 'app/Modelo/funciones.php';
require_once 'app/Modelo/CiudadDAO.class.php';
require_once 'app/Controlador/controladorVistas.php';



class ControladorConfig{

	function login($POST){
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

		$resultPass = $funciones->encriptar($POST['txtpassword']);
		
		$arreglo['user'] = $POST['txtusuario'];
		$arreglo['pass'] = $resultPass;

		$array = $userSystem->existeUsuario($arreglo);
		var_dump($arreglo);
		
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
						
					}
				}
				
			}

			

			$numeroRegistros = $userSystem->consultarVentas($idUser);
			foreach ($numeroRegistros as $key) {
				foreach ($key as $key2 => $value2) {
					$valor = $value2;
				}
				
			}
			
			var_dump($numeroRegistros);
			var_dump($valor);

			$htmlUser = $controlVistas->crearDataUser($nombreUser,$cedulaUser,$cargoUser,$correoUser,$valor);

			$logEventos->CrearLog('Registro Exitoso',$idUser);

			$_SESSION['idUser'] = (int) $idUser;
			$_SESSION['htmlUser'] = $htmlUser;

			$result = 'ok';

		}else{

			$result = 'error1';
		}
		
		return $result;
	}

	function crearUserSystem($POST){

		$userSystem = new UserSystemDAO;
		$logEventos = new LogEventosDAO;
		$funciones = new Funciones;
		$result = null;
		
		if($POST['txtPassUser'] == $POST['txtPassUserConfirm']){

			$password = $funciones->encriptar($POST['txtPassUser']);

			$arreglo['nomUser'] = $POST['txtNombreUser'];
			$arreglo['cedulaUser'] = $POST['txtCedulaUser'];
			$arreglo['cargoUser'] = $POST['txtCargoUser'];
			$arreglo['emailUser'] = $POST['txtCorreoUser'];
			$arreglo['passUser'] = $password;

			$respuesta = $userSystem->crearUserSystemDAO($arreglo);

			$result = $respuesta;

		}else{
			$result = "La contraseña no corresponde";
		}


		return $result;
	}

	function crearCiudad($nombreCiudad){

		$modCiudad = new CiudadDAO;

		$arrayCiudad['nombreCiudad'] = $nombreCiudad;

		$resultado = $modCiudad->crearCiudad($arrayCiudad);

		return $resultado;
	}

}
?>
<?php
require_once 'app/Modelo/UserSystemDAO.class.php';
require_once 'app/Modelo/LogEventosDAO.class.php';
require_once 'app/Modelo/funciones.php';
require_once 'app/Modelo/CiudadDAO.class.php';



class ControladorConfig{

	function login($POST){
		$userSystem = new UserSystemDAO;
		$logEventos = new LogEventosDAO;
		$funciones = new Funciones;
		$result = null;

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
						break;
					}
				}
				
			}


			$logEventos->CrearLog('Registro Exitoso',$idUser);

			$result = (int) $idUser;

		}else{

			$result = false;
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
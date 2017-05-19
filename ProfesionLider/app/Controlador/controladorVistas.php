<?php

class controladorVistas{
  
/*----------------------FUNCIONES PAGINA INDEX  ------------*/

	function load_template(){
		

		

		$eventos =$this->load_page('app/Vistas/secciones/eventos.php');

		$premio = $this->load_page('app/Vistas/secciones/premio.php');	
		$encu = $this->load_page('app/Vistas/secciones/encuentro.php');

		$eventos = $this->replace_content('/\#PREMIO\#/ms' ,$premio , $eventos);
		$eventos = $this->replace_content('/\#ENCUENTRO#/ms' ,$encu , $eventos);


		$pagina = $this->load_page('app/Vistas/page.php');	
		$header = $this->load_page('app/Vistas/secciones/header.php');
		$home = $this->load_page('app/Vistas/secciones/home.php');
		//$noticias = $this->load_page('app/Vistas/secciones/noticias.php');
		$videos = $this->load_page('app/Vistas/secciones/videos.php');
		
		$sostenibilidad = $this->load_page('app/Vistas/secciones/sostenibilidad.php');
		$fasciculos = $this->load_page('app/Vistas/secciones/fasciculos.php');
		$footer = $this->load_page('app/Vistas/secciones/footer.php');
	

		$pagina = $this->replace_content('/\#HEADER\#/ms' ,$header , $pagina);
		$pagina = $this->replace_content('/\#HOME#/ms' ,$home , $pagina);
		//$pagina = $this->replace_content('/\#NOTICIAS#/ms' ,$noticias , $pagina);
		$pagina = $this->replace_content('/\#VIDEOS\#/ms' ,$videos , $pagina);
		$pagina = $this->replace_content('/\#EVENTOS\#/ms' ,$eventos , $pagina);
		$pagina = $this->replace_content('/\#SOSTENIBILIDAD\#/ms' ,$sostenibilidad , $pagina);
		$pagina = $this->replace_content('/\#FASCICULOS\#/ms', $fasciculos , $pagina);
		$pagina = $this->replace_content('/\#FOOTER\#/ms' ,$footer , $pagina);


		return $pagina;
	}



	function cargarPrincipal($pagina){

			$ppal = $this->load_template();
			$url = 'app/Vistas/secciones/'.$pagina.'.php';
			$reserva = $this->load_page($url);
			$ppal = $this->replace_content('/\#NOTICIAS\#/ms' ,$reserva , $ppal);
			$this->view_page($ppal);
	}

/*------------------------------FUNCIONES PARA CREAR HTML DE LAS VISTAS -----------*/
	 private function load_page($page){
	 	return file_get_contents($page);
	 }

	 function view_page($html){
	  echo $html;
	 }

	 private function replace_content($in, $out,$pagina) {
	   return preg_replace($in, $out, $pagina);
	 }



/*----------------------------------------TODO EL CONFIG------------------------------*/
	 function load_config(){
	 	if(isset($_SESSION['idRoll'])){
	 		if ($_SESSION['idRoll'] == '1') {
				$pagina = $this->load_page('app/Vistas/configure.php');
				$nav = $this->load_page('app/Vistas/secciones/VistasConfig/navAdmin.php');
				$pagina = $this->replace_content('/\#NAVUSER\#/ms' ,$nav , $pagina);
				
			}elseif($_SESSION['idRoll'] == '2'){
				$pagina = $this->load_page('app/Vistas/configure.php');
				$nav = $this->load_page('app/Vistas/secciones/VistasConfig/navVendedor.php');
				$pagina = $this->replace_content('/\#NAVUSER\#/ms' ,$nav , $pagina);

			}else{
				$pagina = $this->load_page('app/Vistas/configure.php');
				$nav = $this->load_page('app/Vistas/secciones/VistasConfig/navVendedor.php');
				$pagina = $this->replace_content('/\#NAVUSER\#/ms' ,$nav , $pagina);

			}

	 	}else{
	 		$pagina = $this->load_page('app/Vistas/configure.php');
				$nav = $this->load_page('app/Vistas/secciones/VistasConfig/navLogin.php');
				$pagina = $this->replace_content('/\#NAVUSER\#/ms' ,$nav , $pagina);

	 	}
			
				

			return $pagina;
	}

	function cargarPrincipalConfig($header,$pagina){
		$ppal = $this->load_config();
		$urlHeader = 'app/Vistas/secciones/'.$header.'.php';
		$url = 'app/Vistas/secciones/'.$pagina.'.php';
		
		$headerPage = $this->load_page($urlHeader);
		$cuerpo = $this->load_page($url);

		$ppal = $this->replace_content('/\#HEADERUSER\#/ms' ,$headerPage , $ppal);
		$ppal = $this->replace_content('/\#CONTENIDOUSER#/ms' ,$cuerpo , $ppal);

		$this->view_page($ppal);

	}

	function cargarMensajesLogin($mensaje, $VistaRespuesta, $htmlUsuario=null,$htmlRespuesta=null){
		if (!is_null($htmlUsuario) && !is_null($htmlRespuesta)) {
			
				$ppal = $this->load_config();
				$pagMensaje = $this->load_page('app/Vistas/secciones/VistasConfig/mensajesLogin.php');
				$contenido = $this->load_page('app/Vistas/secciones/'.$VistaRespuesta.'.php');
				$html1 = $this->load_page('app/Vistas/secciones/VistasConfig/CargaHTMLUser.php');
				$html2 = $this->load_page('app/Vistas/secciones/VistasConfig/CargaHTMLUser.php');


				$html1 = $this->replace_content('/\#CONTENIDOHTMLUSER\#/ms' ,$htmlUsuario , $html1);
				$html2 = $this->replace_content('/\#CONTENIDOHTMLUSER\#/ms' ,$htmlRespuesta , $html2);

				$pagMensaje = $this->replace_content('/\#MENSAJE\#/ms' ,$mensaje , $pagMensaje);
				$pagMensaje = $this->replace_content('/\#CONTENIDO1\#/ms' ,$html1 , $pagMensaje);
				$pagMensaje = $this->replace_content('/\#CONTENIDO2\#/ms' ,$html2 , $pagMensaje);

				$ppal = $this->replace_content('/\#HEADERUSER\#/ms' ,$pagMensaje , $ppal);
				$ppal = $this->replace_content('/\#CONTENIDOUSER#/ms' ,$contenido , $ppal);
				
				$this->view_page($ppal);

			
		}else{
			$ppal = $this->load_config();
			$pagMensaje = $this->load_page('app/Vistas/secciones/mensaje.php');
			$contenido = $this->load_page('app/Vistas/secciones/'.$VistaRespuesta.'.php');
			
			$pagMensaje = $this->replace_content('/\#MENSAJE\#/ms' ,$mensaje , $pagMensaje);
			$pagMensaje = $this->replace_content('/\#CONTENIDO\#/ms' ,$contenido , $pagMensaje);	



			$ppal = $this->replace_content('/\#HEADERUSER\#/ms' ," - " , $ppal);
			$ppal = $this->replace_content('/\#CONTENIDOUSER#/ms' ,$pagMensaje , $ppal);

			$this->view_page($ppal);
		}
			
	}

	function crearDataUser($nombreUser,$cedulaUser,$cargoUser,$correoUser,$numeroRegistros){

		$html = $this->load_page('app/Vistas/secciones/VistasConfig/htmlUserData.php');
		$html = $this->replace_content('/\#nombreUser\#/ms' ,$nombreUser , $html);
		$html = $this->replace_content('/\#cedulaUser\#/ms' ,$cedulaUser , $html);
		$html = $this->replace_content('/\#cargoUser\#/ms' ,$cargoUser , $html);
		$html = $this->replace_content('/\#correoUser\#/ms' ,$correoUser , $html);
		$html = $this->replace_content('/\#numeroRegistros\#/ms' ,$numeroRegistros , $html);
		

		return $html;

	}

}

?>

<?php

class controladorVistas{
  
/*----------------------FUNCIONES PAGINA INDEX  ------------*/

	function load_template(){
		

		$pagina = $this->load_page('app/Vistas/page.php');		

		$header = $this->load_page('app/Vistas/secciones/header.php');
		$home = $this->load_page('app/Vistas/secciones/home.php');
		$faq = $this->load_page('app/Vistas/secciones/faq.php');
		$puntos =$this->load_page('app/Vistas/secciones/puntos.php');
		$instructivo = $this->load_page('app/Vistas/secciones/instructivo.php');
		$campTV = $this->load_page('app/Vistas/secciones/campTV.php');
		$footer = $this->load_page('app/Vistas/secciones/footer.php');


		$pagina = $this->replace_content('/\#HEADER\#/ms' ,$header , $pagina);
		$pagina = $this->replace_content('/\#HOME#/ms' ,$home , $pagina);
		$pagina = $this->replace_content('/\#FAQ\#/ms' ,$faq , $pagina);
		$pagina = $this->replace_content('/\#PUNTOS\#/ms' ,$puntos , $pagina);
		$pagina = $this->replace_content('/\#INSTRUCTIVO\#/ms' ,$instructivo , $pagina);
		$pagina = $this->replace_content('/\#CAMPTV\#/ms' ,$campTV , $pagina);
		$pagina = $this->replace_content('/\#FOOTER\#/ms' ,$footer , $pagina);

		return $pagina;
	}



	function cargarPrincipal($pagina){

			$ppal = $this->load_template();
			$url = 'app/Vistas/secciones/'.$pagina.'.php';
			$reserva = $this->load_page($url);
			$ppal = $this->replace_content('/\#RESERVA\#/ms' ,$reserva , $ppal);
			$this->view_page($ppal);
	}

	function cargarMensajesReserva($mensaje, $VistaRespuesta,$html=null){
		if (!is_null($html)) {
			$ppal = $this->load_template();
			$pagMensaje = $this->load_page('app/Vistas/secciones/mensaje.php');
			$contenido = $this->load_page('app/Vistas/secciones/'.$VistaRespuesta.'.php');
			$htmlPage = $this->load_page('app/Vistas/secciones/cargarHTML.php');

			$htmlPage = $this->replace_content('/\#HTML\#/ms' ,$html , $htmlPage);
			$htmlPage = $this->replace_content('/\#CONTENDIDO\#/ms' ,$contenido , $htmlPage);

			$pagMensaje = $this->replace_content('/\#MENSAJE\#/ms' ,$mensaje , $pagMensaje);
			$pagMensaje = $this->replace_content('/\#CONTENIDO\#/ms' ,$htmlPage , $pagMensaje);
			$ppal = $this->replace_content('/\#RESERVA\#/ms' ,$pagMensaje , $ppal);

			$this->view_page($ppal);

		}else{
			$ppal = $this->load_template();
			$pagMensaje = $this->load_page('app/Vistas/secciones/mensaje.php');
			$contenido = $this->load_page('app/Vistas/secciones/'.$VistaRespuesta.'.php');
			$pagMensaje = $this->replace_content('/\#MENSAJE\#/ms' ,$mensaje , $pagMensaje);
			$pagMensaje = $this->replace_content('/\#CONTENIDO\#/ms' ,$contenido , $pagMensaje);
			$ppal = $this->replace_content('/\#RESERVA\#/ms' ,$pagMensaje , $ppal);

			$this->view_page($ppal);

		}
		
	}

function crearMensajeHtml($nombreMail,$nomAlmacen,$ciudadAlmacen,$cantidad,$fechaRedencion,$codReserva, $mailUsuario){

	$html = $this->load_page('app/Vistas/secciones/htmlMail.php');
	$html = $this->replace_content('/\#nombreMail\#/ms' ,$nombreMail , $html);
	$html = $this->replace_content('/\#nomAlmacen\#/ms' ,$nomAlmacen , $html);
	$html = $this->replace_content('/\#ciudadAlmacen\#/ms' ,$ciudadAlmacen , $html);
	$html = $this->replace_content('/\#cantidad\#/ms' ,$cantidad , $html);
	$html = $this->replace_content('/\#fechaRedencion\#/ms' ,$fechaRedencion , $html);
	$html = $this->replace_content('/\#codReserva\#/ms' ,$codReserva , $html);
	$html = $this->replace_content('/\#mailUsuario\#/ms' ,$mailUsuario , $html);

	return $html;
}
/*------------------------------FUNCIONES PARA CREAR HTML DE LAS VISTAS -----------*/
 private function load_page($page){
 	return file_get_contents($page);
 }
/* METODO QUE ESCRIBE EL CODIGO PARA QUE SEA VISTO POR EL USUARIO
 INPUT
 $html | codigo html
 OUTPUT
 HTML | codigo html 
 */
 function view_page($html){
  echo $html;
 }

  /* PARSEA LA PAGINA CON LOS NUEVOS DATOS ANTES DE MOSTRARLA AL USUARIO
 INPUT
 $out | es el codigo html con el que sera reemplazada la etiqueta CONTENIDO
 $pagina | es el codigo html de la pagina que contiene la etiqueta CONTENIDO
 OUTPUT
 HTML | cuando realiza el reemplazo devuelve el codigo completo de la pagina
 */
 private function replace_content($in, $out,$pagina) {
   return preg_replace($in, $out, $pagina);
 }



/*----------------------------------------TODO EL CONFIG------------------------------*/
 function load_config(){
		
		$pagina = $this->load_page('app/Vistas/configure.php');		

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

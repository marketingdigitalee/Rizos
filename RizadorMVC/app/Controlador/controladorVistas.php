<?php

class controladorVistas{
  
	/* METODO QUE CARGA LAS PARTES PRINCIPALES DE LA PAGINA WEB
	INPUT
		$title | titulo en string del header
	OUTPIT
		$pagina | string que contiene toda el cocigo HTML de la plantilla 
	*/
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


 /* METODO QUE CARGA UNA PAGINA DE LA SECCION VIEW Y LA MANTIENE EN MEMORIA
 INPUT
$pantalla debe enviarse el nombre del archivo .php que se quiere mostrar en la secccion RESERVAS
 */

	function cargarPrincipal($pagina){

			$ppal = $this->load_template();
			$url = 'app/Vistas/secciones/'.$pagina.'.php';
			$reserva = $this->load_page($url);
			$ppal = $this->replace_content('/\#RESERVA\#/ms' ,$reserva , $ppal);
			$this->view_page($ppal);
	}
/*
METODO PARA CARGAR LOS MENSAJES DE ERROR 
SE DEBE ENVIAR MENSAJE Y LA SECION QUE VA AFECTAR Y EL NOMBRE DE LA VISTA QUE QUIERE MOSTRAR
*/
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
			$pagMensaje = $this->load_page('app/Vistas/secciones/mensaje.php');
			$contenido = $this->load_page('app/Vistas/secciones/'.$VistaRespuesta.'.php');
			$html1 = $this->load_page('app/Vistas/secciones/VistasConfig/CargarHTMLUser.php');
			$html2 = $this->load_page('app/Vistas/secciones/VistasConfig/CargarHTMLUser.php');


			$html1 = $this->replace_content('/\#CONTENIDOHTMLUSER\#/ms' ,$htmlUsuario , $html1);
			$html2 = $this->replace_content('/\#CONTENIDOHTMLUSER\#/ms' ,$htmlRespuesta , $html2);

			$pagMensaje = $this->replace_content('/\#MENSAJE\#/ms' ,$mensaje , $pagMensaje);
			$pagMensaje = $this->replace_content('/\#CONTENIDO\#/ms' ,$html2 , $pagMensaje);

			$ppal = $this->replace_content('/\#HEADERUSER\#/ms' ,$html1, , $ppal);
			$ppal = $this->replace_content('/\#CONTENIDOUSER#/ms' ,$pagMensaje , $ppal);
			
			$this->view_page($ppal);

		
	}else{
		$ppal = $this->load_config();
		$pagMensaje = $this->load_page('app/Vistas/secciones/mensaje.php');
		$contenido = $this->load_page('app/Vistas/secciones/'.$VistaRespuesta.'.php');
		
		$pagMensaje = $this->replace_content('/\#MENSAJE\#/ms' ,$mensaje, , $pagMensaje);
		$pagMensaje = $this->replace_content('/\#CONTENIDO\#/ms' ,$contenido, , $pagMensaje);	



		$ppal = $this->replace_content('/\#HEADERUSER\#/ms' ,"", , $ppal);
		$ppal = $this->replace_content('/\#CONTENIDOUSER#/ms' ,$pagMensaje , $ppal);

		$this->view_page($ppal);
	}
		
}

function crearDataUser($nombreMail,$nomAlmacen,$ciudadAlmacen,$cantidad,$fechaRedencion,$codReserva, $mailUsuario){

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

}

?>

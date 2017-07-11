<?php
require_once 'app/Controlador/controlVistas.php';

$contolVistas = new controladorVistas();


if(!empty($_GET)){
	$pagina = null;
	if(!empty($_GET['pag'])){
		switch ($_GET['pag']) {
			case '1':
				$pagina = '';
				break;
			case '2':

				break;
			default:
				
				break;
		}
	}
	
	$contolVistas->cargarPag($pagina);
}else{

	$contolVistas->cargarPag(null);
}





?>

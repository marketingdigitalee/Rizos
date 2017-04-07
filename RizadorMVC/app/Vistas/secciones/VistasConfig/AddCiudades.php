
<?php
require_once 'app/Model/CiudadDAO.class.php';
require_once 'app/Controlador/controladorVistas.php';

$codigoHTML=.'

<div>
<h3>Creacion de Ciudades</h3>
	<div class="login-page">
	<div class="form">
		<form action="config.php?action=addCiudad"  method="post">
			<input type="text" placeholder="Escriba la ciudad" name ="nombreCiudadBD">
			<input type="submit" value="Guardar">

		</form>
	</div>
	</div>
</div>

<div>
<table>
			<tr>
				<td>Reporte de la tabla Usuario</td>
			</tr>
			<tr>
				<td>Id Ciudad</td>
				<td>Nombre Ciudad</td>
			</tr>'



	$ciudadDAO = new CiudadDAO;
	$contolVista = new controladorVistas;

	$arreglo = $ciudadDAO->traerCiudades();
	foreach ($arreglo as $key => $value) {
	
$codigoHTM.= '
			 <tr>	
			 	<td>'.$key['idCiudad'].'</td>
			 	<td>'.$key['nombreCiudad'].'</td>
			 </tr>';
	} 



$codigoHTM.='
</table>
</div>'

$codigoHTML=utf8_encode($codigoHTML);

return $contolVista->view_page($codigoHTML);
?>
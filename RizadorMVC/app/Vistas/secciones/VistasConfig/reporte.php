<?php
	require_once 'app/Model/BD.class.php';
	require_once 'app/Controlador/libreria/Report/dompdf_config.inc.php';

$codigoHTML = '
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar Ciudades</title>
</head>
<body>
	<div>
		<h3>Creacion de Ciudades</h3>
		<form action="AddCiudades.php">
			<input type="text" placeholder="Escriba la ciudad" name ="nombreCiudad">
			<input type="submit" value="Guardar">

		</form>
	</div>
	<div>
		<table>
			<tr>
				<td>Reporte de la tabla Usuario</td>
			</tr>
			<tr>
				<td>Id Ciudad</td>
				<td>Nombre Ciudad</td>
			</tr>';

			$bd = new BD;
			$bd->conectar();
			$sql = "SELECT "
			$arreglo = $bd->consultaSQL($sql);

			foreach ($arreglo as $key => $value) {
				$codigoHTML.='
			 <tr>	
			 	<td>'.$key['idCiudad'].'</td>
			 	<td>'.$key['nombreCiudad'].'</td>
			 </tr>';
			 } 
$codigoHTML.='
		</table>

	</div>
</body>
</html>';

$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_tabla_usuarios.pdf");


<select name="nomAlmacen" >';
<?php								
$mysqli = new mysqli('localhost', 'root', 'usuario$1', 'rizador');				
$query = $mysqli -> query ("SELECT * FROM Almacenes");
															
while ($valores = mysqli_fetch_array($query)) {
															
	echo '<option value="'.$valores['codAlmacen'].'">'.$valores['nomAlmacen'].'</option>';
																			
}
?>
</select>
<label for="idAlmacen">Seleccione el almacen</label>
					  			
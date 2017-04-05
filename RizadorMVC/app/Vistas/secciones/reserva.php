
<form action="index.php#ReservaYA" method="post">
<div class="">
	<div class="">
		<select id="almacenSelect" name="nomAlmacen" >
		
		</select>
	<label for="idAlmacen">Seleccione el almacen</label>
	</div>
	<div class="">
		<select name="cantReserva" >
			<option value="1">1</option> 
		   	<option value="2">2</option> 
		   	<option value="3">3</option>
		   	<option value="4">4</option> 
		   	<option value="5">5</option> 
		   	<option value="6">6</option>
		   	<option value="7">7</option>
		   	<option value="8">8</option> 
		   	<option value="9">9</option> 
		   	<option value="10">10</option>  
										
		</select>
	<label for="telUsuario">Cantidad</label>
	</div>
																													
</div>
<input type="submit" value="Realizar Reserva">
</form>
<script>
    (function CargarALmacenes(){
    $.ajax({

                            type: "POST",
                            url: "app/Controlador/traerAlmacenws.php",
                            success: function(response)
                            {
                                $('#almacenSelect').empty();
                                $('#almacenSelect').html(response).fadeIn();
                            }
                    });
    })();
</script>



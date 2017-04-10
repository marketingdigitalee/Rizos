<div class="login-page">
	<div class="form">
		<form action="index.php#ReservaYA" method="post">

			<div class="select-style">
				<label for="idAlmacen">Seleccione el almacen</label>
				<select id="almacenSelect" name="nomAlmacen" >
				
				</select>
			</div>
			<div class="select-style">
				<label for="telUsuario">Cantidad</label>
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
			
			</div>
																															

		<input type="submit" value="Realizar Reserva">
		</form>
	</div>
</div>

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



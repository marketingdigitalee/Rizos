<div class="login-page">
	<div class="form">

	<form action='config.php' method="post">
			<label for="idAlmacen">Seleccione el almacen</label>
			<div class="select-style">
			
				<select id="almacenSelect" name="nomAlmacen" >
				
				</select>
			
			</div>
			<label for="telUsuario">Cantidad</label>
			<div class="select-style">
			
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
			<button>
				<input type="submit" value="Realizar Reserva">
			</button>
		
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
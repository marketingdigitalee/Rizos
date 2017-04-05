<div class="container">
		<h3 class="centrarTexto">FORMULARIO RESERVA</h3>
  		<p class=""> Aqui algun teaser... </p>
	
					
				  <!-- Contact Form -->
				<form action="config.php" method="post">
						<div class="">
								<div class="">
					  				<input type="text" name="nomUsuario" required="true">
					  				<label for="nombres">Nombres</label>
					  			</div>
								<div class="">
					  				<input type="text" name="apellUsuario" required="true">
					  				<label for="apellUsuario">Apellidos</label>
					  			</div>
								<div class="" >
					  				<input type="text" name="cedulaUsuario" required="true">
					  				<label for="cedulaUsuario">C&eacute;dula</label>
					  			</div>
					  			<div class="">
					  				<input type="email" name="emailUsuario" required="true">
					  				<label for="emailUsuario">Correo electr&oacute;nico</label>
					  			</div>
								<div class="">
					  				<input type="text" name="dirUsuario" required="true">
					  				<label for="dirUsuario">Direcci&oacute;n f&iacute;sica</label>
					  			</div>
								<div class="">
									<select name="nomCiudad" >
										<option value="1">Bogotá</option> 
									   	<option value="2">Cali</option> 
									   	<option value="3">Medellin</option>
									   	<option value="10">Bucaramga</option> 
									   	<option value="11">Cartagena</option> 
									   	<option value="12">Barranquilla</option> 
										
									</select>
					  				<label for="nomCiudad">Ciudad</label>
					  			</div>
								<div class="">
					  				<input type="text" name="telUsuario">
					  				<label for="telUsuario">Celular</label>
								</div>
								<div class="">
					  				<input type="text" name="nombreRecoje">
					  				<label for="nomRecoje">Nombre de la persona que recoje el producto</label>
								</div>
								<div class="">
					  				<input type="text" name="apellRecoje">
					  				<label for="apellRecoje">Apellidos de la persona que recoje el producto</label>
								</div>
								<div class="">
					  				<input type="text" name="cedulaRecoje">
					  				<label for="cedulaRecoje">Nùmero de cedula de quien recoje el producto</label>
								</div>																								
					</div>

				  	<div class="input-field personales">
								<label for="habeas" style="color:#000;float:right;top: 0rem;left: 2rem;">Acepto Políticas de Privacidad y Manejo de Información <a href="#">Ver más >></a></label>
					  <input type="checkbox" name="habeas" value="ok" checked>
					</div>
							<div style="margin-top:30px;">
								<div class="g-recaptcha" data-sitekey="6Le4_RoUAAAAAP5OXRli6RN6jndLkCaqTITTNqGL">
								</div>
								<input type="submit" value="RESERVAR">
								
							</div>
				</form>
</div>				


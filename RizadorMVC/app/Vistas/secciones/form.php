	<div class="containerFormulario">
		<h3 class="centrarTexto">FORMULARIO RESERVA</h3>
  		<p class="textoform"> Por favor diligencia tus datos personales para realizar el proceso de registro </p>
	
	<div class="login-page">
		<div class="form">
				  <!-- Contact Form -->
				<form action="index.php#ReservaYA" method="post">

					 <input type="text" name="nomUsuario" required="true" placeholder="Nombre" >
					<input type="text" name="apellUsuario" placeholder="Apellidos" required="true">
					<input type="text" name="cedulaUsuario" placeholder="Cédula" required="true" onkeyup="var no_digito = /\D/g; this.value = this.value.replace(no_digito , '');">
					<input type="email" name="emailUsuario" placeholder="Correo Electrónico" required="true">
					<input type="text" name="dirUsuario" placeholder="Dirección físcia" required="true">
					<label for="nomCiudad">Ciudad</label>
					<div class="select-style">
						<select name="nomCiudad" id="selectCiudad">
										
								
						</select>
					</div>
					<input name="telUsuario" maxlength="7"  onkeyup="var no_digito = /\D/g; this.value = this.value.replace(no_digito , '');" type="text" placeholder="Telefono fijo" >
					<input type="text" placeholder="Telefono Celular" maxlength="10" name="celUsuario" required="true" onkeyup="var no_digito = /\D/g; this.value = this.value.replace(no_digito , '');">
					<input type="text" name="nombreRecoje" placeholder="Nombre de la persona que recoje el producto">
					<input type="text" name="apellRecoje" placeholder="Apellidos de la persona que recoje el producto">
					<input type="text" name="cedulaRecoje" placeholder="Nùmero de cedula de quien recoje el producto">
																														

		 	<div class="input-field personales">
					<label id="terminosycondiciones" for="habeas" >Acepto Políticas de Privacidad y Manejo de Información <a id="inline" href="#data">Ver más</a></label>
					  <input type="checkbox" name="habeas" value="ok" checked>

					  <div style="display:none">
					  	<div id="data">
						Autorizo a Comunican S.A. y  ALMACENES ÉXITO S.A., a recolectar, almacenar, depurar, usar, analizar, circular, actualizar y cruzar con información propia o de terceros, mis datos de contacto, información sobre preferencias de consumo, comportamiento en los canales de contacto, con la finalidad de: (i) gestionar tareas de administración, (ii) que me sean otorgados los beneficios comerciales de cada una de ellas, filiales, subsidiarias, así como de sus anunciantes, aliados estratégicos y proveedores, (iii) realizar estudios estratégicos, así como que me sean otorgados los beneficios comerciales de clientes, entre otros, (iv) transmisión y transferencia internacional de datos; y (v) realizar actividades de mercadeo de sus productos y servicios, y de los productos y servicios de sus filiales y/o aliados comerciales, autorizando la recepción de información por cualquier medio conocido o por conocer, sobre suscripciones, promociones, novedades, productos y servicios relacionados con los eventos y productos editoriales editados y/o comercializados por  Almacenes Éxito S.A.,  Comunican S.A. (El Espectador) y sus aliados estratégicos. He sido informado de que mis datos personales se almacenarán de manera segura, habiéndose tomado las medidas de precaución para protegerlos contra uso o acceso no autorizado. Me ha sido informado además que el responsable del tratamiento de datos será Comunican S.A. y como encargado de dicho tratamiento Comunican S.A. y/o terceros proveedores de servicios contratados directamente por Comunican S.A. que podrán realizar servicios en nombre de Comunican S.A., tales como: tratamiento de la información, envío de correos electrónicos, e-marketing, limpieza de bases de datos y determinación y preferencias de consumo. Comunican S.A. y los terceros proveedores de servicios deberán tratar la información personal dentro del ámbito y para los fines comprendidos en la autorización que he otorgado, de acuerdo con lo previsto en la Ley 1581 de 2012, Decreto 1377 de 2013 y demás decretos reglamentarios y las normas que los modifiquen sobre protección de datos personales, y conforme con la Política de Privacidad publicada en www.elespectador.com, donde encontraré además los datos de las personas jurídicas  que realicen tratamiento de datos. En cualquier momento podré ejercer los derechos establecidos en estas normas y particularmente para conocer, actualizar, rectificar, suprimir y revocar la autorización prestada o solicitar la supresión de mis datos personales, escribiendo directamente a Comunican S.A. al correo electrónico databasemarketing@elespectador-cromos.com o por escrito a la calle 103 N° 69B-43 Torre 5 en Bogotá, atención Señores Inteligencia de Mercados, señalando el asunto “Tratamiento de Datos Personales” e indicando mis datos de contacto para recibir una respuesta a más tardar dentro de los 10 días hábiles siguientes a su recepción, prorrogables por otros 5 días más, previa justificación del incidente.
					  	</div>
					  </div>
			</div>
			<div id="contentCaptcha">
				<div  class="g-recaptcha" data-sitekey="6Le4_RoUAAAAAP5OXRli6RN6jndLkCaqTITTNqGL"></div>
			</div>
			<input type="submit" value="RESERVAR">
		</form>
		</div>
	</div>	
</div>				

<script>
    (function CargarCiudades(){
    $.ajax({

                            type: "POST",
                            url: "app/Controlador/traerCiudadws.php",
                            success: function(response)
                            {
                                $('#selectCiudad').empty();
                                $('#selectCiudad').html(response).fadeIn();
                            }
                    });
    })();
</script>


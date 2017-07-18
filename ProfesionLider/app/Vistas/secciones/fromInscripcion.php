<form action="index.php" method="post" name="sky-form" id="sky-form" class="sky-form sky-form-modal" >
	<input id="idDescarga" type="hidden" name="idDescarga" value="">
<fieldset>

	<div align="center" style="color: #fff; width: 91%; margin: auto;margin-top:8px;">
		<div class="row" style="margin:auto;width: 90%;">
			<div align="center" style="color: #000; width: 100%; margin: auto;font-size: 12px;font-weight: 300;;margin-top:5px; margin-bottom:15px;">Si ya te encuentras registrado solamente ingresa tu n&uacute;mero de c&eacute;dula y continua descargando material exclusivo
			</div>
			<section class="col col-9">
		    	<label class="input">
					<i class="icon-append fa fa-credit-card"></i>
					<input type="text" name="doccedula" id="doccedula" placeholder="Cédula">
					<b class="tooltip tooltip-bottom-right">Num. documento, Sin comas ni puntos</b>
				</label>
			</section>
			<section class="col col-2" style="margin:auto;padding-left: 0px;">
				<input type="submit" class="button" value="CONSULTAR" style="float:none;margin:auto;">	
			</section>

		</div>
	</div>

</fieldset>
<fieldset style="overflow-y: scroll; overflow-x: hidden; height: 350px; width:auto;">
	<div class="row">
		<section class="col col-11">
			<div align="center" style="color: #000; width: 100%; margin: auto;font-size: 12px;font-weight: 300;;margin-top:0px; margin-bottom:15px; "> Si ingresas por primera vez, solo debes digitar tus datos personales, e inmediatamente tendrás acceso al contenido gratuito
			</div>
			<label class="input">
				<i class="icon-append fa fa-user"></i>
				<input type="text" name="nom_Persona" placeholder="Nombres">
				<b class="tooltip tooltip-bottom-right">Escriba solo sus nombres</b>
			</label>
		</section>
	</div>
		<div class="row">
		<section class="col col-11">
			<label class="input">
				<i class="icon-append fa fa-user"></i>
				<input type="text" name="apell_Persona" placeholder="Apellidos">
				<b class="tooltip tooltip-bottom-right">Escriba solo sus apellidos</b>
			</label>
		</section>
	</div>
	<div class="row">
		<section class="col col-11">
			<label class="input">
				<i class="icon-append fa fa-envelope-o"></i>
				<input type="email" name="correo_Persona" placeholder="Correo electrónico">
				<b class="tooltip tooltip-bottom-right">Correo electrónico</b>
			</label>
		</section>
	</div>
		<div class="row">
			<section class="col col-11">
				<label class="select">
					<select name="genero_Persona">
					<option value="Masculino">Masculino</option>
					<option value="Femenino">Femenino</option>
					</select>
				</label>
			</section>
		</div>
	<div class="row">
		<section class="col col-11">
			<label class="input">
				<i class="icon-append fa fa-credit-card"></i>
				<input type="text" name="cedula_Persona" placeholder="Cédula">
				<b class="tooltip tooltip-bottom-right">Num. documento, Sin comas ni puntos</b>
			</label>
		</section>
	</div>
	<div class="row">
		<section class="col col-11">
			<label class="input">
				<i class="icon-append fa fa-mobile-phone"></i>
				<input type="text" name="tel_Persona" placeholder="Numero Celular">
				<b class="tooltip tooltip-bottom-right">Numero Celular</b>
			</label>
		</section>
	</div>
	<div class="row">
		<section class="col col-11">
			<label class="input">
				<i class="icon-append fa fa-globe"></i>
				<input type="text" name="emp_Persona" placeholder="Empresa">
				<b class="tooltip tooltip-bottom-right">Empresa</b>
			</label>
		</section>
	</div>
	<div class="row">
		<section class="col col-11">
			<label class=""><input type="checkbox" name="acepto_Persona" checked><i></i><span style="color:#000;font-size:12px;">Acepto Pol&iacute;ticas de Privacidad y Manejo de Informaci&oacute;n <a href="#overlay" class="modal-opener">Ver m&aacute;s >></a></span></label>
		</section>
	</div>				
</fieldset>
<footer>
	<input type="hidden" name="numForm" id="numForm" value="1">
	<a href="#" class="button button-secondary modal-closer" style="margin-top:0px;">Cerrar</a>
	<button type="submit" class="button" style="float:none;margin:auto;">ENVIAR</button>
	<div class="progress"></div>
	<div class="row">
		<section class="col col-12"><label class="input state-error"></label>
		</section>
	</div>
</footer>				
<div class="message" style="height: 200px;">
	<i class="icon-ok"></i>
	<p>GRACIAS!<br><div align="center"><button  class="button" onClick="location.href='index.php'" >Volver</button></div></p>
</div>
</form>

<div class="sky-form sky-form-modal" id="overlay" style="background: #fff;color:#000;">
	<div id="habeas-data-content" style="overflow-y: scroll; overflow-x: hidden; height: 450px; ">
            <style type="text/css">
                #habeas-data-content { text-align: left; padding: 50px !important; font-family: Arial, Helvetica, sans-serif; font-size: 13px; }
                #habeas-data-content p, #habeas-data-content li { margin-bottom: 18px; line-height: 18px; }
                #habeas-data-content ol { list-style-type: lower-roman; }
                #habeas-data-content .logos { text-align: center; }

            </style>
            <p class="P1">
            	<span class="T1">
            	* Autorizo a Comunican S.A., Inversiones Cromos S.A.S., Caracol Televisión S.A., a sus filiales y subsidiarias, así como a sus aliados estratégicos a recolectar, almacenar, depurar, usar, analizar, circular, actualizar y cruzar con información propia o de terceros, mis datos personales tales como: nombres y apellidos, género, documento de identidad, fecha de nacimiento, empresa, cargo, país, ciudad, teléfono, celular, dirección, barrio, correo electrónico, dirección I.P., perfil profesional y educativo, así como mi información sobre preferencias de consumo y gustos personales, con la finalidad de que los mismos sean utilizados para: (i) gestionar tareas de administración , (ii) que me sean otorgados los beneficios comerciales de cada una de ellas, filiales, subsidiarias, así como de sus anunciantes, aliados estratégicos y proveedores, (iii) realizar estudios estadísticos de marketing, segmentación de mercados, nivel satisfacción de cliente entre otros, (iv) realizar actividades de mercadeo de sus productos y servicios, y de los productos y servicios de sus filiales y/o aliados comerciales, autorizando la recepción de información por cualquier medio conocido o por conocer, sobre suscripciones, promociones, novedades, productos y servicios relacionados con los eventos y productos editoriales editados y/o comercializados por Comunican S.A. (El Espectador), Inversiones Cromos S.A.S., Caracol Televisión S.A. y sus aliados estratégicos. (v) Transferencia internacional de datos. He sido informado que mis datos personales se almacenarán de manera segura, habiéndose tomado las medidas de precaución para protegerla contra uso o acceso no autorizado. Me ha sido informado además, que el responsable del tratamiento de datos será Comunican S.A. y como encargados de dicho tratamiento (terceros proveedores de servicios contratados directamente por Comunican S.A.) las personas jurídicas Experian Colombia S.A. y otras compañías e individuos que podrán realizar servicios en nombre de Comunican S.A., tales como: tratamiento de la información, envío de correos electrónicos, e-marketing, limpieza de bases de datos y determinación de preferencias de consumo. Comunican S.A. y los terceros proveedores de servicios deberán tratar la información personal dentro del ámbito y para los fines comprendidos en la autorización que he otorgado, de acuerdo con lo previsto en la Ley 1581 de 2012, Decreto 1377 de 2013 y demás decretos reglamentarios y las normas que los modifiquen sobre protección de datos personales, y conforme con la Política de Privacidad publicada en www.elespectador.com, donde encontraré además los datos de identificación de Experian Colombia S.A. y las demás compañías con las que se realice tratamiento de datos. En cualquier momento podré ejercer los derechos establecidos en estas normas y particularmente para conocer, actualizar, rectificar, suprimir y revocar la autorización prestada o solicitar la supresión de mis datos personales, escribiendo directamente a Comunican S.A. al correo electrónico databasemarketing@elespectador-cromos.com o por escrito a la Calle 103 N° 69B-43 Torre 5 en Bogotá, atención Señores Inteligencia de Mercados, señalando el asunto "Tratamiento de Datos Personales" indicando mis datos de contacto para recibir una respuesta a más tardar dentro de los 10 días hábiles siguientes a su recepción, prorrogables por otros 5 días más, previa justificación del incidente. Quien suscribe el presente documento, AUTORIZO expresamente a COMUNICAN S.A., e INVERSIONES CROMOS S.A.S., empresas propietarias y editoras del periódico El Espectador y las Revistas CROMOS y VEA, el derecho a utilizar mi imagen contenida en el retrato tomado en la presente actividad, estando facultadas estas empresas editoriales para reproducir, distribuir y comunicar públicamente la misma en cualquier medio impreso o digital, incluidas cualesquiera de las redes sociales.
            	</span>
            </p>
        </div>
		  <footer>
				<a href="#" class="button button-secondary modal-closer">Cerrar</a>
			</footer>
</div>
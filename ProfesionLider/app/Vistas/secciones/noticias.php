	
<div class="Titulo">
	<img src="img/banners-03.jpg" alt="">
</div>
		<div class="divContenedorNoticias">
			<article class="Noticia">
				<img src="img/AdrianaSuarez.jpg" alt="" class="imgNoti">
				<div class="descripNoti">
					<h1 class="h1noti">Cuando enfrentarse a los miedos se convierte en un estilo de liderar</h1>
					<p class="pnoti"> Adriana Suárez, directora ejecutiva de Fundación Edeavor, habla de cómo un líder debe retarse constantemente</p>
					
				</div>
				<a href="http://www.elespectador.com/economia/cuando-enfrentarse-los-miedos-se-convierte-en-un-estilo-de-liderar-articulo-697209" target="_blank">
					<button type="button" class="css3button">VER MÁS</button>
				</a>
			</article>	
			<article class="Noticia">
				<img src="img/Sandra_Forero_Camacol.jpg" alt="Sandra Forero" class="imgNoti">
				<div class="descripNoti">
					<h1 class="h1noti">"Hay que Construir equipos en donde todos opinen" </h1>
					<p class="pnoti">Esa es la política de Sandra Forero, Presidenta de Camacol, con la que ha logrado llevar en alto la bandera del éxito profesionaly personal.</p>
				</div>
				<a href="http://www.elespectador.com/economia/hay-que-construir-equipos-en-donde-todos-opinen-presidenta-de-camacol-articulo-696168" target="_blank">
					<button type="button"  class="css3button">VER MÁS</button>
				</a>
			</article>
			<article class="Noticia">
				<img src="img/ana_maria_uribe.jpg" alt="" class="imgNoti">
				<div class="descripNoti">
					<h1 class="h1noti"> “Liderar es valorar el trabajo de la gente”: jefa de Servicio al Consumidor de la SIC</h1>
					<p class="pnoti"> Esa es la visión de Ana María Uribe, jefa de Servicio al Consumidor y Apoyo al Empresario de la Superintendencia de Industria y Comercio.</p>
				</div>
				<a href=" http://www.elespectador.com/economia/liderar-es-valorar-el-trabajo-de-la-gente-jefa-de-servicio-al-consumidor-de-la-sic-articulo-695147" target="_blank">
					<button type="button" class="css3button">VER MÁS</button>
				</a>				
			</article>
	
			
			
		</div>
		<div class="divContenedorNoticias">
			<article class="Noticia">
				<img src="img/AnaKarina.jpg" alt="" class="imgNoti">
				<div class="descripNoti">
					<h1 class="h1noti">“Hay que tener una política de puertas, mente y corazón abiertos”.</h1>
					<p class="pnoti"> Así describe su modelo de liderazgo Ana Karina Quessep, la directora ejecutiva de la Asociación Colombiana de Contact Center &amp; BPO, que le aporta 250.000 empleados a la economía.</p>
					
				</div>
				<a href="http://www.elespectador.com/economia/hay-que-tener-una-politica-de-puertas-mente-y-corazon-abiertos-articulo-694096" target="_blank">
					<button type="button" class="css3button">VER MÁS</button>
				</a>
			</article>	
			<article class="Noticia">
				<img src="img/astrid_a.jpg" alt="Astrid Àlvarez" class="imgNoti">
				<div class="descripNoti">
					<h1 class="h1noti">La mujer que lidera el Grupo de Energía de Bogotá</h1>
					<p class="pnoti">Astrid Álvarez Hernández ha pasado por Ecopetrol y el Acueducto de Bogotá. Ahora, al frente del mayor conglomerado energético del país, habla de cómo el éxito es el tiempo compartido entre la profesión y la familia junto con la conciencia social.</p>
				</div>
				<a href="http://www.elespectador.com/economia/la-mujer-que-lidera-el-grupo-de-energia-de-bogota-articulo-693018" target="_blank">
					<button type="button"  class="css3button">VER MÁS</button>
				</a>
			</article>
			<article class="Noticia">
				<img src="img/Anato.jpg" alt="" class="imgNoti">
				<div class="descripNoti">
					<h1 class="h1noti">“El poder es para ayudar, no para sobrepasarse”: presidenta de Anato.</h1>
					<p class="pnoti">Paula Cortés, cabeza del gremio de las agencias de viaje de Colombia, habla de cómo las mujeres han venido ganando protagonismo en altas posiciones de liderazgo en el país. </p>
				</div>
				<a href="http://www.elespectador.com/economia/el-poder-es-para-ayudar-no-para-sobrepasarse-presidenta-de-anato-articulo-691985" target="_blank">
					<button type="button" class="css3button">VER MÁS</button>
				</a>				
			</article>
			
		</div>
<script>
(function CargarNoticias(){
    $.ajax({
		type: "POST",
    	url: "app/Controlador/traerNoticiasws.php",
    	success: function(response){
	            $('#notiContendido').empty();
	            $('#notiContendido').html(response).fadeIn();
        	}
    });
});
</script>	

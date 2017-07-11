<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Revista VEA - Las mas Sexis</title>
</head>
<style>
@font-face {
	font-family: "Stag-BoldItalic_0.otf";
	src: url(fonts/Stag-BoldItalic_0.otf) format('opentype');
}
@font-face {
	font-family: "Stag-Light_2.otf";
	src: url(fonts/Stag-Light_2.otf) format('opentype');
}
@font-face {
	font-family: "Knockout-HTF68-FullFeatherwt.otf";
	src: url(fonts/Knockout-HTF68-FullFeatherwt.otf) format('opentype');
}
@font-face {
	font-family: "Stag-Medium_2.otf";
	src: url(fonts/Stag-Medium_2.otf) format('opentype');
}
	body{
		margin: 0px auto;
		background-color: #00969D;
	}

	#contenedor{
		width: 100%;
		height: auto;
		text-align: center;
		position: relative;
		margin-top: 50px;

	}
	#Der{
		width: 50%;
		float: left;
	}
	#Der #portada{
		margin: 0px auto;
		width: 450px;
		height: 525px;

	}
	#Der #portada img{
		width: 100%;
	}
	#Izq{
		margin-top: 100px;
		width: 50%;
		float: left;
		height: 500px;
	}
	#Izq #logo img{
		width: 430px;
	}
	#Izq #texto{
		padding-top: 55px;
		width: 60%;
		height: auto;
		margin: 0px auto;
		}
	#texto #copy1{
		text-align: center;
		font-family: "Stag-Light_2.otf";
		color:white;
	}
	#texto #copy2{
		text-align: center;
		font-family: "Stag-BoldItalic_0.otf";
		color:white;
		font-size: 19px;
	}
	 #redes{
	 	padding-top: 60px;
		width: 60%;
		height: 50px;
		overflow: hidden;
		margin: 5px auto

	}

	 #redes .redesBox{
		width: 38px;
		height: 38px;
	}
	 #redes .redesBox:hover{
		opacity: 0.7;
	}

</style>
<body>
	<div id="contenedor">
		<div id="Izq">
			<div id="logo">
				<img src="img/logo_vea.png" alt="">
			</div>
			<div id="texto">
				<p id="copy1">La Revista Vea te trae a las más sexis de Colombia. Muy pronto podrás ver el detrás de cámaras en las paradisíacas playas del Caribe.</p>
				<p id="copy2">Consigue la nueva edición en tu punto de venta más cercano. ¡Seguro te encantarán!</p>
			</div>
			 <div id="redes">
		    	<a href="https://www.instagram.com/larevistavea/" target="_blank"><img class="redesBox" src="img/insta.png" alt=""></a>
		    	<a href="https://www.facebook.com/RevistaVEA"><img class="redesBox" src="img/face.png" alt=""></a>
		    	<a href="https://twitter.com/larevistavea"><img class="redesBox"  src="img/twitter.png" alt=""></a>     
		    </div>
		</div>
		<div id="Der">
			<div id="portada">
				<img src="img/portada_lanz.png" alt="">
			</div>
		</div>
		
		
	</div>
</body>
</html>
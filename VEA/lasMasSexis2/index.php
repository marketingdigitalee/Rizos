<!DOCTYPE html>
<html>
<head>
<title>Revista VEA- Las + sexis</title>

<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/cssFancybox/jquery.fancybox.css">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>


<script src="js/plugins/jquery.fancybox.js"></script>	
</head>

<body>
<?php include_once("analyticstracking.php") ?>
 <div id="preload">
		<p id="porcentajeCarga"> 0% </p>
		<div id="fondoCarga"></div>
		<div id="rellenoCarga"></div>
		<div id="estado"></div>
</div>
<div class="contenedor">
	<header>
    <img id="logo" src="img/logo_vea.png" alt="">
    <div id="redes">
    	<a href="https://www.instagram.com/larevistavea/" target="_blank"><img class="redesBox" src="img/insta.png" alt=""></a>
    	<a href="https://www.facebook.com/RevistaVEA"><img class="redesBox" src="img/face.png" alt=""></a>
    	<a href="https://twitter.com/larevistavea"><img class="redesBox"  src="img/twitter.png" alt=""></a>     
    </div>
    <a href="/beneficios/index.html" target="_blank">
    	<img id="portada" src="img/portada_cd.png" alt="CD Silvestre">
    </a>
    
    
  </header>
  <section id="video">
    <iframe id="videoPrincipal" width="1028" height="578" src="https://www.youtube.com/embed/6EVRq4lN_fA" frameborder="0" allowfullscreen></iframe>
  </section>
    <section id="videoMovil">
    <iframe id="videoPrincipal" width="359" height="200" src="https://www.youtube.com/embed/6EVRq4lN_fA" frameborder="0" allowfullscreen></iframe>
  </section>
  <section id="portada">
    <img src="img/port_medio.jpg" alt="">
  </section>
	<section id="groupVideo">

	<?php
	require_once("config.php");
	$posts=$db->query("select * from VeaModelos order by id desc");
	?>
		<article class="boxVideo">
	    	<div class="imgVideo" style="background-image: url(img/foto_modelos/1_CarolinaGaitan.jpg);">
		      	<ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/xZdF__Yuoq8">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
	        </div>
	      	<ul class="votos">
				<li class="voting_btn up_button" data-voto="likes" data-id="1">
					<!-- <span id="likeSpan"><?php echo $filas["likes"]; ?></span> -->
				</li>
				<li class="voting_btn dw_button" data-voto="love" data-id="1">
					<!-- <span><?php echo $filas["love"]; ?></span> -->
				</li>
			</ul>
	    </article>
	    <article class="boxVideo">
	      <div class="imgVideo" style="background-image: url(img/foto_modelos/2_JohannaFadul.jpg);">
	        <ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/s7BeRQQ9-kg">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
	      </div>
	      	<ul class="votos">
				<li class="voting_btn up_button" data-voto="likes" data-id="2">
					<!-- <span><?php echo $filas["likes"]; ?></span> -->
				</li>
				<li class="voting_btn dw_button" data-voto="love" data-id="2">
					<!-- <span><?php echo $filas["love"]; ?></span> -->
				</li>
			</ul>
	    </article>
	    <article class="boxVideo">
	      <div class="imgVideo" style="background-image: url(img/foto_modelos/3_LauraLondono.jpg);">
	        <ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/N0lWo6tnJNs">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
	      </div>
	      	<ul class="votos">
				<li class="voting_btn up_button" data-voto="likes" data-id="3">
									</li>
				<li class="voting_btn dw_button" data-voto="love" data-id="3">
					
				</li>
			</ul>
	    </article>
	    <div id="contentVideo2">
		    <article class="boxVideo">
		      <div class="imgVideo" style="background-image: url(img/foto_modelos/4_JohannaCure.jpg);">
				<ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/ejcdmAtq7RY">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
		      </div>
		      	<ul class="votos">
					<li class="voting_btn up_button" data-voto="likes" data-id="4">
						
					</li>
					<li class="voting_btn dw_button" data-voto="love" data-id="4">
						
					</li>
				</ul>
		    </article>
		    <article class="boxVideo">
		      <div class="imgVideo" style="background-image: url(img/foto_modelos/5_AnaBelizaMercado.jpg);">
		       	<ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/Qi6rloisOYQ">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
		      </div>
		      	<ul class="votos">
					<li class="voting_btn up_button" data-voto="likes" data-id="5">
						
					</li>
					<li class="voting_btn dw_button" data-voto="love" data-id="5">
						
					</li>
				</ul>
		    </article>
		    <article class="boxVideo">
		      <div class="imgVideo" style="background-image: url(img/foto_modelos/6_KarenCarreno.jpg);">
				<ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/pBvPITYjL98">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
		      </div>
		      	<ul class="votos">
					<li class="voting_btn up_button" data-voto="likes" data-id="6">
						
					</li>
					<li class="voting_btn dw_button" data-voto="love" data-id="6">
						
					</li>
				</ul>
		    </article>
		    <article class="boxVideo">
		      <div class="imgVideo" style="background-image: url(img/foto_modelos/7_MariaNelaSinisterra.jpg);">
				<ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/b7W5Qnqu3k0">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
		      </div>
		      	<ul class="votos">
					<li class="voting_btn up_button" data-voto="likes" data-id="7">
						
					</li>
					<li class="voting_btn dw_button" data-voto="love" data-id="7">
						
					</li>
				</ul>
		    </article>
	    </div>
	    <div id="contentBanner">
      		<img src="img/banner2.jpg" alt="">
    	</div>
    	<article class="boxVideo">
		    <div class="imgVideo" style="background-image: url(img/foto_modelos/8_SusyMora.jpg);">
				<ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/qM_1ZMzaNno">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
		      </div>
		      	<ul class="votos">
					<li class="voting_btn up_button" data-voto="likes" data-id="8">
						
					</li>
					<li class="voting_btn dw_button" data-voto="love" data-id="8">
						
					</li>
				</ul>
		</article>
		<article class="boxVideo">
		    <div class="imgVideo" style="background-image: url(img/foto_modelos/9_CarolinaSepulveda.jpg);">
				<ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/CKgiK5QhYx4">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
		      </div>
		      	<ul class="votos">
					<li class="voting_btn up_button" data-voto="likes" data-id="9">
						
					</li>
					<li class="voting_btn dw_button" data-voto="love" data-id="9">
						
					</li>
				</ul>
		</article>
		<article class="boxVideo">
		    <div class="imgVideo" style="background-image: url(img/foto_modelos/10_MabelMoreno.jpg);">
				<ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/uY8jmxvgbrU">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
		      </div>
		      	<ul class="votos">
					<li class="voting_btn up_button" data-voto="likes" data-id="10">
						
					</li>
					<li class="voting_btn dw_button" data-voto="love" data-id="10">
						
					</li>
				</ul>
		</article>
		<article class="boxVideo">
		<div class="imgVideo" style="background-image: url(img/Pieza300x250.jpg);"></div>
			
		</article>
    	<article class="boxVideo">
		    <div class="imgVideo" style="background-image: url(img/foto_modelos/11_JenniferArenas.jpg);">
				<ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/6SS8urIZJYo">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
		      </div>
		      	<ul class="votos">
					<li class="voting_btn up_button" data-voto="likes" data-id="11">
						<!-- <span><?php echo $filas["likes"]; ?></span> -->
					</li>
					<li class="voting_btn dw_button" data-voto="love" data-id="11">
						<!-- <span><?php echo $filas["love"]; ?></span> -->
					</li>
				</ul>
		</article>
		<article class="boxVideo">
		    <div class="imgVideo" style="background-image: url(img/foto_modelos/12_NicoleSantamaria.jpg);">
				<ul id="video2">
					<li>
						<a data-fancybox-type="iframe" href="https://www.youtube.com/embed/su1BSbhf4uY"">
							<img class="play" src="img/play.png" alt="">
						</a>
					</li>
				</ul>
		      </div>
		      	<ul class="votos">
					<li class="voting_btn up_button" data-voto="likes" data-id="12">
						
					</li>
					<li class="voting_btn dw_button" data-voto="love" data-id="12">
						
					</li>
				</ul>
		</article>		

	</section>
	<section id="contentSuscrip">
	    <div id="Revistas">
	      <img src="img/portadas.png" alt="">
	    </div>
	    <div id="Suscripcion">
	      <div id="suscUp"> 
	        <a class="btn" href="http://suscripciones.elespectador.com/" target="_blank">SUSCRÍBETE</a>
	      </div>
	      <div id="suscDown">
	        <img id="logo" src="img/logo_vea_old.png" alt="">
	        <div id="redesFooter">
		        <a href="https://www.instagram.com/larevistavea/" target="_blank"><img class="redesBox" src="img/insta.png" alt=""></a>
		    	<a href="https://www.facebook.com/RevistaVEA"><img class="redesBox" src="img/face.png" alt=""></a>
		    	<a href="https://twitter.com/larevistavea"><img class="redesBox"  src="img/twitter.png" alt=""></a>     
	        </div>
	      </div>
	    </div>
	</section>	

</div>

<script type="text/javascript" src="js/code.js"></script>

</body>
</html>

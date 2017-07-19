<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Profesión Líder</title>
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel="stylesheet" href="css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script> window.jQuery || document.write('<script src="booklet/jquery-2.1.0.min.js"><\/script>') </script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="js/plugins/booklet/jquery.easing.1.3.js"></script>
<script src="js/plugins/booklet/jquery.booklet.latest.min.js"></script>

<!-- FANCYBOX -->
  <script type="text/javascript" src="js/plugins/jquery.fancybox.js"></script>
  <link rel="stylesheet" href="css/cssFancybox/jquery.fancybox.css" type="text/css" media="screen" />

  <!--  SLIDER -->
  <script type="text/javascript" src="js/plugins/owl/owl.carousel.js"></script>
  <link rel="stylesheet" type="text/css" href="css/owl/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl/owl.theme.default.min.css">

   <!--  LIBRO -->
<link href="js/plugins/booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
<script type="text/javascript" src="js/plugins/booklet/jquery.booklet.latest.js"></script>

   <!-- POPUP -->
<link href="css/modal/sky-forms.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
<script type="text/javascript" src="js/plugins/modal/jquery.modal.js"></script>


</head>
<body id="body1">
  <div id="redesSociales">
    <a class="redes" href="https://www.facebook.com/profesionlider/?ref=bookmarks" target="_blank">
      <img src="img/face.png" alt="">
    </a>
    <a class="redes" href="https://twitter.com/ProfesionLider" target="_blank">
      <img src="img/twitter.png" alt="">
    </a>
    <a class="redes" href="https://www.linkedin.com/in/profesi%C3%B3n-l%C3%ADder-85175913a/" target="_blank">
      <img src="img/in.png" alt="">
    </a>  
  </div>

  <header>
    #HEADER#  
  </header>
  <div id="contenedor">
    <section id="Cabecera" >
      #HOME#       
    </section>
    <section id="Noticias">
      #NOTICIAS#
    </section>
    <section id="Videos">
      #VIDEOS# 
    </section>
    <section id="Eventos">
      #EVENTOS#
    </section>
    <section id="Sostenibilidad" >
      #SOSTENIBILIDAD#
    </section>
    <section id="Fasciculos" >
      #FASCICULOS#
    </section>
    <section>
      #FORMULARIO#
    </section>
    <section id="Footer">
      #FOOTER#
    </section>
  </div>
      
  <script src="js/code.js"></script>
  <script type="text/javascript">
    
function LimpiarForm(){
    var form = document.getElementById("#sky-form").getElementsByTagName("input");
    for (var i=0; i<form.length; i++) {
        form[i].value = "";
        }
}

function Alerta($mensaje){
    var mensaje = confirm($mensaje);
    if(mensaje){
        e.preventDefault();
        $("html, body").animate({scrollTop: $('#sky-form').offset().top }, 1000);
    }
}
  </script>
</body>
</html>


<div class="Titulo">
	<img src="img/banners-03.jpg" alt="">
</div>
<div id="noticiasContenedor" class="divContenedorNoticias" >

			
</div>

<script>
(function CargarNoticias(){
    $.ajax({

		type: "POST",
    	url: "app/Controlador/traerNoticiasws.php",
    	success: function(response){
            $('#noticiasContenedor').empty();
            $('#noticiasContenedor').html(response).fadeIn();
        }
    });
});
</script>		
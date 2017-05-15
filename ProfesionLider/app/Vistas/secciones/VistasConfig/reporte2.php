<div id="tablaReporte2">
	
</div>
<script>
    (function CargarReporte1(){
    $.ajax({

                            type: "POST",
                            url: "app/Controlador/traerReporte2ws.php",
                            success: function(response)
                            {
                                $('#tablaReporte2').empty();
                                $('#tablaReporte2').html(response).fadeIn();
                            }
                    });
    })();
</script>

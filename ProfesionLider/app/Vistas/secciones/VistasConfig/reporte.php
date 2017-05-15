<div id="tablaReporte1">
	
</div>
<script>
    (function CargarReporte1(){
    $.ajax({

                            type: "POST",
                            url: "app/Controlador/traerReporte1ws.php",
                            success: function(response)
                            {
                                $('#tablaReporte1').empty();
                                $('#tablaReporte1').html(response).fadeIn();
                            }
                    });
    })();
</script>

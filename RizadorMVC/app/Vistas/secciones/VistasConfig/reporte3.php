<div id="tablaReporte3" class="tablaReporte3">
	
</div>
<script>
    (function CargarReporte1(){
    $.ajax({

                            type: "POST",
                            url: "app/Controlador/traerReporte3ws.php",
                            success: function(response)
                            {
                                $('#tablaReporte3').empty();
                                $('#tablaReporte3').html(response).fadeIn();
                            }
                    });
    })();
</script>
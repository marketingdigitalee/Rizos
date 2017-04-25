<div>
	

</div>

<script>
    (function CargarReporte1(){
    $.ajax({

                            type: "POST",
                            url: "app/Controlador/traerAlmacenws.php",
                            success: function(response)
                            {
                                $('#almacenSelect').empty();
                                $('#almacenSelect').html(response).fadeIn();
                            }
                    });
    })();
</script>

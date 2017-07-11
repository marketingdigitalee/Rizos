$(window).load(function(){
	$("#preload").delay(350).fadeOut("slow");
	$('body').delay(360).css({"overflow-y":"scroll"});
});

var cargarObj = $("img");
var porcionPorcentaje = 0;
numCarga = 0;

for (var i = 0; i < cargarObj.length; i++) {
	$(cargarObj[i]).load(function(){
		numCarga++;
		porcionPorcentaje = 100 / cargarObj.length;
		$("#porcentajeCarga").html(parseInt(porcionPorcentaje * numCarga) + "%")
		$("#rellenoCarga").css({"width": porcionPorcentaje * numCarga + "%"})
		});
	}

$(document).ready(function() 
{
	$(".votos .voting_btn").click(function (e) 
	{
	 	e.preventDefault();
		var voto_hecho = $(this).data('voto');
		var id = $(this).data("id"); 
		var li = $(this);
		
		if(voto_hecho && id)
		{
			$.post('ajax_voto.php', {'id':id, 'voto':voto_hecho}, function(data) 
			{
				if (data!="voto_duplicado") 
				{
					li.addClass(voto_hecho+"_votado").find("span").text(data);
					li.closest("ul").append("<span class='votado'>Gracias!</span>");
				}
				else li.closest("ul").append("<span class='votado'>Intentalo nuevamente en 1 hora</span>");
			});
			setTimeout(function() {$('.votado').fadeOut('fast');}, 3000);
		}
	});

	$("#video2 li a").fancybox();
	$("a#inline").fancybox();


});


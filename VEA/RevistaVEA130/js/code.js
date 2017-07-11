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


$("#beneficios").hover(
	function(){
		$(this).attr("src","img/hover_beneficios.png");
	},
	function(){
		$(this).attr("src","img/beneficios.jpg");
	}

);

$("#imgRevistasSuscrip").hover(
	function(){
		$(this).attr("src","img/hover_portadas.png");
	},
	function(){
		$(this).attr("src","img/portadas.png");
	}

);

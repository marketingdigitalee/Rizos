$(document).ready(function(){
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 50 ){
			$('header').addClass('cabecera');
			$('#imgLogo').attr("src","img/logo_horiz.png");
		} else {
			$('header').removeClass('cabecera');
			$('#imgLogo').attr("src","img/olam.png");
		}
	});
 
});

  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
$(".flex-direction-nav").click(function(){
  $('iframe').attr('src', $('iframe').attr('src'));
});

$('btnGalery').click(function(){
  var galeria = this.find("#galeryContent");
  galeria.css("display:block");
});
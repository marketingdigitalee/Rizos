// Accordian Action
var action = 'click';
var speed = "500";

$(document).ready(function(){
 
// Question handler
  $('li.q').on(action, function(){

    // gets next element
    // opens .a of selected question
    $(this).next().slideToggle(speed)
    
    // selects all other answers and slides up any open answer
   .siblings('li.a').slideUp()
  
    // Grab img from clicked question
    var img = $(this).children('img');


    // remove Rotate class from all images except the active
    $('img').not(img).removeClass('activado');


    // toggle rotate class
    img.toggleClass('activado');


  });

  $("a#inline").fancybox({
        'hideOnContentClick': false
    });
  
  $("a#idSepare").fancybox();

$(window).scroll(function(){
        if( $(this).scrollTop() > 50 ){
            $('header').addClass('cabecera');
            $('#imgLogo').attr("src","img/logos_2.png");
        } else {
            $('header').removeClass('cabecera');
            $('#imgLogo').attr("src","img/logos.png");
        }
    });



 
});
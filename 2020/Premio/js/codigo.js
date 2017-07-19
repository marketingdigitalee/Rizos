// Accordian Action
var action = 'click';
var speed = "500";

$.scrollUp({
	scrollText: "",
	scrollSpeed: 500
});

// Question handler
  $('li.q').on(action, function(){

    // gets next element
    // opens .a of selected question
    $(this).next().slideToggle(speed)
    
    // selects all other answers and slides up any open answer
   .siblings('li.a').slideUp()
  
    // Grab img from clicked question
    var img = $(this).children('.img');


    // remove Rotate class from all images except the active
    $('.img').not(img).removeClass('activado');


    // toggle rotate class
    img.toggleClass('activado');


  });
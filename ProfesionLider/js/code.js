
$(document).ready(function(){
 
$("[data-fancybox]").fancybox({
    // Options will go here
  });




});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2,
        }
    }
});
function loadApp() {

    // Create the flipbook

    $('.flipbook').turn({
            // Width

            width:922,
            
            // Height

            height:600,

            // Elevation

            elevation: 50,
            
            // Enable gradients

            gradients: true,
            
            // Auto center this flipbook

            autoCenter: true

    });
}

// Load the HTML4 version if there's not CSS transform

yepnope({
    test : Modernizr.csstransforms,
    yep: ['../../lib/turn.js'],
    nope: ['../../lib/turn.html4.min.js'],
    both: ['css/basic.css'],
    complete: loadApp
});
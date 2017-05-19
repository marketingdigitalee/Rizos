
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
            nav:true,
        },
        1000:{
            items:1,
            nav:true,
            dots: true
        }
    }
})
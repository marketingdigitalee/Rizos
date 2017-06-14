
$(document).ready(function(){
 
$("[data-fancybox]").fancybox({
    // Options will go here
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
            items:2
        },
    }
});

 //single book
    $('#mybook').booklet({
        width:'90%',
        height:646,
        pagePadding: 0,
        manual: true,
        overlays:true,
        hovers:   true,
        pageNumbers: false,
        closed: true,
        autoCenter: true
    });

    $('.descargaFasciculo').click(function(){
        $("header").css("display","none");
    });

    $('body').click(function(){
        $("header").css("display","");
    });

    $(".button").click(function(){
        $("header").css("display","");
    });

    $(".modal-opener").click(function(){
        var idAncore = $(this).attr("id");
        alert(idAncore);
        $.post("index.php", {idDes: idAncore});
    });

});
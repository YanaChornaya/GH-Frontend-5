$(document).ready(function() {
    var owl = $(".hero-slider");

    owl.owlCarousel( {
        singleItem: true,
        pagination: true,
        slideSpeed: 2000,
    });

    $(".next").click(function(){
        owl.trigger('owl.next');
    });
    $(".prev").click(function(){
        owl.trigger('owl.prev');
    });


    var owl2 = $(".clients-slider");

    owl2.owlCarousel( {
        pagination: false,
        items: 7,
        autoPlay:2000,
    });

    $(".next2").click(function(){
        owl2.trigger('owl.next');
    });
    $(".prev2").click(function(){
        owl2.trigger('owl.prev');
    });

});


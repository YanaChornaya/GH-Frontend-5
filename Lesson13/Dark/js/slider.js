$(document).ready(function() {
    var owl = $(".first-slider");

    owl.owlCarousel( {
        pagination: false,
        items: 5,
        itemsDesktop : [1000,5],
        itemsDesktopSmall : [900,4],
        itemsTablet: [600,2],
        itemsMobile : false
    });

    $(".next").click(function(){
        owl.trigger('owl.next');
    });
    $(".prev").click(function(){
        owl.trigger('owl.prev');
    });


    var owl2 = $(".second-slider");

    owl2.owlCarousel( {
        pagination: false,
        items: 7,
        itemsDesktop : [1000,6],
        itemsDesktopSmall : [900,5],
        itemsTablet: [600,3],
        itemsMobile : false
    });

    $(".next2").click(function(){
        owl2.trigger('owl.next');
    });
    $(".prev2").click(function(){
        owl2.trigger('owl.prev');
    });

});

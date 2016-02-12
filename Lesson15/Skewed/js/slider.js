$(document).ready(function() {
    var owl = $(".hero-slider");

    owl.owlCarousel( {
        singleItem: true,
        pagination: true,
        autoPlay: 4000,
    });

    var owl2 = $(".team-slider");

    owl2.owlCarousel( {
        pagination: true,
        items: 4,
        autoPlay: 2000,
    });

    var owl3 = $(".portfolio-slider");

    owl3.owlCarousel( {
        pagination: true,
        items: 4,
        autoPlay: 2000,
    });

    var owl4 = $(".quote");

    owl4.owlCarousel( {
        singleItem: true,
        pagination: true,
        autoPlay: true,
    });


});


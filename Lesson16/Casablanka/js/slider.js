$(document).ready(function() {
    var owl = $(".clients-slider");

    owl.owlCarousel( {
        pagination: false,
        items: 5,
        autoPlay: 3000
    });

    var owl1 = $(".choose-us-slider");

    owl1.owlCarousel( {
        pagination: true,
        singleItem: true,
        autoPlay: true
    });

});




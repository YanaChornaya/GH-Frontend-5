$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        singleItem: true,
        pagination: false,
        slideSpeed: 2000,

        autoPlay: true,
        navigation:true,
        navigationText: [
            "<i class='icon-chevron-left icon-white'><</i>",
            "<i class='icon-chevron-right icon-white'>></i>"
        ],
    });

});
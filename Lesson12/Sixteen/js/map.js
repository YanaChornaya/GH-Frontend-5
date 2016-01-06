$(document).ready(function () {
    initialize();
});
function initialize() {
    var myLatlng = new google.maps.LatLng(-6.149176, 106.705754);
    var mapOptions = {
        center: myLatlng,
        zoom: 15,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP

    };
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var image = new google.maps.MarkerImage('images/marker.png',
        new google.maps.Size(100, 100),
        new google.maps.Point(0, 0),
        new google.maps.Point(0, 32));

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: image,
        zIndex: 999
    });
    marker.setMap(map);
}


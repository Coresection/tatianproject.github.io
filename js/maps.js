google.maps.event.addDomListener(window, 'load', init);

function init() {
    var mapOptions = {
                    zoom: 12,
                    panControl: false,
                    scaleControl: false,
                    scrollwheel: false,
                    mapTypeControl: false,
        center: new google.maps.LatLng(-37.862764,144.9009933),
        styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative.country","elementType":"labels.text.fill","stylers":[{"color":"#a85c28"}]},{"featureType":"administrative.province","elementType":"labels.text.fill","stylers":[{"color":"#a85c28"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#a85c28"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#a85c28"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#a85c28"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"labels.text.fill","stylers":[{"color":"#a85c28"}]},{"featureType":"landscape.natural.terrain","elementType":"labels.text.fill","stylers":[{"color":"#a85c28"}]},{"featureType":"landscape.natural.terrain","elementType":"labels.text.stroke","stylers":[{"color":"#a85c28"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"poi.school","elementType":"labels.text.fill","stylers":[{"color":"#a85c28"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#a85c28"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#a85c28"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"color":"#a85c28"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.text.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#a85c28"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#a85c28"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);

       var myIcon = new google.maps.MarkerImage('layout/mapmarker.png', null, null, null, new google.maps.Size(45,45));

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-37.862764,144.9009933),
            map: map,
            icon: myIcon,
            title: 'Tatian Restaurant'
        });
        marker.addListener('click', function() {
            var company = 'Tatian Restaurant';
        infowindow.setContent('<strong>' + company + '</strong><br />Behind Alis Street<br /> Melbourne, Australia <br /><br />+92 333 765 53 35<br />restaurant@thetatian.com');
            infowindow.open(map, marker);
        });
}
var directionsDisplay;
var directionsService;

function initMap() {
   var uluru = {lat: $lat, lng: $long};
   directionsDisplay = new google.maps.DirectionsRenderer();
   directionsService = new google.maps.DirectionsService();

   var map = new google.maps.Map(document.getElementById('map'), {
     zoom: 15,
     center: uluru,
     styles: mapStyle,
     zoomControl: true,
     mapTypeControl: false,
     scaleControl: false,
     streetViewControl: true,
     rotateControl: false,
     fullscreenControl: false,
     scrollwheel: false,
   });

   directionsDisplay.setMap(map);

   var contentString = $info;

     var infowindow = new google.maps.InfoWindow({
       content: contentString
     });
   
   var marker = new google.maps.Marker({
     position: uluru,
     map: map,
     title: $title
   });
   marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

   var mapStyle = [{
             'featureType': 'all',
             'elementType': 'all',
             'stylers': [{'visibility': 'on'}]
           }, {
             'featureType': 'landscape',
             'elementType': 'geometry',
             'stylers': [{'visibility': 'on'}, {'color': '#fcfcfc'}]
           }, {
             'featureType': 'water',
             'elementType': 'labels',
             'stylers': [{'visibility': 'on'}]
           }, {
             'featureType': 'water',
             'elementType': 'geometry',
             'stylers': [{'visibility': 'on'}, {'hue': '#5f94ff'}, {'lightness': 60}]
           }];
 }

 function calcRoute() {

   var partenza = document.getElementById("partenza").value;
   var arrivo = 'Via della Magliana, 183, 00146 Roma';
   var request = {
       origin:partenza, 
       destination:arrivo,
       travelMode: google.maps.DirectionsTravelMode.DRIVING
   };
   directionsService.route(request, function(response, status) {
     if (status == google.maps.DirectionsStatus.OK) {
       directionsDisplay.setDirections(response);
     }
   });
 }


 document.getElementById("submitMappa").onclick = function() {
  calcRoute();
 }
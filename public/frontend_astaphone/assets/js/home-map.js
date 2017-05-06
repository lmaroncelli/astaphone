var directionsDisplay;
var directionsService;

var marker;


function initMap() {
   var center = {lat: $lat_center, lng: $long_center};
   var uluru = {lat: $lat, lng: $long};
 
   directionsDisplay = new google.maps.DirectionsRenderer();
   directionsService = new google.maps.DirectionsService();

   var map = new google.maps.Map(document.getElementById('map'), {
     zoom: 17,
     center: center,
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
   directionsDisplay.setPanel(document.getElementById('right-panel'));

     var infowindow = new google.maps.InfoWindow({
       content: $info
     });

   
   marker = new google.maps.Marker({
     position: uluru,
     map: map,
     title: $info_title,
     icon: $icon
   });
   marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
  infowindow.open(map, marker);


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
 };

 function calcRoute() {

   var partenza = document.getElementById("partenza").value;
   var arrivo = 'Via Alessandro Gambalunga, 82, 47921 Rimini';
   //var arrivo = document.getElementById("arrivo").value;
   //alert(arrivo);
   
   var selectedMode = document.getElementById('mezzo').value;

   var request = {
       origin:partenza, 
       destination:arrivo,
       travelMode: google.maps.TravelMode[selectedMode]
   };
   directionsService.route(request, function(response, status) {
     if (status == google.maps.DirectionsStatus.OK) {
       directionsDisplay.setDirections(response);
     }
   });
 };


 function submitMappa()
  {
  calcRoute();
  marker.setMap(null);
  var offset = $("#ancora_posizionamento").offset(); // Contains .top and .left
  console.log(offset);
  $(".btn-stampa").show();
  $(".istruzioni_mappa").show();
  offset.top -= 40;
  $('html, body').animate({
      scrollTop: offset.top,
      scrollLeft: offset.left
  });
    
  }


  // trigger onCLick button
 document.getElementById("submitMappa").onclick = function() {
  if (document.getElementById("partenza").value != '') {
    submitMappa();
  } else {
    alert('Seleziona un indirizzo di partenza');
    return false;
  }
 }

 // trigger on return input text
 $("#partenza").keyup(function(event){
     if(event.keyCode == 13){
         submitMappa();
     }
 });
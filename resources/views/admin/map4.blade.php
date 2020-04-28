<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <title>Directions Display</title>
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    #map {
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <div id="map"></div>
  <script>
    var directionsDisplay;
    var directionsService;
    var map;

    function initMap() {
      directionsService = new google.maps.DirectionsService;
      var chicago = new google.maps.LatLng(10.2464, 11.1617);
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: chicago
      });
      directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
      });
      calcRoute();
    }

    function calcRoute() {
     var start = new google.maps.LatLng(10.2464, 11.1617);
     var end = new google.maps.LatLng(10.3469, 11.1627);
      var request = {
        origin: start,
        destination: end,
        travelMode: google.maps.TravelMode.DRIVING
      };
      directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(result);
        }
      });
    };
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL-TT3Huiewy-yhcRu4Kbhfdg7v4GykQg&callback=initMap">
    </script>
</body>

</html>
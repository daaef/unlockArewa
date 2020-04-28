<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Info windows</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets/css/style.min.css" rel="stylesheet" />
	<link href="/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/css/theme/default.css" id="theme" rel="stylesheet" />
	<link href="/assets/css/animate.min.css" rel="stylesheet" />
  </head>
  
   @include('home.top')
  <body>
  
  
 
                                    <div >
                                        <form action="/search/map" method="POST" name="search_form">
                                            <div class="input-group">
                                                <input name="search" type="text" placeholder="Search by the service, business, item or company you want or location" class="form-control bg-silver-lighter" />
												<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-inverse" type="submit"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div> 
                              
  
    <div id="map"></div>
	
    <script>
	 var directionsDisplay;
    var directionsService;
      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
	  directionsService = new google.maps.DirectionsService;
	  //to be cancel just for center
	  var uluru = {lat: 10.5464, lng: 11.3617};
	  //get the user's location
	  @foreach($au as $a)
       
		 var uluru{{$a->id}} = {lat: {{$a->latitude}}, lng: {{$a->longitude}}};
	@endforeach
	
	//search for item
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
		  //set the center to user's location
          center: uluru
        });
		
		 directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
      });
		//second map
		
		
		 @foreach($au as $a)

        var contentString{{$a->id}} = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">{{$a->name}}<input type="button" id="routebtn" value="route" onclick="sagir({{$a->latitude}}, {{$a->longitude}})" /></h1>'+
            '<div id="bodyContent">'+
            '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
            'sandstone rock formation in the southern part of the '+
            'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
            'south west of the nearest large town, Alice Springs; 450&#160;km '+
            '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
            'features of the Uluru - Kata Tjuta National Park. Uluru is '+
            'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
            'Aboriginal people of the area. It has many springs, waterholes, '+
            'rock caves and ancient paintings. Uluru is listed as a World '+
            'Heritage Site.</p>'+
            '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
            'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
            '(last visited June 22, 2009).</p>'+
            '</div>'+
            '</div>';
			
			
			

        var infowindow{{$a->id}} = new google.maps.InfoWindow({
          content: contentString{{$a->id}}
        });
		

        var marker{{$a->id}} = new google.maps.Marker({
          position: uluru{{$a->id}},
          map: map,
          title: {{$a->id}}
        });
		
		//marker 2
		
		//to open infoview
		/*
        marker{{$a->id}}.addListener('mouseover', function() {
          infowindow{{$a->id}}.open(map, marker{{$a->id}});
        });	
		*/
		 marker{{$a->id}}.addListener('click', function() {
          infowindow{{$a->id}}.open(map, marker{{$a->id}});
        });	
		/*
		//to close infoview
		marker{{$a->id}}.addListener('mouseout', function() {
          infowindow{{$a->id}}.close(map, marker{{$a->id}});
        });
		*/
		
		@endforeach
		
		/*compute distance
		ar latitude1 = 39.46;
var longitude1 = -0.36;
var latitude2 = 40.40;
var longitude2 = -3.68;

var distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(latitude1, longitude1), new google.maps.LatLng(latitude2, longitude2)); 
		*/
      }
	  
	   function sagir(x,y){
	   // users current location
	   var v = 10.5464;
	   var w = 11.3617;
	  calcRoute(v,w,x,y);
	  //distance in between
	 alert(dist(v,w,x,y) +'KM');
	  }
	  
	   function calcRoute(a,b,c,d) {
     var start = new google.maps.LatLng(a, b);
     var end = new google.maps.LatLng(c, d);
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
	
	function dist(a,b,c,d){
	var distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(a, b), new google.maps.LatLng(c, d)); 
	return distance;
	}
	  
	 
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL-TT3Huiewy-yhcRu4Kbhfdg7v4GykQg&callback=initMap">
    </script>
  </body>
</html>

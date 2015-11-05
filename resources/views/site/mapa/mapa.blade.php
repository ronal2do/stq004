@extends('site.index')
@section('title')
  caracteristicas
@stop
@section('content')


   
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Mapa de focos</h2>

      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  
<style>
      #map-canvas{
        width: 100%;
        height: 500px;
      }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
  type="text/javascript"></script>

  <div class="container">
  	<div class="row">
  		<div id="map-canvas"></div>
  	</div>
  </div>

@endsection

@section('post-script')
<script>
  
function initialize() {
        var latitude = -22.21,
            longitude = -49.95,
            radius = 8000, //how is this set up
            center = new google.maps.LatLng(latitude,longitude),
            bounds = new google.maps.Circle({center: center, radius: radius}).getBounds(),
            mapOptions = {
                center: center,
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false
            };

        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        setMarkers(center, radius, map);
    }

    function setMarkers(center, radius, map) {
        var json = (function () { 
            var json = null; 
            $.ajax({ 
                'async': false, 
                'global': false, 
                'url': "../api/markers", 
                'dataType': "json", 
                'success': function (data) {
                     json = data; 
                 }
            });
            return json;
        })();

        var circle = new google.maps.Circle({
                strokeColor: '#000000',
                strokeOpacity: 0.25,
                strokeWeight: 1.0,
                fillColor: '#ffffff',
                fillOpacity: 0.1,
                clickable: false,
                map: map,
                center: center,
                radius: radius
            });
        var bounds = circle.getBounds();

        //loop between each of the json elements
        for (var i = 0, length = json.length; i < length; i++) {
            var data = json[i],
            latLng = new google.maps.LatLng(data.lat, data.lng); 



            if(bounds.contains(latLng)) {
                // Creating a marker and putting it on the map
                var marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    title: data.content
                });
                infoBox(map, marker, data);
            }
        }

        circle.bindTo('center', marker, 'position');
    }

    function infoBox(map, marker, data) {
        var infoWindow = new google.maps.InfoWindow();
        // Attaching a click event to the current marker
        google.maps.event.addListener(marker, "click", function(e) {
            infoWindow.setContent(data.content);
            infoWindow.open(map, marker);
        });

        // Creating a closure to retain the correct data 
        // Note how I pass the current data in the loop into the closure (marker, data)
        (function(marker, data) {
          // Attaching a click event to the current marker
          google.maps.event.addListener(marker, "click", function(e) {
            infoWindow.setContent(data.content);
            infoWindow.open(map, marker);
          });
        })(marker, data);
    }

   google.maps.event.addDomListener(window, 'load', initialize);


</script>
  

@endsection


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
     <div class="text-left">
        <p><img src="http://mariliasemdengue.com.br/images/icons/blue.png" alt="">Denúncias apuradas</p>
        <p><img src="http://mariliasemdengue.com.br/images/icons/red.png" alt="">Denúncias aguardando análise </p>
     </div>

    </div>
    <!--/.container --> 

  </div>
  <!--/.parallax --> 
  
<style>
      #map-canvas{
        width: 100%;
        height: 600px;
      }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
  type="text/javascript"></script>

  <div class="light-wrapper">
  	
  		<div id="map-canvas"></div>
  	
  </div>
 <div class="yellow-wrapper">
    <div class="container inner text-center">    
      <h1>Disque Denúncia | 0800-77-66-111</h1>
    </div>
</div>
@endsection

@section('post-script')
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script>
  //http://stackoverflow.com/questions/32433039/how-to-load-multiple-markers-from-json-file

function initialize() {
        var latitude = -22.21,
            longitude = -49.95,
            radius = 25000, //setando o radius
            center = new google.maps.LatLng(latitude,longitude),
            bounds = new google.maps.Circle({center: center, radius: radius}).getBounds(),
            mapOptions = {
                center: center,
                zoom: 12,
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
                image: image,
                center: center,
                radius: radius
            });
        var bounds = circle.getBounds();

        //loop between each of the json elements
        for (var i = 0, length = json.length; i < length; i++) {
            var data = json[i],
            latLng = new google.maps.LatLng(data.lat, data.lng); 



            if(bounds.contains(latLng)) {

                  if (data.status == '1') {
                       var image = 'http://mariliasemdengue.com.br/images/icons/blue.png';
                    }else{
                     var image = 'http://mariliasemdengue.com.br/images/icons/red.png';
                  }

                // Creating a marker and putting it on the map
                var marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    icon: image,
                    title: data.alert_type   //aqui define o que aparece no mapa
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
            infoWindow.setContent('<div><strong>Situação: </strong>' +  data.alert_type + '<br>' +
                                  '<strong>Endereço: </strong>' +  data.address + '<br><strong> Descrição:</strong> ' + data.description + '</div>');   //aqui define o que aparece no mapa
            infoWindow.open(map, marker);
        });

        // Creating a closure to retain the correct data 
        // Note how I pass the current data in the loop into the closure (marker, data)
        (function(marker, data) {
          // Attaching a click event to the current marker
          google.maps.event.addListener(marker, "click", function(e) {
            infoWindow.setContent('<div><strong>Situação: </strong>' +  data.alert_type + '<br>' +
                                  '<strong>Endereço: </strong>' +  data.address + '<br><strong> Descrição:</strong> ' + data.description + '</div>');   //aqui define o que aparece no mapa
            infoWindow.open(map, marker);
          });
        })(marker, data);
    }

   google.maps.event.addDomListener(window, 'load', initialize);


</script>
  

@endsection


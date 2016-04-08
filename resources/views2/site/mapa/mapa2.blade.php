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
  var map = new google.maps.Map(document.getElementById('map-canvas'),{
    center:{
      lat: -22.21,
      lng: -49.95
    },
    zoom:13
  });
  var marker = new google.maps.Marker({
    position: {
      lat: -22.21,
      lng: -49.95
    },
    map: map,
    draggable: true
  });
  var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
  google.maps.event.addListener(searchBox,'places_changed',function(){
    var places = searchBox.getPlaces();
    var bounds = new google.maps.LatLngBounds();
    var i, place;
    for(i=0; place=places[i];i++){
        bounds.extend(place.geometry.location);
        marker.setPosition(place.geometry.location); //set marker position new...
      }
      map.fitBounds(bounds);
      map.setZoom(13);
  });
  google.maps.event.addListener(marker,'position_changed',function(){
    var lat = marker.getPosition().lat();
    var lng = marker.getPosition().lng();
    $('#lat').val(lat);
    $('#lng').val(lng);
  });
</script>
  

@endsection


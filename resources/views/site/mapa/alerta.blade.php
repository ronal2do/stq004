@extends('site.index')
@section('title')
  caracteristicas
@stop
@section('content')
   <style>
      #map-canvas{
        width: 350px;
        height: 350px;
      }
    </style>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
  type="text/javascript"></script>

<div class="container">
  <div class="row">
    <h1>Adicionar localização de foco</h1>
     {!!Form::open(array('url'=>'/alerta', 'files'=>true))!!}
      

      <div class="form-group">
        <label for="">Endereço</label>
        <input type="text" id="searchmap" placeholder="buscar">
        <div id="map-canvas"></div>
      </div>
      
       <div class="form-group">
        <label for="">Descricao</label>
        <input type="text" class="form-control input-sm" name="description">
      </div>
      <div class="form-group">
        <label for="">Lat</label>
        <input type="text" class="form-control input-sm" name="lat" id="lat">
      </div>

      <div class="form-group">
        <label for="">Lng</label>
        <input type="text" class="form-control input-sm" name="lng" id="lng">
      </div>

      <button class="btn btn-sm btn-danger">Salvar</button>
    {!!Form::close()!!}
  </div>

 



</div>

<script>
  var map = new google.maps.Map(document.getElementById('map-canvas'),{
    center:{
      lat: -22.21,
      lng: -49.95
    },
    zoom:15
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
      map.setZoom(15);
  });
  google.maps.event.addListener(marker,'position_changed',function(){
    var lat = marker.getPosition().lat();
    var lng = marker.getPosition().lng();
    $('#lat').val(lat);
    $('#lng').val(lng);
  });
</script>
  

@stop


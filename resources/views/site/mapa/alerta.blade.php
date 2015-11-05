@extends('site.index')
@section('title')
  Alerta
@stop
@section('content')

  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Adicionar localização de foco</h2>
       
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
   <style>
      #map-canvas{
        width: 100%;
        height: 350px;
      }
    </style>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
  type="text/javascript"></script>

<div class="container">
  <div class="row">
    <h2 class="section-title"></h2>

      <!-- flash-message --> 
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))

          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
        @endforeach
      </div> <!-- end .flash-message -->    


     {!!Form::open(array('url'=>'/alerta', 'files'=>true))!!}
      <div class="form-group">
        <label for="">Endereço</label>
        <input type="text" id="searchmap" placeholder="Insira o endereço..." name="address" required>
        <div id="map-canvas"></div>
      </div>
      <div class="form-group">
        <label for="">Tipo de Alerta</label>

        <div class="form-field">                   
                      <select name="alert_type" >
                        <option value="Criadouro">Criadouro</option>
                        <option value="Casa fechada">Casa fechada</option>
                        <option value="Lixo acumulado">Lixo acumulado</option>
                        <option value="Terreno baldio">Terreno baldio</option>
                        <option value="Alagamento">Alagamento</option>
                      </select>
         </div>
                     
      </div>



       <div class="form-group">
        <label for="">Descrição</label>
        <input type="text" class="form-control input-sm" name="description" required>
      </div>

      <div class="form-group">
     
        <input type="hidden" class="form-control input-sm" name="lat" id="lat">
      </div>
  
      <div class="form-group">
      
        <input type="hidden" class="form-control input-sm" name="lng" id="lng">
      </div>

      <button class="btn btn-sm btn-roxo">Enviar</button>
    {!!Form::close()!!}
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
  

@endsection


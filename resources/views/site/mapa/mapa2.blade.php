@extends('site.index') @section('title') caracteristicas @stop @section('content')<div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }})"><div class="container inner text-center"><div class="headline text-center"><h2>Mapa de focos</h2></div></div></div><style>#map-canvas{
        width: 100%;
        height: 500px;
      }</style><script src=//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js></script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places" type=text/javascript></script><div class=container><div class=row><div id=map-canvas></div></div></div>@endsection @section('post-script')<script>var map=new google.maps.Map(document.getElementById("map-canvas"),{center:{lat:-22.21,lng:-49.95},zoom:13}),marker=new google.maps.Marker({position:{lat:-22.21,lng:-49.95},map:map,draggable:!0}),searchBox=new google.maps.places.SearchBox(document.getElementById("searchmap"));google.maps.event.addListener(searchBox,"places_changed",function(){var e,a,o=searchBox.getPlaces(),n=new google.maps.LatLngBounds;for(e=0;a=o[e];e++)n.extend(a.geometry.location),marker.setPosition(a.geometry.location);map.fitBounds(n),map.setZoom(13)}),google.maps.event.addListener(marker,"position_changed",function(){var e=marker.getPosition().lat(),a=marker.getPosition().lng();$("#lat").val(e),$("#lng").val(a)})</script>@endsection
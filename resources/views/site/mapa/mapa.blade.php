@extends('site.index')
@section('title')
  caracteristicas
@stop
@section('content')


   
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Mapa</h2>

      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  
	
	<link rel="stylesheet" href="http://www.form.net.au/wp-content/themes/form/style.css?v=1.1" media="screen" type="text/css" />
	<link rel="stylesheet" href="http://www.form.net.au/wp-content/themes/form/css/spritesheet.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="http://www.form.net.au/wp-content/themes/form/css/skeleton.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="http://www.form.net.au/wp-content/themes/form/css/print.css" media="print" type="text/css" />
	<!--[if IE]>
	<link rel="stylesheet" href="http://www.form.net.au/wp-content/themes/form/css/ie.css" media="screen" type="text/css" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="http://www.form.net.au/wp-content/themes/form/css/ie8.css" media="screen" type="text/css" />
	<![endif]-->


		
		

<body id="public" class="single single-project postid-1108">



<div id="page_container">
<div id="main_content">
	<div id="flip-front" class="front face">
		
		
	

<div class="map-wrapper">

		<div id="map-canvas" class="map">
	</div><!-- map -->
</div>

	


	
</div><!-- #flip-front -->

</div><!-- #main_content -->
</div><!-- #page_container -->



<!-- JavaScript : Include and embedded version -->
<script src="http://www.form.net.au/wp-content/themes/form/js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="http://www.form.net.au/wp-content/themes/form/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="http://www.form.net.au/wp-content/themes/form/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="http://www.form.net.au/wp-content/themes/form/js/jquery.infieldlabel.min.js" type="text/javascript"></script>
<script src="http://www.form.net.au/wp-content/themes/form/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="http://www.form.net.au/wp-content/themes/form/js/jquery.cycle2.min.js" type="text/javascript"></script>
<script src="http://www.form.net.au/wp-content/themes/form/js/jquery.cycle2.carousel.min.js" type="text/javascript"></script>
<script src="http://www.form.net.au/wp-content/themes/form/js/jquery.cycle2.scrollVert.js" type="text/javascript"></script>
<script src="http://www.form.net.au/wp-content/themes/form/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<!-- script src="http://www.form.net.au/wp-content/themes/form/js/masonry.pkgd.min.js" type="text/javascript"></script -->
<script src="http://www.form.net.au/wp-content/themes/form/js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG8Z27LcOYq5E1kOG7b6K6H7vwfqhYCT0&amp;sensor=true" type="text/javascript"></script>



<script src="http://www.form.net.au/wp-content/themes/form/js/functions.js" type="text/javascript"></script>

<script type="text/javascript" src="http://www.form.net.au/wp-content/themes/form/js/richmarker.js"></script>	
<script type="text/javascript">

	function initialize() {
	
		// Set the styles of the map (i.e. black and white)
		var map_styles = [
			{
				featureType: 'all',
				elementType: 'labels.text.fill',
				stylers: [
					{ color: '#000000' }
				]
			},
			{
				featureType: 'all',
				elementType: 'labels.text.stroke',
				stylers: [
					{ color: '#ffffff' }
				]
			},
			{
				featureType: 'administrative',
				elementType: 'labels.text.fill',
				stylers: [
					{ color: '#000000' }
				]
			},
			{
				featureType: 'administrative.country',
				stylers: [
					{ visibility: 'off' }
				]	
			},
			{
				featureType: 'administrative.land_parcel',
				stylers: [
					{ visibility: 'off' }
				]	
			},
			{
				featureType: 'administrative.locality',
				stylers: [
					{ visibility: 'off' }
				]	
			},
			{
				featureType: 'administrative.neighborhood',
				stylers: [
					{ visibility: 'off' }
				]	
			},
			{
				featureType: 'administrative.province',
				stylers: [
					{ visibility: 'off' }
				]	
			},
			{
				featureType: 'landscape',
				elementType: 'geometry',
				stylers: [
					{ color: '#ffffff' }
				]
			},
			{
				featureType: 'poi',
				elementType: 'labels',
				stylers: [
					{ visibility: 'off' }
				]
			},
			{
				featureType: 'poi',
				elementType: 'labels.icon',
				stylers: [
					{ visibility: 'off' }
				]
			},
			{
				featureType: 'poi',
				elementType: 'geometry.fill',
				stylers: [
					{ color: '#bbbbbb' }
				]
			},
			{
				featureType: 'road',
				elementType: 'geometry',
				stylers: [
					{ color: '#000000' },
					{ visibility: 'simplified' }
				]
			},
			{
				featureType: 'road',
				elementType: 'labels',
				stylers: [
				]
			},
			{
				featureType: 'road',
				elementType: 'labels.icon',
				stylers: [
					{ visibility: 'off' }
				]
			},
			{
				featureType: 'transit',
				stylers: [
					{ visibility: 'off' }
				]	
			},
			{
				featureType: 'water',
				stylers: [
					{ color: '#000000' }
				]
			},
			{
				featureType: 'water',
				elementType: 'labels.text.stroke',
				stylers: [
					{ color: '#ffffff' }
				]
			},
			{
				featureType: 'water',
				elementType: 'labels.text.fill',
				stylers: [
					{ color: '#000000' }
				]
			}
		];
		
				
			
		var mapOptions = {
			center: new google.maps.LatLng(-31.953004, 115.857469),
			zoom: 15,
			styles: map_styles,
			scrollwheel: false,
			mapTypeControl: false,
			streetViewControl: false
		};
		
		// Create map
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		
				
					var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_Mollie_Hewitt_0404-4-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_Mollie_Hewitt_0404-4-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_Mollie_Hewitt_0404-12-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_Mollie_Hewitt_0404-12-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_1" data-lat="-31.955945" data-lng="115.856339" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_Mollie_Hewitt_0404-12-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Reko Rennie</strong> <em>Melbourne</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Reko Rennie for more details">http://rekorennie.com/</a></p>' +
						'<p class="title">Pink Kangaroo</p>' +
						'<p class="description">Reko Rennie is a Kamilaroi/Gamilaraay/Gummaroi man. His art and installations continually explore issues of identity, race, law and justice, land rights, stolen generations, and other issues affecting Aboriginal and Torres Strait Islanders in contemporary society.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_1 = new RichMarker({
				position: new google.maps.LatLng(-31.955945, 115.856339),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_1.setMap(map);
					
			google.maps.event.addListener(marker_1, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_1').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.955945 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.856339));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_1').addClass('active').css('z-index', 200);
				
				$('.marker_1 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_1 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1190149-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1190149-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_4917-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_4917-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_4923-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_4923-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0227.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0227.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_2" data-lat="-31.951361" data-lng="115.854514" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0227-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Stormie Mills</strong> <em>Perth</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Stormie Mills for more details">http://stormiemills.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Stormie Mills has established an international following for his iconic, character-based work. His work explores the human condition and the notion of isolation, working in a restricted palette of black (representing dirt), white (the attempt to remove dirt), grey (as a metaphor for the cityscape), and silver (for dreams).</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_2 = new RichMarker({
				position: new google.maps.LatLng(-31.951361, 115.854514),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_2.setMap(map);
					
			google.maps.event.addListener(marker_2, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_2').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.951361 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.854514));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_2').addClass('active').css('z-index', 200);
				
				$('.marker_2 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_2 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_AmyPlant_Ibis-1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_AmyPlant_Ibis-1-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_AmyPlant_Ibis-3-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_AmyPlant_Ibis-3-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_3" data-lat="-31.951464" data-lng="115.8557" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_AmyPlant_Ibis-3-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Phibs</strong> <em>Sydney</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Phibs for more details">http://www.phibs.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">From an early age Phibs was active in community programs that helped refine the artistic potential of this now popular art form. He produces that reflect his own unique symbolism, multicultural references, and mythology. Largely inspired by nature, his works have spawned a menagerie of signature characters.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			
			var marker_15 = new RichMarker({
				position: new google.maps.LatLng(-31.950914, 115.854831),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_15.setMap(map);
					
			google.maps.event.addListener(marker_15, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_15').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.950914 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.854831));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_15').addClass('active').css('z-index', 200);
				
				$('.marker_15 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_15 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/photo-11-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/photo-11-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012728-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012728-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012729-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012729-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_16" data-lat="-31.95209359" data-lng="115.8560131" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/photo-11-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Hyuro</strong> <em>Argentina</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Hyuro for more details">http://www.hyuro.es/ </a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Street artist Hyuro blends politics and a surrealist sensibility in her uncanny black-and-white murals, paintings, and drawings. In dreamlike compositions, a creepy cast of characters—often including decapitated figures, dreary women, and animals—play out scenes that suggest a message or narrative but leave most interpretation up to the viewer. Hyuro began her career working on the canvas and continues to produce paintings and drawings, but in recent years has focused her practice on the streets of Valencia, Spain.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			
			var marker_42 = new RichMarker({
				position: new google.maps.LatLng(-31.95239601	, 115.8554578),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_42.setMap(map);
					
			google.maps.event.addListener(marker_42, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_42').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95239601	 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8554578));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_42').addClass('active').css('z-index', 200);
				
				$('.marker_42 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_42 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/James-Cooper_Public-2014_1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/James-Cooper_Public-2014_1-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_43" data-lat="-31.95218525	" data-lng="115.8554285" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/James-Cooper_Public-2014_1-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>James Cooper</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of James Cooper for more details"></a></p>' +
						'<p class="title"></p>' +
						'<p class="description">James Cooper is an illustrator and emerging artist based in Perth, Western Australia; he contributed the artwork in the page of the character Martin E Wills created.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			
			
			var marker_47 = new RichMarker({
				position: new google.maps.LatLng(-31.952358, 115.855919),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_47.setMap(map);
					
			google.maps.event.addListener(marker_47, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_47').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.952358 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.855919));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_47').addClass('active').css('z-index', 200);
				
				$('.marker_47 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_47 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
							
		positionMapButton();
		resizeMapForSmallRes();
	
		$(window).resize(function(){
			
			if ($('.pin.active').length > 0) {
				var latitude = $('.pin.active:first').attr('data-lat');
				var longitude = $('.pin.active:first').attr('data-lng');
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				latitude = parseFloat(latitude) + modifier;
			}
			else {
				var latitude = $('.pin:first').attr('data-lat');
				var longitude = $('.pin:first').attr('data-lng');
			}
			map.setZoom(15);
			map.panTo(new google.maps.LatLng(latitude, longitude));
			
			positionMapButton();
			resizeMapForSmallRes();
			
		});
		
		if ($('.map-nav').length > 0) {
			$('.map-nav ul a').click(function(){
				$('.map-nav ul a').removeClass('active');
				$(this).addClass('active');
				$('.pin').hide();
				$('.map-nav ul a.active').each(function(){
					var filter = $(this).attr('data-filter');
					$('.pin[data-categories*="' + filter + '"]').show();
				});
				return false;
			});
		}
		
				
	}
	
	function resizeMapForSmallRes() {
	
		if ($(window).width() < 768) {
			var map_height = $(window).height() - 80;
			if (map_height > 749) { map_height = 749; }
			$('#map-canvas').css({height: map_height});
		}
		
		var filter_height = 0;
		$('.map-nav ul a').each(function(){
			if ($(this).height() > filter_height) {
				filter_height = $(this).height();
			}
		});
		$('.map-nav ul a').css({height: filter_height});
		
	}
	
	function positionMapButton() {
		if ($('.map-btn').length > 0) {
			var left_pos = ($(window).width() - $('.map-btn').width()) / 2;
			$('.map-btn').css({'left': left_pos});
		}
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
	
</script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#async=1"></script>



@stop


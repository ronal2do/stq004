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

	


	<div class="mobile-subnav">

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
			
			var marker_3 = new RichMarker({
				position: new google.maps.LatLng(-31.951464, 115.8557),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_3.setMap(map);
					
			google.maps.event.addListener(marker_3, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_3').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.951464 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8557));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_3').addClass('active').css('z-index', 200);
				
				$('.marker_3 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_3 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/Arcade-800-Back-Entrance-Opposite-Wolf-Lane-Bar_SMALL-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Arcade-800-Back-Entrance-Opposite-Wolf-Lane-Bar_SMALL-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012747-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012747-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012857-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012857-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0325.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0325.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/WolfLaneGrogan-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WolfLaneGrogan-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_4" data-lat="-31.952558" data-lng="115.855742" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/WolfLaneGrogan-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Lucas Grogan</strong> <em>Melbourne</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Lucas Grogan for more details">http://www.lucasgrogan.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Lucas Grogan is a Melbourne based artist who uses needlepoint, installation, painting and drawing to explore themes of isolation, inclusion and cultural collisions, through an autobiographical lens. Having studied at the University of Newcastle, Grogan has exhibited throughout Australia, USA and Hong Kong.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_4 = new RichMarker({
				position: new google.maps.LatLng(-31.952558, 115.855742),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_4.setMap(map);
					
			google.maps.event.addListener(marker_4, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_4').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.952558 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.855742));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_4').addClass('active').css('z-index', 200);
				
				$('.marker_4 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_4 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/MurrayHeavy2-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/MurrayHeavy2-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/MurrayHeavyProjects-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/MurrayHeavyProjects-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/MurrayHeavy3-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/MurrayHeavy3-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_5" data-lat="-31.951939" data-lng="115.855639" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/MurrayHeavy3-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Heavy Projects</strong> <em>USA</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Heavy Projects for more details">www.theheavyprojects.com</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Heavy is a tech artist and academic living in Southern California. Deriving his pseudonym from his penchant for philosophical discussion, Heavy possesses an interdisciplinary background that comprises technology, academia, and the arts. With a PhD in Humanities [ Intermedia Analysis ] from the Universiteit van Amsterdam, he has worked as both a university professor and a tech developer in Anaheim, Prague, and Saint Louis. Since 2007, Heavy has internationally presented his academic work, which explores augmented reality, art and semiotics in public space.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_5 = new RichMarker({
				position: new google.maps.LatLng(-31.951939, 115.855639),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_5.setMap(map);
					
			google.maps.event.addListener(marker_5, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_5').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.951939 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.855639));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_5').addClass('active').css('z-index', 200);
				
				$('.marker_5 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_5 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/Curved-wall-east-end-Wolf-Lane_SMALL-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Curved-wall-east-end-Wolf-Lane_SMALL-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012780-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012780-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012780-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012780-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_6" data-lat="-31.952767" data-lng="115.856606" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012780-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Maya Hayuk</strong> <em>USA</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Maya Hayuk for more details">http://www.mayahayuk.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">With their symmetrical compositions, intricate patterns, and lush colors, Maya Hayuk’s paintings and murals recall views of outer space, traditional Ukrainian crafts, airbrushed manicures, and mandalas. Hayuk weaves visual information from her immediate surroundings into her elaborate abstractions, creating an engaging mix of referents from popular culture and advanced painting practices alike while connecting to the ongoing pursuit of psychedelic experience in visual form.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_6 = new RichMarker({
				position: new google.maps.LatLng(-31.952767, 115.856606),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_6.setMap(map);
					
			google.maps.event.addListener(marker_6, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_6').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.952767 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.856606));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_6').addClass('active').css('z-index', 200);
				
				$('.marker_6 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_6 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/20140214_135933_SMALL-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/20140214_135933_SMALL-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/Ryan-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Ryan-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_7" data-lat="-31.949011" data-lng="115.858744" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/Ryan-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Ryan Boserio (Last Chance)</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Ryan Boserio (Last Chance) for more details">https://www.facebook.com/pages/LAST-CHANCE-STUDIOS/54892549388</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Last Chance collective (Daek William, Kid Zoom, Kyle Hughes-Odgers, Ryan Boserio, Sean Morris, and Tim Rollin) were an icon of the Perth Street Art scene during the 2000s. They have reunited for PUBLIC.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_7 = new RichMarker({
				position: new google.maps.LatLng(-31.949011, 115.858744),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_7.setMap(map);
					
			google.maps.event.addListener(marker_7, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_7').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.949011 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.858744));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_7').addClass('active').css('z-index', 200);
				
				$('.marker_7 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_7 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012855-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012855-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/David-Dare-Parker-Public_014-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/David-Dare-Parker-Public_014-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/WolfLaneHyuro-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WolfLaneHyuro-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_8" data-lat="-31.952989" data-lng="115.856317" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/WolfLaneHyuro-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Hyuro </strong> <em>Argentina</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Hyuro  for more details">http://www.hyuro.es/ </a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Street artist Hyuro blends politics and a surrealist sensibility in her uncanny black-and-white murals, paintings, and drawings. In dreamlike compositions, a creepy cast of characters—often including decapitated figures, dreary women, and animals—play out scenes that suggest a message or narrative but leave most interpretation up to the viewer. Hyuro began her career working on the canvas and continues to produce paintings and drawings, but in recent years has focused her practice on the streets of Valencia, Spain.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_8 = new RichMarker({
				position: new google.maps.LatLng(-31.952989, 115.856317),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_8.setMap(map);
					
			google.maps.event.addListener(marker_8, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_8').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.952989 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.856317));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_8').addClass('active').css('z-index', 200);
				
				$('.marker_8 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_8 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/photo-21-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/photo-21-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/Phibs__Vans-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Phibs__Vans-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IbisVanstheOmega-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IbisVanstheOmega-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_9" data-lat="-31.951458" data-lng="115.855789" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/IbisVanstheOmega-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Vans the Omega</strong> <em>Adelaide</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Vans the Omega for more details">http://vanstheomega.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Vans the Omega has been creating &amp;amp; painting letterforms for over two decades, which has seen him, travel around the globe consistently since 2000. Most of his influences have come from ancient scripts, Architecture, engineering, nature &amp;amp; the idea of movement or balance.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_9 = new RichMarker({
				position: new google.maps.LatLng(-31.951458, 115.855789),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_9.setMap(map);
					
			google.maps.event.addListener(marker_9, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_9').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.951458 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.855789));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_9').addClass('active').css('z-index', 200);
				
				$('.marker_9 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_9 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0204.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0204.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0242.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0242.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/BeastmanVansMurray-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/BeastmanVansMurray-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_10" data-lat="-31.95088215" data-lng="115.8542103" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/BeastmanVansMurray-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Vans the Omega, Phibs</strong> <em>Adelaide, Sydney</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Vans the Omega, Phibs for more details">http://vanstheomega.com/  http://www.phibs.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Vans the Omega has been creating &amp;amp; painting letterforms for over two decades, which has seen him, travel around the globe consistently since 2000. Most of his influences have come from ancient scripts, Architecture, engineering, nature &amp;amp; the idea of movement or balance.&lt;br /&gt; &lt;br /&gt; From an early age Phibs was active in community programs that helped refine the artistic potential of this now popular art form. He produces that reflect his own unique symbolism, multicultural references, and mythology. Largely inspired by nature, his works have spawned a menagerie of signature characters.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_10 = new RichMarker({
				position: new google.maps.LatLng(-31.95088215, 115.8542103),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_10.setMap(map);
					
			google.maps.event.addListener(marker_10, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_10').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95088215 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8542103));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_10').addClass('active').css('z-index', 200);
				
				$('.marker_10 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_10 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012779-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012779-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012853-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012853-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0326.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0326.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/WLAD1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WLAD1-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_11" data-lat="-31.9528" data-lng="115.856503" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/WLAD1-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Alexis Diaz </strong> <em>Puerto Rico</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Alexis Diaz  for more details">http://cargocollective.com/alexisdiaz</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Diaz is one half of street artist pair La Pandilla and is from Miami by way of Puerto Rico. He is known for his intricate line detail, bold colours, and the melding of fantastical animal imagery, often with human forms. This is his first trip to Australia.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_11 = new RichMarker({
				position: new google.maps.LatLng(-31.9528, 115.856503),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_11.setMap(map);
					
			google.maps.event.addListener(marker_11, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_11').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.9528 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.856503));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_11').addClass('active').css('z-index', 200);
				
				$('.marker_11 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_11 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_5283-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_5283-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_5289-Copy-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_5289-Copy-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_5312-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_5312-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_12" data-lat="-31.941725" data-lng="115.863806" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_5312-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Jaz</strong> <em>Argentina</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Jaz for more details">http://www.francofasoli.com.ar/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Jaz began his career experimenting with figurative pieces inspired by Argentine culture, he then went on to experiment with new techniques inspired by his work in scenography. Through blending unconventional materials such as asphaltic paint and petrol, Jaz developed artistic techniques which enabled him to paint huge murals which resemble delicate watercolour paintings.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_12 = new RichMarker({
				position: new google.maps.LatLng(-31.941725, 115.863806),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_12.setMap(map);
					
			google.maps.event.addListener(marker_12, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_12').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.941725 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.863806));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_12').addClass('active').css('z-index', 200);
				
				$('.marker_12 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_12 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_4914-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_4914-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0221.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0221.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0224.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0224.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/YokSheryoMurray-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/YokSheryoMurray-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_13" data-lat="-31.951233" data-lng="115.854722" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/YokSheryoMurray-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>The Yok & Sheryo</strong> <em>Perth and Singapore</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of The Yok & Sheryo for more details">http://www.theyok.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">The Yok and Sheryo are one of the best-known collaborative duos working in the street art medium. Their individual styles complement each other and their work evidences how two artists can evolve together and influence one another through ongoing collaboration. The Yok and Sheryo’s participation in PUBLIC is presented in partnership with Turner Galleries Art Angels.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_13 = new RichMarker({
				position: new google.maps.LatLng(-31.951233, 115.854722),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_13.setMap(map);
					
			google.maps.event.addListener(marker_13, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_13').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.951233 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.854722));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_13').addClass('active').css('z-index', 200);
				
				$('.marker_13 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_13 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/Lower-Carpark-West-Facing-Apartment-Wall_SMALL1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Lower-Carpark-West-Facing-Apartment-Wall_SMALL1-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_4928-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_4928-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_4911-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_4911-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_4926-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_4926-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_14" data-lat="-31.950686" data-lng="115.854781" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_4926-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>ROA</strong> <em>Belgium</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of ROA for more details">http://roaweb.tumblr.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">A modern day naturalist, famous for his large-scale depictions of animals on urban walls around the world, ROA moves between continents and cities, observing and documenting the creatures that co-inhabit the urban landscape. His bold paintings reintroduce these animals to the locations that they have long since lost to human expansion.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_14 = new RichMarker({
				position: new google.maps.LatLng(-31.950686, 115.854781),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_14.setMap(map);
					
			google.maps.event.addListener(marker_14, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_14').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.950686 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.854781));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_14').addClass('active').css('z-index', 200);
				
				$('.marker_14 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_14 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/Murray-Street-Carpark-North-Facing-Red-Wall_SMALL1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Murray-Street-Carpark-North-Facing-Red-Wall_SMALL1-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_LukeShirlaw_0504_IMG_8510-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_LukeShirlaw_0504_IMG_8510-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012859-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012859-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_15" data-lat="-31.950914" data-lng="115.854831" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012859-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Phlegm </strong> <em>UK</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Phlegm  for more details">http://www.phlegmcomics.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Phlegm is a Sheffield based muralist and artist who first developed his fantastical illustrations in self-published comics. His work now extends to the urban landscape, and can mostly be seen in run-down and disused spaces. Phlegm creates surreal illustrations to an untold story, weaving a visual narrative that explores the unreal through creatures from his imagination. His storybook-like imagery is half childlike, half menacing, set in built up cityscapes with castles, turrets and winding stairways. Each drawing forms part of a grand narrative that extends worldwide, in countries including Norway, Canada, Switzerland, Sri Lanka, USA, Belgium, Poland, Italy, Slovakia and Spain.</p>' +
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
			
			var marker_16 = new RichMarker({
				position: new google.maps.LatLng(-31.95209359, 115.8560131),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_16.setMap(map);
					
			google.maps.event.addListener(marker_16, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_16').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95209359 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8560131));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_16').addClass('active').css('z-index', 200);
				
				$('.marker_16 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_16 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0595-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0595-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_9259-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_9259-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_9257-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_9257-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_17" data-lat="-31.942683" data-lng="115.833186" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_9257-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Gaia and Ever</strong> <em></em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Gaia and Ever for more details"></a></p>' +
						'<p class="title">West Leederville Station Underpass</p>' +
						'<p class="description"></p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_17 = new RichMarker({
				position: new google.maps.LatLng(-31.942683, 115.833186),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_17.setMap(map);
					
			google.maps.event.addListener(marker_17, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_17').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.942683 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.833186));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_17').addClass('active').css('z-index', 200);
				
				$('.marker_17 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_17 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012768-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012768-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/P1012786-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/P1012786-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/PixelTAFE1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/PixelTAFE1-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_18" data-lat="-31.947978" data-lng="115.861756" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/PixelTAFE1-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Pixel Pancho</strong> <em>Italy</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Pixel Pancho for more details">https://www.flickr.com/photos/pixelpancho/ </a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Pixel Pancho, an Italian street artist from Turin has a rational view of the world. He creates “anatomical street robots” inspired by different environments, claiming that his work is intended to provoke the viewer to ask the question, “are we all just machines?”. Pancho travels the world taking every opportunity to be noticed through mediums including tiles, wall painting, and poster art.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_18 = new RichMarker({
				position: new google.maps.LatLng(-31.947978, 115.861756),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_18.setMap(map);
					
			google.maps.event.addListener(marker_18, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_18').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.947978 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.861756));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_18').addClass('active').css('z-index', 200);
				
				$('.marker_18 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_18 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0240.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0240.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0208.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0208.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/LastChanceMurraySouth-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/LastChanceMurraySouth-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_19" data-lat="-31.950769" data-lng="115.854408" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/LastChanceMurraySouth-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Last Chance</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Last Chance for more details">https://www.facebook.com/pages/LAST-CHANCE-STUDIOS/54892549388</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Last Chance collective (Daek William, Kid Zoom, Kyle Hughes-Odgers, Ryan Boserio, Sean Morris, and Tim Rollin) were an icon of the Perth Street Art scene during the 2000s. They have reunited for PUBLIC.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_19 = new RichMarker({
				position: new google.maps.LatLng(-31.950769, 115.854408),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_19.setMap(map);
					
			google.maps.event.addListener(marker_19, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_19').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.950769 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.854408));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_19').addClass('active').css('z-index', 200);
				
				$('.marker_19 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_19 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0236.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0236.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0200.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0200.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/MurrayCarparkGaia-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/MurrayCarparkGaia-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/Bewley-Shaylor-IMG_5274-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Bewley-Shaylor-IMG_5274-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_20" data-lat="-31.951092" data-lng="115.854133" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/Bewley-Shaylor-IMG_5274-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Gaia</strong> <em>USA</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Gaia for more details">http://gaiastreetart.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Gaia grew up in New York City and is a recent graduate of the Maryland Institute College of Art in Baltimore, Maryland. His studio work, installations and gallery projects have been exhibited throughout the world most notably The Baltimore Museum of Art, Rice Gallery and Palazzo Collicola Arti Visive. His street work has been documented and featured in several books on urban art, including, most recently, &amp;#039;Beyond the Street: The 100 Leading Figures in Urban Art&amp;#039;, (Berlin, 2010). Gaia lives and works in Baltimore, MD, but spends a majority of his time traveling painting murals across the world.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_20 = new RichMarker({
				position: new google.maps.LatLng(-31.951092, 115.854133),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_20.setMap(map);
					
			google.maps.event.addListener(marker_20, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_20').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.951092 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.854133));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_20').addClass('active').css('z-index', 200);
				
				$('.marker_20 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_20 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_7671.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_7671.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/TR.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/TR.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/TR1.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/TR1.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_21" data-lat="-31.941453" data-lng="115.863553" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/TR1-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Trevor Richards</strong> <em>Perth, Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Trevor Richards for more details">http://trevorrichards.iinet.net.au/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Western Australian artist Trevor Richards has been based in Fremantle and practicing as an artist over many years, exhibiting locally, nationally and internationally. His practice encompasses painting, sculpture, video and photography. He was a founding member of the Australian Centre for Concrete Art, assisting in the painting of murals around the centre of Fremantle. His more recent architectural interventions have utilised floors, windows and walls to produce a range of painted and applied designs which reference tile patterns and tessellations. His work is featured all over the world and Australia including in collections at the National Gallery of Australia, Bank Sparkasse Osnabruck (Germany), Daimler Chrysler Collection (Berlin), Art Gallery of Western Australia.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_21 = new RichMarker({
				position: new google.maps.LatLng(-31.941453, 115.863553),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_21.setMap(map);
					
			google.maps.event.addListener(marker_21, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_21').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.941453 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.863553));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_21').addClass('active').css('z-index', 200);
				
				$('.marker_21 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_21 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/David-Dare-Parker-Public_011-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/David-Dare-Parker-Public_011-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_22" data-lat="-31.952036" data-lng="115.855878" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/David-Dare-Parker-Public_011-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Jetsonarama</strong> <em>USA</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Jetsonarama for more details">http://speakingloudandsayingnothing.blogspot.com.au/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Born in North Carolina and trained as a doctor, Jetsonorama has lived on the Navajo Nation reservation in Arizona for the last 26 years. His initial interest in photography led him to New York for a time where he first began dabbling in graffiti. Initially following street art from a distance, he spent a significant amount of time considering the type of imagery that was suitable to the reservation’s traditional culture. Drawing from his vast archive of photographic negatives, he began applying imagery to dilapidated roadside street vendor sheds, water tanks, and signs around the reservation. He soon began complementing his own work with a residency programme for some of the world’s leading street artists at Navajo Nation.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_22 = new RichMarker({
				position: new google.maps.LatLng(-31.952036, 115.855878),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_22.setMap(map);
					
			google.maps.event.addListener(marker_22, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_22').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.952036 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.855878));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_22').addClass('active').css('z-index', 200);
				
				$('.marker_22 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_22 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/Ever1.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Ever1.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/Ever2-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Ever2-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/Ever_TAFE-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Ever_TAFE-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_23" data-lat="-31.947742" data-lng="115.860628" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/Ever_TAFE-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Ever</strong> <em>Argentina</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Ever for more details">http://eversiempre.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">I was born, they fed me, educated me, instructed me, and shaped me, but no one ever made me “discover” graffiti. We came together by chance upon seeing and analyzing one another (with the street between us) and we taught one another, getting to know each other in the moment just before my pre-teen period (it was either masturbate or paint something). First I thought that it could be a pastime, and then I realized that I had quit cigarettes but not graffiti. On the contrary, I felt that it was growing more each day…there is not a day when I don’t think about what to paint, where to paint, how to paint, what day, what hour, basically organizing my life around it.&lt;br /&gt; At the end of this new decade I realized the value of the message left behind with 48 hours of this exercise (painting).</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_23 = new RichMarker({
				position: new google.maps.LatLng(-31.947742, 115.860628),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_23.setMap(map);
					
			google.maps.event.addListener(marker_23, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_23').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.947742 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.860628));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_23').addClass('active').css('z-index', 200);
				
				$('.marker_23 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_23 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/25011.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/25011.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/25012-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/25012-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_5338-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_5338-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_24" data-lat="-31.945989" data-lng="115.861889" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_5338-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>2501</strong> <em>Italy</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of 2501 for more details">http://www.2501.org.uk/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Jacopo Ceccarelli aka 2501 was born in Milan in 1981. He started to paint at the young age of 14 and never gave up working on the walls of his own city, Milan. He studied as a film editor at the Civica Scuola di Cinema of Milan. He moved to Sao Paolo at the age of 20, here he made contact with South American graffiti schools (os Gemeos, Herbert Baglione, Higraff, Zezao) totally changing his approach to painting. Jacopo first begun painting under the Tag of Robot Inc and then as 2501 he started a new style that put together wall painting, canvas work, sculpture and video.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_24 = new RichMarker({
				position: new google.maps.LatLng(-31.945989, 115.861889),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_24.setMap(map);
					
			google.maps.event.addListener(marker_24, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_24').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.945989 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.861889));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_24').addClass('active').css('z-index', 200);
				
				$('.marker_24 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_24 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0318.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0318.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_25" data-lat="-31.951881" data-lng="115.854756" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0318-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>2501</strong> <em>Italy</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of 2501 for more details">http://www.2501.org.uk/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Jacopo Ceccarelli aka 2501 was born in Milan in 1981. He started to paint at the young age of 14 and never gave up working on the walls of his own city, Milan. He studied as a film editor at the Civica Scuola di Cinema of Milan. He moved to Sao Paolo at the age of 20, here he made contact with South American graffiti schools (os Gemeos, Herbert Baglione, Higraff, Zezao) totally changing his approach to painting. Jacopo first begun painting under the Tag of Robot Inc and then as 2501 he started a new style that put together wall painting, canvas work, sculpture and video.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_25 = new RichMarker({
				position: new google.maps.LatLng(-31.951881, 115.854756),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_25.setMap(map);
					
			google.maps.event.addListener(marker_25, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_25').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.951881 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.854756));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_25').addClass('active').css('z-index', 200);
				
				$('.marker_25 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_25 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0317.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0317.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_26" data-lat="-31.9518" data-lng="115.854783" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0317-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Clare McFarlane</strong> <em>Perth, Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Clare McFarlane for more details">https://www.facebook.com/claremcfarlaneart</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Clare McFarlane has a Masters and an Honours Degree in Fine Art from Curtin University of Technology, where she also completed a Graduate Diploma in Cultural Heritage. She has held four solo exhibitions in Western Australia and participated in many group shows. For her Masters project McFarlane produced a body of work that investigated the connection between technology and the feminine using the patterns of the Pre-Raphaelites as a common point of reference. Her subsequent work continues to reference the histories of scientific inquiry and the decorative arts to investigate Australian identity. In recent years she has undertaken a number of residencies at key Western Australian heritage sites including Fremantle Arts Centre, Heathcote Museum and Gallery and the Midland Railway Workshops, which have resulted in nationally-acclaimed solo exhibitions. Her work is represented in numerous collections including Alinta Gas, Artbank, Australian Bureau of Statistics, the City of Perth, Cruthers, Curtin University of Technology and Joondalup Hospital.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_26 = new RichMarker({
				position: new google.maps.LatLng(-31.9518, 115.854783),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_26.setMap(map);
					
			google.maps.event.addListener(marker_26, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_26').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.9518 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.854783));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_26').addClass('active').css('z-index', 200);
				
				$('.marker_26 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_26 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/Public_267-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Public_267-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_27" data-lat="-31.941733" data-lng="115.863636" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/Public_267-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>The Yok & Sheryo</strong> <em>Perth and Singapore</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of The Yok & Sheryo for more details">http://www.theyok.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">The Yok and Sheryo are one of the best-known collaborative duos working in the street art medium. Their individual styles complement each other and their work evidences how two artists can evolve together and influence one another through ongoing collaboration. The Yok and Sheryo’s participation in PUBLIC is presented in partnership with Turner Galleries Art Angels.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_27 = new RichMarker({
				position: new google.maps.LatLng(-31.941733, 115.863636),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_27.setMap(map);
					
			google.maps.event.addListener(marker_27, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_27').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.941733 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.863636));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_27').addClass('active').css('z-index', 200);
				
				$('.marker_27 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_27 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/PhibsIbis2-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/PhibsIbis2-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/PhibsIbis2_2-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/PhibsIbis2_2-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_28" data-lat="-31.95151345" data-lng="115.8559595" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/PhibsIbis2-78x59.jpg" alt="" />' +
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
			
			var marker_28 = new RichMarker({
				position: new google.maps.LatLng(-31.95151345, 115.8559595),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_28.setMap(map);
					
			google.maps.event.addListener(marker_28, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_28').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95151345 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8559595));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_28').addClass('active').css('z-index', 200);
				
				$('.marker_28 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_28 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/KSACPixel-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/KSACPixel-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/KSACPixel2-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/KSACPixel2-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_29" data-lat="-31.95190496" data-lng="115.8546184" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/KSACPixel2-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Pixel Pancho</strong> <em>Italy</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Pixel Pancho for more details">https://www.flickr.com/photos/pixelpancho/ </a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Pixel Pancho, an Italian street artist from Turin has a rational view of the world. He creates “anatomical street robots” inspired by different environments, claiming that his work is intended to provoke the viewer to ask the question, “are we all just machines?”. Pancho travels the world taking every opportunity to be noticed through mediums including tiles, wall painting, and poster art.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_29 = new RichMarker({
				position: new google.maps.LatLng(-31.95190496, 115.8546184),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_29.setMap(map);
					
			google.maps.event.addListener(marker_29, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_29').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95190496 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8546184));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_29').addClass('active').css('z-index', 200);
				
				$('.marker_29 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_29 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/LastChanceMurrayWest-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/LastChanceMurrayWest-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_30" data-lat="-31.95099012" data-lng="115.8548226" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/LastChanceMurrayWest-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Last Chance</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Last Chance for more details">https://www.facebook.com/pages/LAST-CHANCE-STUDIOS/54892549388</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Last Chance collective (Daek William, Kid Zoom, Kyle Hughes-Odgers, Ryan Boserio, Sean Morris, and Tim Rollin) were an icon of the Perth Street Art scene during the 2000s. They have reunited for PUBLIC.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_30 = new RichMarker({
				position: new google.maps.LatLng(-31.95099012, 115.8548226),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_30.setMap(map);
					
			google.maps.event.addListener(marker_30, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_30').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95099012 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8548226));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_30').addClass('active').css('z-index', 200);
				
				$('.marker_30 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_30 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/WolfLaneShrink-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WolfLaneShrink-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/Shrink1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Shrink1-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/Shrink2-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Shrink2-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_31" data-lat="-31.9524631" data-lng="115.8556255" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/Shrink2-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Shrink</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Shrink for more details">http://kneadingashrink.weebly.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Shrink is a Perth-based graphic designer/artist and illustrator.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_31 = new RichMarker({
				position: new google.maps.LatLng(-31.9524631, 115.8556255),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_31.setMap(map);
					
			google.maps.event.addListener(marker_31, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_31').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.9524631 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8556255));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_31').addClass('active').css('z-index', 200);
				
				$('.marker_31 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_31 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/AmokIsland-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/AmokIsland-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/WolfAmok-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WolfAmok-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_32" data-lat="-31.95259755" data-lng="115.855763" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/WolfAmok-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Amok Island</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Amok Island for more details">http://www.amokisland.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Amok Island is a self-taught, self-employed artist and designer living in Perth. After spending more than a decade painting walls in the heart of Amsterdam, his love for all things tropical saw him travel across Asia before settling in Perth. Passionate about underwater photography, he often references this in his work. Amok has been commissioned to create a number of public murals across Perth area and the state’s north in Port Hedland as well as internationally in Indonesia, Amsterdam and Portugal. From his studio in Perth, Amok creates colourful canvases of sea creatures and coastal aerial views and also produces handmade screen prints using a technique of exposing screens to sunlight.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_32 = new RichMarker({
				position: new google.maps.LatLng(-31.95259755, 115.855763),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_32.setMap(map);
					
			google.maps.event.addListener(marker_32, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_32').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95259755 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.855763));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_32').addClass('active').css('z-index', 200);
				
				$('.marker_32 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_32 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/ELKWolfLane-284x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/ELKWolfLane-284x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/WolfLane_ELK2-284x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WolfLane_ELK2-284x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_33" data-lat="-31.95265945" data-lng="115.8562818" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/ELKWolfLane-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>E.L.K.</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of E.L.K. for more details">http://elkstencils.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Luke Cornish is an Australian artist creating unique, powerful images from handmade stencils. His rise within the contemporary art world has been meteoric, becoming the first artist to be nominated for the Archibald Prize with a portrait created entirely out of stencils. A former blue-collar worker from Canberra, Cornish&amp;#039;s apathy and boredom during his mid-twenties encouraged him to start experimenting with stanley knives and spraypaint cans. Nearly ten years later, Cornish has literally carved his name into the public&amp;#039;s mind. Over the past five years he has been granted many awards, including being granted the Churchill fellowship in 2013, being selected as a finalist in the Metro Art Prize of 2011, winning the Australian Stencil Art prize in 2010, the most popular stencil at Melbourne Stencil Festival in 2008, and creating a shortlisted Tropfest film on the making of his Archibald portrait. And finally, the Archibald itself. Cornish&amp;#039;s portrait of controversial Catholic priest Father Bob Maguire achieved a new auction record for a work by an Australian street artist selling for AU$34,160 during the Bonhams Australia Important Australian Art auction in late 2013.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_33 = new RichMarker({
				position: new google.maps.LatLng(-31.95265945, 115.8562818),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_33.setMap(map);
					
			google.maps.event.addListener(marker_33, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_33').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95265945 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8562818));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_33').addClass('active').css('z-index', 200);
				
				$('.marker_33 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_33 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/WolfHeavy2-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WolfHeavy2-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_34" data-lat="-31.95262573" data-lng="115.8560866" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/WolfHeavy2-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Heavy Projects </strong> <em>USA</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Heavy Projects  for more details">www.theheavyprojects.com</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Heavy is a tech artist and academic living in Southern California. Deriving his pseudonym from his penchant for philosophical discussion, Heavy possesses an interdisciplinary background that comprises technology, academia, and the arts. With a PhD in Humanities [ Intermedia Analysis ] from the Universiteit van Amsterdam, he has worked as both a university professor and a tech developer in Anaheim, Prague, and Saint Louis. Since 2007, Heavy has internationally presented his academic work, which explores augmented reality, art and semiotics in public space.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_34 = new RichMarker({
				position: new google.maps.LatLng(-31.95262573, 115.8560866),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_34.setMap(map);
					
			google.maps.event.addListener(marker_34, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_34').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95262573 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8560866));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_34').addClass('active').css('z-index', 200);
				
				$('.marker_34 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_34 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/WLJaz-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WLJaz-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/WLJaz5-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WLJaz5-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_35" data-lat="-31.95245547" data-lng="115.8558652" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/WLJaz5-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Jaz</strong> <em>Argentina</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Jaz for more details">http://www.francofasoli.com.ar/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Jaz began his career experimenting with figurative pieces inspired by Argentine culture, he then went on to experiment with new techniques inspired by his work in scenography. Through blending unconventional materials such as asphaltic paint and petrol, Jaz developed artistic techniques which enabled him to paint huge murals which resemble delicate watercolour paintings.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_35 = new RichMarker({
				position: new google.maps.LatLng(-31.95245547, 115.8558652),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_35.setMap(map);
					
			google.maps.event.addListener(marker_35, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_35').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95245547 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8558652));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_35').addClass('active').css('z-index', 200);
				
				$('.marker_35 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_35 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/WLPP1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WLPP1-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/WLPP3-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/WLPP3-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_36" data-lat="-31.95247022" data-lng="115.8560164" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/WLPP3-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Pixel Pancho</strong> <em>Italy</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Pixel Pancho for more details">https://www.flickr.com/photos/pixelpancho/ </a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Pixel Pancho, an Italian street artist from Turin has a rational view of the world. He creates “anatomical street robots” inspired by different environments, claiming that his work is intended to provoke the viewer to ask the question, “are we all just machines?”. Pancho travels the world taking every opportunity to be noticed through mediums including tiles, wall painting, and poster art.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_36 = new RichMarker({
				position: new google.maps.LatLng(-31.95247022, 115.8560164),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_36.setMap(map);
					
			google.maps.event.addListener(marker_36, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_36').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95247022 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8560164));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_36').addClass('active').css('z-index', 200);
				
				$('.marker_36 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_36 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/AnyaBrock_Hurben_AndrewFrazer_PaulDeej_IanMutch-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/AnyaBrock_Hurben_AndrewFrazer_PaulDeej_IanMutch-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/AndrewFrazer-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/AndrewFrazer-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_37" data-lat="-31.95234446	" data-lng="115.8555468" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/AndrewFrazer-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Andrew Frazer</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Andrew Frazer for more details">http://adfdesigns.com.au/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">A Western Australian illustrator and designer, Andrew Frazer specialises in hand lettering with his typography and story-telling skills evident in commissioned lettering projects on menu boards, custom wedding invitations, editorial and installations. He has partnered with the Yolngu People in Arnhem Land on documentary photography projects and is currently producing a number of public murals and installations. Andrew’s aim with his work is to welcome people into “a conversation that requires imagination” - reflected in his narrative-based artwork. After spending a number of years in Canada, Andrew has returned to Australia and currently resides in Bunbury.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_37 = new RichMarker({
				position: new google.maps.LatLng(-31.95234446	, 115.8555468),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_37.setMap(map);
					
			google.maps.event.addListener(marker_37, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_37').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95234446	 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8555468));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_37').addClass('active').css('z-index', 200);
				
				$('.marker_37 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_37 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/AnyaBrock_Hurben_AndrewFrazer_PaulDeej_IanMutch-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/AnyaBrock_Hurben_AndrewFrazer_PaulDeej_IanMutch-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/Anya-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Anya-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_38" data-lat="-31.9522627	" data-lng="115.855583" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/Anya-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Anya Brock</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Anya Brock for more details">http://www.anyabrock.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">A painter and illustrator from Perth, Anya Brock started out in the fashion industry, creating and managing high-end label Anan for eight years. Her love of painting blossomed after working with internationally recognised artists Christopher Kane and Richard Nicoll in the United Kingdom. She has since established a large and dedicated fan base, exhibiting her work in solo and group exhibitions and decorating the walls and windows of some of Perth’s most popular urban locations with bright murals. After competing in the Stoli ORGNLtv competition in New York and relocating to Sydney’s Bondi Beach, Anya continues to attract international attention for her work. A recent major commission saw Brock produce cover art for 15 Urban Walkabout guides for various suburbs around Perth and Sydney between 2011 and 2013.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_38 = new RichMarker({
				position: new google.maps.LatLng(-31.9522627	, 115.855583),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_38.setMap(map);
					
			google.maps.event.addListener(marker_38, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_38').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.9522627	 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.855583));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_38').addClass('active').css('z-index', 200);
				
				$('.marker_38 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_38 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/JetsonELK-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/JetsonELK-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/ELKWolfLaneCarpark-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/ELKWolfLaneCarpark-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_39" data-lat="-31.95222861	" data-lng="115.8555917" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/ELKWolfLaneCarpark-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>E.L.K.</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of E.L.K. for more details">http://elkstencils.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Luke Cornish is an Australian artist creating unique, powerful images from handmade stencils. His rise within the contemporary art world has been meteoric, becoming the first artist to be nominated for the Archibald Prize with a portrait created entirely out of stencils. A former blue-collar worker from Canberra, Cornish&amp;#039;s apathy and boredom during his mid-twenties encouraged him to start experimenting with stanley knives and spraypaint cans. Nearly ten years later, Cornish has literally carved his name into the public&amp;#039;s mind. Over the past five years he has been granted many awards, including being granted the Churchill fellowship in 2013, being selected as a finalist in the Metro Art Prize of 2011, winning the Australian Stencil Art prize in 2010, the most popular stencil at Melbourne Stencil Festival in 2008, and creating a shortlisted Tropfest film on the making of his Archibald portrait. And finally, the Archibald itself. Cornish&amp;#039;s portrait of controversial Catholic priest Father Bob Maguire achieved a new auction record for a work by an Australian street artist selling for AU$34,160 during the Bonhams Australia Important Australian Art auction in late 2013.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_39 = new RichMarker({
				position: new google.maps.LatLng(-31.95222861	, 115.8555917),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_39.setMap(map);
					
			google.maps.event.addListener(marker_39, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_39').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95222861	 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8555917));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_39').addClass('active').css('z-index', 200);
				
				$('.marker_39 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_39 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/JetsonELK-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/JetsonELK-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/Jetsonorama2a-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Jetsonorama2a-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/Jetsonorama1a-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/Jetsonorama1a-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_40" data-lat="-31.95218957	" data-lng="115.8555215" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/Jetsonorama1a-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Jetsonorama</strong> <em>USA</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Jetsonorama for more details">http://speakingloudandsayingnothing.blogspot.com.au/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Born in North Carolina and trained as a doctor, Jetsonorama has lived on the Navajo Nation reservation in Arizona for the last 26 years. His initial interest in photography led him to New York for a time where he first began dabbling in graffiti. Initially following street art from a distance, he spent a significant amount of time considering the type of imagery that was suitable to the reservation’s traditional culture. Drawing from his vast archive of photographic negatives, he began applying imagery to dilapidated roadside street vendor sheds, water tanks, and signs around the reservation. He soon began complementing his own work with a residency programme for some of the world’s leading street artists at Navajo Nation.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_40 = new RichMarker({
				position: new google.maps.LatLng(-31.95218957	, 115.8555215),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_40.setMap(map);
					
			google.maps.event.addListener(marker_40, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_40').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95218957	 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8555215));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_40').addClass('active').css('z-index', 200);
				
				$('.marker_40 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_40 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/AnyaBrock_Hurben_AndrewFrazer_PaulDeej_IanMutch-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/AnyaBrock_Hurben_AndrewFrazer_PaulDeej_IanMutch-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_LukeShirlaw_FINALS_ZIMG_3134-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_LukeShirlaw_FINALS_ZIMG_3134-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_41" data-lat="-31.9523123	" data-lng="115.8555599" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/PUBLIC_LukeShirlaw_FINALS_ZIMG_3134-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Hurben</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Hurben for more details"></a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Hurben is a street artist based in Perth, Western Australia.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_41 = new RichMarker({
				position: new google.maps.LatLng(-31.9523123	, 115.8555599),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_41.setMap(map);
					
			google.maps.event.addListener(marker_41, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_41').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.9523123	 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8555599));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_41').addClass('active').css('z-index', 200);
				
				$('.marker_41 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_41 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/AnyaBrock_Hurben_AndrewFrazer_PaulDeej_IanMutch-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/AnyaBrock_Hurben_AndrewFrazer_PaulDeej_IanMutch-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IanMutch-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IanMutch-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_42" data-lat="-31.95239601	" data-lng="115.8554578" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/IanMutch-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Ian Mutch</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Ian Mutch for more details">www.ianmutch.com</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Ian Mutch is a designer, artist and illustrator whose subject matter revolves around girls &amp;quot;because they&amp;#039;re beautiful,&amp;quot; animals &amp;quot;because they&amp;#039;re interesting&amp;quot; and monsters &amp;quot;because they&amp;#039;re funny.&amp;quot; His illustration work has featured in a variety of publications including Monster Children, Oyster, Transworld, Bl!sss and Tracks Magazine. Ian also co-produces and publishes Kingbrown Magazine and has joined other design industry professionals as a speaker at some of the largest and best known design festivals in the world: Design Institute of Australia, Semi-Permanent and AgIdeas, Melbourne. He has exhibited artworks in Bangkok, London, New York and Singapore and runs a freelance design practice from his home in Western Australia&amp;#039;s South West.</p>' +
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
			
			var marker_43 = new RichMarker({
				position: new google.maps.LatLng(-31.95218525	, 115.8554285),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_43.setMap(map);
					
			google.maps.event.addListener(marker_43, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_43').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95218525	 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8554285));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_43').addClass('active').css('z-index', 200);
				
				$('.marker_43 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_43 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/MartinEWills-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/MartinEWills-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/JamesCooperSquare-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/JamesCooperSquare-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/JamesCooperMartinEWills1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/JamesCooperMartinEWills1-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_44" data-lat="-31.95216175	" data-lng="115.8554696" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/JamesCooperMartinEWills1-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Martin E Wills</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Martin E Wills for more details">http://www.martinewills.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Martin E Wills a.k.a. mew is an artist/street artist from Perth who likes sci-fi, fantasy, future, 60s, wavy styled hair and sliced body parts.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_44 = new RichMarker({
				position: new google.maps.LatLng(-31.95216175	, 115.8554696),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_44.setMap(map);
					
			google.maps.event.addListener(marker_44, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_44').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95216175	 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8554696));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_44').addClass('active').css('z-index', 200);
				
				$('.marker_44 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_44 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/AnyaBrock_Hurben_AndrewFrazer_PaulDeej_IanMutch-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/AnyaBrock_Hurben_AndrewFrazer_PaulDeej_IanMutch-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/PaulDeej1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/PaulDeej1-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_45" data-lat="-31.95238336	" data-lng="115.8555291" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/PaulDeej1-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>Paul Deej</strong> <em>Australia</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of Paul Deej for more details">http://www.pauldeej.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">Paul Deej has been a professional artist and illustrator since 2002. In 2010 Deej took his artwork onto canvas and into galleries, and has exhibited all over Australia and has had three successful solo shows. Deej’s bold colourful work is inspired by popular cultures of movies, comics &amp;amp; hip hop.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_45 = new RichMarker({
				position: new google.maps.LatLng(-31.95238336	, 115.8555291),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_45.setMap(map);
					
			google.maps.event.addListener(marker_45, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_45').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.95238336	 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.8555291));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_45').addClass('active').css('z-index', 200);
				
				$('.marker_45 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_45 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/ROA_Wolf_Lane_1-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/ROA_Wolf_Lane_1-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/ROA_Wolf_Lane_2-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/ROA_Wolf_Lane_2-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_46" data-lat="-31.952528	" data-lng="115.855892" data-categories="public">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/ROA_Wolf_Lane_2-78x59.jpg" alt="" />' +
				'</div>' +
				'<div class="large">' +
					images +
					'<div class="text">' +
						'<p class="artist monteserrat"><strong>ROA</strong> <em>Belgium</em></p>' +
						'<p><a target="_blank" href="http://http://rekorennie.com/" title="Visit the website of ROA for more details">http://roaweb.tumblr.com/</a></p>' +
						'<p class="title"></p>' +
						'<p class="description">A modern day naturalist, famous for his large-scale depictions of animals on urban walls around the world, ROA moves between continents and cities, observing and documenting the creatures that co-inhabit the urban landscape. His bold paintings reintroduce these animals to the locations that they have long since lost to human expansion.</p>' +
					'</div>' +
					'<a class="icn close" href="#" title="Close">Close</a>' + 
				'</div>' +
			'</div>' +
			'<span></span>' +
			'</div>';
			
			var marker_46 = new RichMarker({
				position: new google.maps.LatLng(-31.952528	, 115.855892),
				draggable: false,
				flat: true,
				anchor: RichMarkerPosition.BOTTOM,
				content: marker_html
			});			
			marker_46.setMap(map);
					
			google.maps.event.addListener(marker_46, 'click', function() {
				
				var modifier = 0.0178;
				if ($(window).width() < 768) {
					modifier = 0;
				}
				
				if (!$('.marker_46').hasClass('active')) {
					// map.setZoom(14);
					// var temp_lat = -31.952528	 + modifier;
					// map.panTo(new google.maps.LatLng(temp_lat, 115.855892));
				}
				
				$('.pin').removeClass('active').css('z-index', 10);
				$('.marker_46').addClass('active').css('z-index', 200);
				
				$('.marker_46 .large .image').cycle({
					fx: 'scrollHorz',
					slides: '> img',
					prev: '> .left-black-arrow',
					next: '> .right-black-arrow'
				});
			
				$('.marker_46 .large .close').click(function(){
					$('.pin').removeClass('active');
					return false;
				});
				
			});
			
								var images = '<div class="image"><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_5744-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_5744-292x194.jpg" /><img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0419-292x194.jpg" alt="Image of http://www.form.net.au/wp-content/uploads/2014/03/IMG_0419-292x194.jpg" /><a href="#" class="arrow icn left-black-arrow"><span>&lt;</span></a><a href="#" class="arrow icn right-black-arrow"><span>&gt;</span></a></div>';			var marker_html = '<div class="pin public marker_47" data-lat="-31.952358" data-lng="115.855919" data-categories="public local">' +
			'<div class="wrapper">' +
				'<div class="small">' +
					'<img src="http://www.form.net.au/wp-content/uploads/2014/03/IMG_0419-78x59.jpg" alt="" />' +
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


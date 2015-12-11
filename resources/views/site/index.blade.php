<!DOCTYPE html>

<html lang="pt-BR" ng-app="myapp"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Descrição">
<meta name="author" content="">
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<title>Marília sem dengue - @yield('title')</title>
<!-- Bootstrap core CSS -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,500,500italic,700,700italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="{{ asset('lydia/icons.css') }}" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-70339012-1', 'auto');
ga('send', 'pageview');

</script>
<!-- End Google Analytics -->
</head>

<body class="mode-lg" style="overflow: visible;">

<main class="body-wrapper">
  <div class="navbar">
    <div class="navbar-header">
      <div class="basic-wrapper"> 
        <div class="navbar-brand">
             <a href="/home">
               <img src="{{asset('images/logo.png')}}" alt="">     
             </a> 
           </div>
        <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
      </div>
    </div>
    <nav class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="/home" >Home</a>
        </li>
         <li ><a href="#" class="dropdown-toggle js-activated">Prevenção <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/acoes-individuais">Ações Individuais</a></li>
            <li><a href="/acoes-prefeitura">Ações da Prefeitura</a></li>
          </ul>
        </li>
        <li ><a href="#" class="dropdown-toggle js-activated">Informações <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/caracteristicas">Características</a></li>
            <li><a href="/historico">Histórico da doença</a></li>
            <!--<li><a href="/sintomas">Sintomas</a></li>-->
            <li><a href="/atendimento-medico">Atendimento Médico</a></li>
          </ul>
        </li>
        <li ><a href="#" class="dropdown-toggle js-activated">Mapa da Dengue <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="/mapa">Mapa</a></li> 
            <li><a href="/alerta">Inserir alerta de foco</a></li>
           <!-- <li><a href="/como-contribuir">Como contribuir?</a></li> -->
          </ul>
        </li>
        <li ><a href="#" class="dropdown-toggle js-activated">Mobilização <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/comite-municipal">Comitê Municipal</a></li>
            <li><a href="/comites-regionais">Comitês Regionais / Distritais</a></li>
            <li><a href="/como-participar">Como Participar?</a></li>
            <!--<li><a href="/parceiros">Parceiros</a></li>-->
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle js-activated">Novidades <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/novidades">Novidades sobre a Campanha</a></li>
            <li><a href="/agenda">Agenda de Ações</a></li>
           <!-- <li><a href="/midia">A Campanha na mídia</a></li> -->
          </ul>
        </li>       
      </ul>   
    </nav>  
    <div class="social-wrapper">
      <ul class="social naked">
        <li><a href="https://www.facebook.com/PrefeituraMarilia/" target="_blank"><i class="icon-s-facebook"></i></a></li>
        <li><a href="https://instagram.com/prefeituramarilia/" target="_blank"><i class="icon-s-instagram"></i></a></li>
       <li><a href="https://twitter.com/Pref_Marilia" target="_blank"><i class="icon-s-twitter" ></i></a></li>
      </ul>
    </div>
  </div>
@yield('content')

@include('site.resources.footer')
</main>
<!--/.body-wrapper --> 
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-beta.2/angular.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/ngMask.min.js') }}"></script>
<script src="{{ asset('js/ang.js') }}"></script>
    <!-- Include this after the sweet alert js file -->
@include('sweet::alert')
@yield('post-script')
</body></html>
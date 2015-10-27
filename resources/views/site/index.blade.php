<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Descrição">
<meta name="author" content="">
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
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
</head>
<body>
<main class="body-wrapper">
  <div class="navbar">
    <div class="navbar-header">
      <div class="basic-wrapper"> 
        <div class="navbar-brand">
             <a href="/">
               <img src="{{ asset('images/logo.png') }}" alt="">
              
             </a> 
           </div>
        <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
      </div>
    </div>
    <nav class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="/" >Home</a>
        </li>
         <li ><a href="#" class="dropdown-toggle js-activated">Prevenção <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/acoes-individuais">Ações Individuais</a></li>
            <li><a href="/acoes-prefeitura">Ações Prefeitura</a></li>
          </ul>
        </li>
        <li ><a href="#" class="dropdown-toggle js-activated">Informações <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/caracteristicas">Características</a></li>
            <li><a href="/historico-doenca">Histórico da doença</a></li>
            <li><a href="/historico-marilia">Sintomas</a></li>
            <li><a href="/atendimento-medico">Atendimento Médico</a></li>
          </ul>
        </li>
        <li ><a href="#" class="dropdown-toggle js-activated">Mapa da Dengue <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <!-- <li><a href="/mapa">Mapa</a></li> -->
            <li><a href="/alerta">Inserir alerta de foco</a></li>
           <!-- <li><a href="/como-contribuir">Como contribuir?</a></li> -->
          </ul>
        </li>
        <li ><a href="#" class="dropdown-toggle js-activated">Mobilização <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/comite-municipal">Comitê Municipal</a></li>
            <li><a href="/comites-regionais">Comitês Regionais</a></li>
            <li><a href="/como-participar">Como Participar?</a></li>
            <li><a href="/parceiros">Parceiros</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle js-activated">Novidades <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/novidades">Novidades sobre a Campanha</a></li>
            <li><a href="/agenda">Agenda de Ações</a></li>
            <li><a href="/midia">A Campanha na mídia</a></li>
          </ul>
        </li>       
      </ul>   
    </nav>  
    <div class="social-wrapper">
      <ul class="social naked">
        <li><a href="/"><i class="icon-s-facebook"></i></a></li>
        <li><a href="https://instagram.com/prefeitura_marilia/" target="_blank"><i class="icon-s-instagram"></i></a></li>
       <li><a href="/"><i class="icon-s-twitter"></i></a></li>
      </ul>
    </div>
  </div>
@yield('content')
  <footer class="footer light-wrapper">
    <div class="container inner">
      <div class="span12">
        <div class="col-sm-4">
          <div class="widget">
            <h4 class="widget-title">Lorem dolem</h4>            
            <div class="contact-info"> <i class="icon-location"></i> Endereço. 14/05 = Cidade <br>
              <i class="icon-phone"></i>(12) 3456.7890 <br>
              <i class="icon-mail"></i> <a href="e.mail@email.com">e.mail@email.com</a> </div>
          </div>
        </div>        
        <div class="col-sm-4 centered">
          <div class="center-all">
            <a href="http://www.marilia.sp.gov.br/prefeitura/" target="_blank">
              <img src="{{ asset('images/Ass-Marilia.png') }}" alt="Marília" class="img-responsive">
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="widget">
            <h4 class="widget-title">Lorem dolem</h4>
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="sub-footer">
      <div class="container inner">
        <p class="text-center">© 2015 Campanha Marília sem Dengue.</p>
      </div>
    </div>
  </footer>
</main>
<!--/.body-wrapper --> 
<script src="{{ asset('js/main.js') }}"></script>
@yield('post-script')
<script type="text/javascript">
$(document).ready(function(){ 
    $(".changecolor").switchstylesheet( { seperator:"color"} );
});
</script>

</body></html>
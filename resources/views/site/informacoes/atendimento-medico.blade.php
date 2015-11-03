@extends('site.index')
@section('title')
  Atendimento médico
@stop
@section('content')
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Atendimento médico</h2>
        <p class="lead">Lorem dolem Ipsum</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 



  <div class="light-wrapper">
  
    <div class="container inner">
      
        <div class="col-sm-5">
            <figure><img src="{{ asset('images/Ass-Marilia.png') }}" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-sm-7">
           <h1 >Atendimento Médico</h1>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur.  Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris.</p>
        
          </div>
        <!--/column -->
      </div>   
 </div>
    <!-- /.container -->
 
  <!-- /.light-wrapper -->
  <div class="dark-wrapper">
    <div class="container inner">
      <div class="col-sm-6">
      <ul>
        <li><b>UBS ALTO CAFEZAL</b> <br><i class="fa fa-user-md"></i>“Dr. Francisco Nicolau Salum” <br><i class="fa fa-map-marker"></i>  Rua Paes Lemes nº 850 <br><i class="fa fa-phone"></i> Fone: (14) 3454-9168 / 3454-5831 <br><i class="fa fa-envelope"></i> E-mail: ubsaltocafezal@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>
        <li><b>UBS BANDEIRANTES</b> <br><i class="fa fa-user-md"></i>“Dr. Augusto Bastos Chaves” <br><i class="fa fa-map-marker"></i>  Rua Albericio Mendes Pinto nº 96 <br><i class="fa fa-phone"></i> Fone: (14) 3432-4442 / 3413-7279 <br><i class="fa fa-envelope"></i> E-mail: ubsbandeirantes@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>
        <li><b>UBS CASCATA</b> <br><i class="fa fa-user-md"></i>“Dr. Luis Augusto Pisani Lourenço” <br><i class="fa fa-map-marker"></i>  Rua 9 julho nº 283 <br><i class="fa fa-phone"></i> Fone: (14) 3432-1071 <br><i class="fa fa-envelope"></i> E-mail: ubscascata@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>
        <li><b>UBS CASTELO BRANCO</b> <br><i class="fa fa-user-md"></i>“Dr. Eurípides Batistetti” <br><i class="fa fa-map-marker"></i>  Rua Adamantina nº 15 <br><i class="fa fa-phone"></i> Fone: (14) 3415-3916 / 3415-3908 <br><i class="fa fa-envelope"></i> E-mail: ubscastelobranco@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>
        <li><b>UBS CHICO MENDES</b> <br><i class="fa fa-user-md"></i>“Dr. Érico Cardeal” <br><i class="fa fa-map-marker"></i>  Rua Amador Bueno nº 1085 <br><i class="fa fa-phone"></i> Fone: (14) 3413-6610 / 3432-3055 <br><i class="fa fa-envelope"></i> E-mail: ubschicomendes@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>
        <li><b>UBS COSTA E SILVA</b> <br><i class="fa fa-user-md"></i>“Dr. Gustavo Alberto de Godoy Pereira” <br><i class="fa fa-map-marker"></i>  Rua Fernando Fontana nº 300 <br><i class="fa fa-phone"></i> Fone: (14) 3451-5233 / 3417-8480 <br><i class="fa fa-envelope"></i> E-mail: ubscostaesilva@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>

      </ul> 
      </div> 
      <div class="col-sm-6">
      <ul>
        <li><b>UBS J.K.</b><br><i class="fa fa-user-md"></i> “ D. Maria da Conceição Brandão” <br><i class="fa fa-map-marker"></i>  Rua Lucílio Coelho de Oliveira nº 5 <br><i class="fa fa-phone"></i> Fone: (14) 3415-2116 / 3415-3329 <br><i class="fa fa-envelope"></i> E-mail: ubsjksus@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>
        <li><b>UBS NOVA MARÍLIA</b> <br><i class="fa fa-user-md"></i>“Dr. Idreno Sylvio Cavallari” <br><i class="fa fa-map-marker"></i>  Av. Mem de Sá nº 360-A <br><i class="fa fa-phone"></i> Fone: (14) 3451-1726 / 3451-2808 <br><i class="fa fa-envelope"></i> E-mail: ubsnovamarilia@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>
        <li><b>UBS PLANALTO </b>“ Dr. Antonio Rodrigues Sobrinho” <br><i class="fa fa-map-marker"></i>  Rua Gildo Bonato nº 207 <br><i class="fa fa-phone"></i> Fone: (14) 3451-4669 / 3417-6184 <br><i class="fa fa-envelope"></i> E-mail: ubsplanaltomarilia@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>
        <li><b>UBS SÃO JUDAS</b> <br><i class="fa fa-user-md"></i>“Dr. Pérsio de Carvalho” <br><i class="fa fa-map-marker"></i>  Rua Ribeirão Preto nº 510 <br><i class="fa fa-phone"></i> Fone: (14) 3454-3025 / 3432-4686 <br><i class="fa fa-envelope"></i> E-mail: unidadesaojudas@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>
        <li><b>UBS SÃO MIGUEL </b><br><i class="fa fa-user-md"></i>“Dr. Simão de Andrade Ribeiro” <br><i class="fa fa-map-marker"></i>  Rua 24 dezembro nº 2865 <br><i class="fa fa-phone"></i> Fone: (14) 3432-3509 / 3422-1528 <br><i class="fa fa-envelope"></i> E-mail: ubssaomiguelmarilia@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 07:00 às 18:00hs</li><br>
      </ul> 
      </div>    
    </div>
   </div>


@stop


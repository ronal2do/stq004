@extends('site.index')
@section('title')
  Atendimento médico
@stop
@section('content')
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Atendimento médico</h2>

      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 



  <div class="light-wrapper">
  
    <div class="container inner">
      
        <div class="col-sm-5">
            <figure><img src="{{ asset('images/atendimento/atendimento.jpg) }}" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-sm-7">
           <h1 >Atendimento Médico</h1>
          <p>
            Se você está com dengue ou simplesmente desconfia de alguns sintomas, procure uma 

unidade básica de saúde pública. Lá você fará os exames que podem confirmar a doença ou 

mesmo iniciar imediatamente um tratamento adequado, tudo de graça.
          </p>
          <p>
            Localize abaixo a unidade mais próxima de você. 
          </p>
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
        <li><b>UBS ALTO CAFEZAL</b> <br><i class="fa fa-map-marker"></i>  Rua Paes Lemes, 850 <br><i class="fa fa-phone"></i> Fone: (14) 3454-9168 / 3454-5831 <br><i class="fa fa-envelope"></i> E-mail: ubsaltocafezal@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>
        <li><b>UBS BANDEIRANTES</b> <br><i class="fa fa-map-marker"></i>  Rua Albericio Mendes Pinto, 96 <br><i class="fa fa-phone"></i> Fone: (14) 3432-4442 / 3413-7279 <br><i class="fa fa-envelope"></i> E-mail: ubsbandeirantes@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>
        <li><b>UBS CASCATA</b> <br><i class="fa fa-map-marker"></i>  Rua 9 de Julho, 283 <br><i class="fa fa-phone"></i> Fone: (14) 3432-1071 <br><i class="fa fa-envelope"></i> E-mail: ubscascata@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>
        <li><b>UBS CASTELO BRANCO</b> <br><i class="fa fa-map-marker"></i>  Rua Adamantina, 15 <br><i class="fa fa-phone"></i> Fone: (14) 3415-3916 / 3415-3908 <br><i class="fa fa-envelope"></i> E-mail: ubscastelobranco@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>
        <li><b>UBS CHICO MENDES</b> <br><i class="fa fa-map-marker"></i>  Rua Amador Bueno, 1085 <br><i class="fa fa-phone"></i> Fone: (14) 3413-6610 / 3432-3055 <br><i class="fa fa-envelope"></i> E-mail: ubschicomendes@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>
        <li><b>UBS COSTA E SILVA</b> <br><i class="fa fa-map-marker"></i>  Rua Fernando Fontana, 300 <br><i class="fa fa-phone"></i> Fone: (14) 3451-5233 / 3417-8480 <br><i class="fa fa-envelope"></i> E-mail: ubscostaesilva@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>

      </ul> 
      </div> 
      <div class="col-sm-6">
      <ul>
        <li><b>UBS J.K.</b><br><i class="fa fa-map-marker"></i>  Rua Lucílio Coelho de Oliveira, 5 <br><i class="fa fa-phone"></i> Fone: (14) 3415-2116 / 3415-3329 <br><i class="fa fa-envelope"></i> E-mail: ubsjksus@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>
        <li><b>UBS NOVA MARÍLIA</b> <br><i class="fa fa-map-marker"></i>  Av. Mem de Sá, 360-A <br><i class="fa fa-phone"></i> Fone: (14) 3451-1726 / 3451-2808 <br><i class="fa fa-envelope"></i> E-mail: ubsnovamarilia@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>
        <li><b>UBS PLANALTO </b><br><i class="fa fa-map-marker"></i>  Rua Gildo Bonato, 207 <br><i class="fa fa-phone"></i> Fone: (14) 3451-4669 / 3417-6184 <br><i class="fa fa-envelope"></i> E-mail: ubsplanaltomarilia@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>
        <li><b>UBS SÃO JUDAS</b> <br><i class="fa fa-map-marker"></i>  Rua Ribeirão Preto, 510 <br><i class="fa fa-phone"></i> Fone: (14) 3454-3025 / 3432-4686 <br><i class="fa fa-envelope"></i> E-mail: unidadesaojudas@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>
        <li><b>UBS SÃO MIGUEL </b><br><i class="fa fa-map-marker"></i>  Rua 24 de Dezembro, 2865 <br><i class="fa fa-phone"></i> Fone: (14) 3432-3509 / 3422-1528 <br><i class="fa fa-envelope"></i> E-mail: ubssaomiguelmarilia@gmail.com <br><i class="fa fa-clock-o"></i> Horário de Atendimento: das 7h00 às 18h00</li><br>
      </ul> 
      </div>    
    </div>
   </div>


@stop


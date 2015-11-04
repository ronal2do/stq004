@extends('site.index')
@section('title')
  Histórico
@stop
@section('content')
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Histórico</h2>
        <p class="lead">da dengue no Brasil</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 

 <div class="light-wrapper">
    <div class="container inner">
      

      <h1 ><i>No Brasil</i></h1>
    
      <p>
        Segundo dados do Ministério da Saúde, os casos de dengue no Brasil aumentaram em 122,7% com relação a 2014. Já no estado de São Paulo os números são ainda mais alarmantes, tendo mostrado um crescimento superior a 900%. 
      </p>
      <p>
        Grande parte deste surto se deve ao fato de que a dengue gosta do nosso clima tropical e se reproduz sem grandes dificuldades. Basta ela encontrar focos de água limpa para depositar seus ovos. Para reverter estes dados, é importante que a prevenção ocorra durante todo o ano. 
      </p>
    </div>
  </div>
  

  <div class="yellow-wrapper">
  
    <div class="container inner">
      

  
      <div class="row text-center facts">
         <h3 >Quadro comparativo</h3>
        <div class="col-sm-3">
          <div class="icon-large"> </div>
           <h2>217.654</h2>
           <h3>casos em</h3>
          <p>São Paulo - 2014</p>
        </div>
        <!--/column -->
        <div class="col-sm-3">
          <div class="icon-large">  </div>
          <h2>695.985</h2>
          <h3>casos em</h3>
          <p>São Paulo - 2015</p>
        </div>
        <!--/column -->
        <div class="col-sm-3">
          <div class="icon-large">  </div>
          
          <h2>533.524</h2>
          <h3>casos no</h3>
          <p>Brasil - 2014</p>
        </div>
        <!--/column -->
        <div class="col-sm-3">
          <div class="icon-large">  </div>
           
          <h2>1.485.397</h2>
          <h3>casos no</h3>
          <p>Brasil - 2015</p>
        </div>
        <!--/column --> 
      </div>
   </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->

@stop


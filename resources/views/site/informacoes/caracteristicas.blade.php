@extends('site.index')
@section('title')
  caracteristicas
@stop
@section('content')
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Caracteristicas</h2>
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
            <figure><img src="{{ asset('images/caracteristicas/caracteristicas.png') }}" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-sm-7">
           <h1 style="color: #6F4996;">Características do mosquito transmissor</h1>
          <p>
            <i>Aedes aegypti</i> é o nome científico do inseto conhecido como dengue. A princípio ele pode ser confundido com um simples pernilongo, mas sua aparência rajada em preto e branco denuncia a diferença que pode ser fatal. 
          </p> 
          <p>
            A dengue é natural de zonas tropicais e subtropicais como Marília, e se adaptou muito bem a áreas urbanas onde criadouros são facilmente encontrados. Durante a fase adulta, a fêmea pode depositar até 1.500 ovos, que podem resistir a mais de um ano no ambiente seco. 
          </p>
          </div>
        <!--/column -->
      </div>   
 </div>
  <!-- /.light-wrapper -->
  <div class="yellow-wrapper">
    <div class="container inner">
      
      
      <h1 >Caracteristicas | Hábitos do Vetor</h1>
      <h2 class="post-title">Texto</h2>
  
      <p>Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
   </div>
   
   <!-- /.container -->

  <!-- /.dark-wrapper -->

  <!-- /footer --> 
  

@stop


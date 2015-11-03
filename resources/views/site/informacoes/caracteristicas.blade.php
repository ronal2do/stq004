@extends('site.index')
@section('title')
  característica
@stop
@section('content')
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Características</h2>
        <p class="lead">Informações sobre a doença</p>
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
      
      
      <h1 >Informações sobre a doença</h1>

  
      <p>Após 3 dias da picada do mosquito, é possível começar a notar os sintomas. Eles possuem algumas diferenças entre a versão clássica e a hemorrágica. Confira:
      </p>
       <div class="col-sm-4">
      <h2 class="post-title">Dengue clássica</h2>
      <ul>
        <li>Febre alta (acima de 38°C)</li>
        <li>Dores de cabeça</li>
        <li>Dores atrás dos olhos</li>
        <li>Dores musculares</li>
        <li>Manchas e pequenas erupções na pele</li>
        <li>Náuseas e vômitos</li>
        <li>Cansaço anormal e indisposição</li>
      </ul>
    </div>
     <div class="col-sm-4">
      <h2 class="post-title">Dengue hemorrágica</h2>
      <ul>
        <li>Fortes dores abdominais</li>
        <li>Vômitos constantes, com ou sem sangue</li>
        <li> Pele pálida, fria e úmida </li>
        <li> Sangramento pelo nariz, boca e gengivas </li>
        <li> Manchas avermelhadas na pele </li>
        <li> Sonolência, agitação e confusão mental </li>
        <li> Sede excessiva e boca seca </li>
        <li> Dificuldade para respirar </li>
        <li> Pulso fraco </li>
        <li> Perda de consciência </li>
        <li> Dores de cabeça</li>
        <li>Dores atrás dos olhos</li>
        <li>Dores musculares</li>
        <li> Manchas e pequenas erupções na pele</li>
        <li>Náuseas e vômitos</li>
        <li>Cansaço anormal e indisposição</li>
      </ul>
    </div>
       <div class="col-sm-4">
      <h2 class="post-title">Dengue hemorrágica</h2>
      <ul>
        <li>Fortes dores abdominais</li>
        <li>Vômitos constantes, com ou sem sangue</li>
        <li> Pele pálida, fria e úmida </li>
        <li> Sangramento pelo nariz, boca e gengivas </li>
        <li> Manchas avermelhadas na pele </li>
        <li> Sonolência, agitação e confusão mental </li>
        <li> Sede excessiva e boca seca </li>
        <li> Dificuldade para respirar </li>
        <li> Pulso fraco </li>
        <li> Perda de consciência </li>
        <li> Dores de cabeça</li>
        <li>Dores atrás dos olhos</li>
        <li>Dores musculares</li>
        <li> Manchas e pequenas erupções na pele</li>
        <li>Náuseas e vômitos</li>
        <li>Cansaço anormal e indisposição</li>
      </ul>
    </div>
    </div>
   </div>
   
   <div class="dark-wrapper">
    
 <div class="container inner">
      
       
        <!--/column -->
        <div class="col-sm-7">
           <h1 >Como evitar</h1>
          <p>
            Lembre-se de que a maneira mais eficaz de evitar a transmissão da dengue é se prevenir.  Além dos cuidados como acúmulo de água também é recomendando o uso de repelentes específicos, salvo para crianças menores de 2 anos. Neste caso, é indicado o uso de mosquiteiros nos locais em que elas dormem. 
          </p>
          </div>
           <div class="col-sm-5">
            <img src="{{ asset('images/acoes/prefeitura2.png') }}" alt=""/>
        </div>
        <!--/column -->
  </div>  

</div>
<div class="purple-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-2 col-md-2">
          <h2><i>Mitos</i></h2>
        </div>
        <!--/column -->
        <div class="col-sm-4 col-md-4">
         <ul>
            <li style="color:#fff;">Ar-condicionado e ventiladores matam o mosquito</li>
            <li style="color:#fff;">Misturar café na água das plantas elimina as larvas</li>
            <li style="color:#fff;">O mosquito da dengue não chega aos andares altos</li>
            <li style="color:#fff;">Ingerir vitamina B aumenta a resistência contra a dengue</li>
          </ul>
         </div>
        <div class="col-sm-2 col-md-2">
          <h2><i>Verdades</i></h2>
        </div>
        <div class="col-sm-4 col-md-4">
        <ul>
            <li style="color:#fff;">A dengue gosta de picar na região das pernas</li>
            <li style="color:#fff;">O risco da gravidade aumenta quanto mais vezes se contrai a doença</li>
            <li style="color:#fff;">Vela de citronela é um repelente natural</li>
          </ul>
        </div>
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
    
  </div>
 
@stop


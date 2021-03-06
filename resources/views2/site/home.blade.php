@extends('site.index')
@section('title')
    Home
@stop
@section('content')
<div id="preloader" >
  <div class="textload" style="color:#643a90;">Carregando</div>
    <div id="status" >
    <div class="spinner"></div>
  </div>
</div>
<!-- revolution -->
  <div class="tp-fullscreen-container revolution">
    <div class="tp-fullscreen revslider-initialised tp-simpleresponsive" id="revslider-53" style="height: 100%; max-height: none;">
    <div class="tp-fullscreen">
      <ul>
        <li data-transition="fade"> 
          <img src="{{ asset('images/banner/home-marcacao1.jpg') }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
             <div class="tp-caption large text-center sfr" data-x="left" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut">A prefeitura</div>
             <div class="tp-caption large text-center sfr" data-x="left" data-y="463" data-speed="900" data-start="2000" data-easing="Sine.easeOut">vem trabalhado</div>
             <div class="tp-caption large text-center sfl" data-x="right" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut">
                   <img src="{{ asset('images/banner/mapa.jpg') }}" alt="">
            </div>            
        </li>
        <li data-transition="fade"> <img src="{{ asset('images/banner/home-marcacao2.jpg') }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut">Mantenha as calhas limpas</div>
          <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut">e livres de folhas</div>
        </li>
        <li data-transition="fade"> <img src="{{ asset('images/banner/home-marcacao3.jpg') }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut"> Preencha os pratos dos vasos</div>
         <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut"> de plantas com areia</div>

        </li>
        <li data-transition="fade"> <img src="{{ asset('images/banner/home-marcacao4.jpg') }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut">Mantenha caixas d’água fechadas</div>
          <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut">
        </li>
        <li data-transition="fade"> <img src="{{ asset('images/banner/home-marcacao5.jpg') }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut">Mantenha piscinas cobertas</div>
          <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut"> ou tratadas com cloro</div>
        </li>
     </ul>
 <div class="tp-bannertimer tp-bottom"></div> 
     <div class="tp-loader spinner0" style="display: none;"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>
    </div>
    
   </div>
    <!-- /.tp-fullscreen-container --> 
  </div>
  <!-- /.revolution -->
  <!-- /.light-wrapper --> 
  <div class="dark-wrapper">
    <div class="container inner">
      <div class="divide10"></div>
      <div class="carousel-wrapper">
        <div class="carousel carousel-boxed blog">
          @forelse ($posts as $post)
          <div class="item post">
            <a href="/posts/{{$post->id}}">
            <figure class="main"><img src="/uploads/images/{{$post->image}}" alt="{{$post->name}} " ></figure></a>
            <div class="box text-center">
              <div class="category cat9"><span><a href="/posts/{{$post->id}}">CONFIRA ></a></span></div>
              <h4 class="post-title"><a href="/posts/{{$post->id}}">{{$post->name}}</a></h4>
              <div class="meta"><span class="date">{{$post->date_old}}</span></div>
            </div>
            <!-- /.box -->             
          </div>
          <!-- /.post -->          
          @empty
             <p>Nenhuma postagem</p>
          @endforelse
          <!-- /.post --> 
        </div>
        <!--/.carousel --> 
      </div>
      <!--/.carousel-wrapper --> 
    </div>
    <!--/.container -->     
  </div>

   


  <!-- /.dark-wrapper -->
   <div class="purple-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <h2>Comitê<br> Municipal</h2>
        </div>
        <!--/column -->
        <div class="col-sm-8 col-md-9">
           <p>
                Trata-se de um núcleo articulador formado por representantes da sociedade civil (moradores) e entidades e organizações, como a Câmara de Vereadores, Ministério Público, sindicatos e associações de moradores. 
            </p>
              <p>
                São eles que irão traçar os planos de ação e repassar as decisões aos comitês regionais para que as execute. É também de responsabilidade do comitê municipal fiscalizar o andamento dos projetos com os voluntários. 
            </p>
        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container -->    
  </div>
  <div class="yellow-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-8 col-md-9">
          <p>
          Estes comitês são formados pelos moradores das cinco regiões (norte, sul, leste, oeste e centro). Eles servirão como ponte entre os representantes do comitê municipal e a população. Eles também deverão executar as ações propostas para a evitar o crescimento da dengue em Marília.  
        </p>
        </div>
        <!--/column -->
        <div class="col-sm-4 col-md-3">          
           <h2>Comitês<br> Regionais</h2>

        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container -->    
  </div>

 <div class="dark-wrapper">
    <div class="container inner">
      <div class="carousel-wrapper">
        <h2>Ações Preventivas.</h2><small>Confira  essas e outras ações preventivas.</small>
        <div class="carousel clients">
          <div class="item text-center"> <img src="{{ asset('images/dica1.png') }}" alt="apoiadores" /><p>nome da Ação</p> </div>
          <div class="item text-center"> <img src="{{ asset('images/dica2.png') }}" alt="apoiadores" /><p>nome da Ação</p> </div>
          <div class="item text-center"> <img src="{{ asset('images/dica3.png') }}" alt="apoiadores" /><p>nome da Ação</p> </div>
          <div class="item text-center"> <img src="{{ asset('images/dica4.png') }}" alt="apoiadores" /> <p>nome da Ação</p></div>
          <div class="item text-center"> <img src="{{ asset('images/dica5.png') }}" alt="apoiadores" /><p>nome da Ação</p> </div>
          <div class="item text-center"> <img src="{{ asset('images/dica6.png') }}" alt="apoiadores" /><p>nome da Ação</p> </div>
          <div class="item text-center"> <img src="{{ asset('images/dica7.png') }}" alt="apoiadores" /> <p>nome da Ação</p></div>
          <div class="item text-center"> <img src="{{ asset('images/dica8.png') }}" alt="apoiadores" /> <p>nome da Ação</p></div>
        </div>
      
      </div>
      
    </div>
  
  </div>
 
@stop
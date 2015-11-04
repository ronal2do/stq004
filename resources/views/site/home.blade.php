   
@extends('site.index')
@section('title')
    Home
@stop
@section('content')

  
    <!-- revolution -->
  <div class="tp-fullscreen-container revolution">
    <div class="tp-fullscreen">
      <ul>
        <li data-transition="fade"> <img src="{{ asset('images/banner/home-marcacao1.jpg') }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
           <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut">Guarde pneus em locais </div>
          <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut">cobertos e secos</div>
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
              <div class="meta"><span class="date">{{$post->updated_at}}</span></div>
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
        <div class="carousel clients">
          <div class="item"> <img src="{{ asset('images/parceiros/home-pco.png') }}" alt="apoiadores" /> </div>
          <div class="item"> <img src="{{ asset('images/parceiros/home-pco.png') }}" alt="apoiadores" /> </div>
          <div class="item"> <img src="{{ asset('images/parceiros/home-pco.png') }}" alt="apoiadores" /> </div>
          <div class="item"> <img src="{{ asset('images/parceiros/home-pco.png') }}" alt="apoiadores" /> </div>
          <div class="item"> <img src="{{ asset('images/parceiros/home-pco.png') }}" alt="apoiadores" /> </div>
          <div class="item"> <img src="{{ asset('images/parceiros/home-pco.png') }}" alt="apoiadores" /> </div>
          <div class="item"> <img src="{{ asset('images/parceiros/home-pco.png') }}" alt="apoiadores" /> </div>
          <div class="item"> <img src="{{ asset('images/parceiros/home-pco.png') }}" alt="apoiadores" /> </div>
        </div>
        <!--/.carousel --> 
      </div>
      <!--/.carousel-wrapper --> 
    </div>
    <!--/.container --> 
  </div>

        <!-- /.row -->
        @stop
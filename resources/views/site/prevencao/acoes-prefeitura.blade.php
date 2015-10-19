@extends('site.index')
@section('title')
  Ações Individuais
@stop
@section('content')
   
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Ações Prefeitura</h2>
        <p class="lead">Lorem dolem Ipsum</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  
 
  <!-- /.dark-wrapper -->
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-5">
          <figure><img src="{{ asset('images/Ass-Marilia.png') }}" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-sm-7">
          <h3 class="section-title">Lorem Dolem Ipsum Sit Amet</h3>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur.  Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris.</p>
          <div class="small-quote">
            <blockquote>
              <p> Vestibulum ligut praesent commodo cursus magna erat, consectetur et. Cum socis natoque penatibus et magnis dis. Curabitur blandit tempus porttitor.</p>
            </blockquote>
          </div>
          <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
     
    
      <!--/.row -->
    </div>
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->
  
<div class="yellow-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center">Prefeitura Agindo</h3>
      <div class="row grid-view">
        <div class="col-sm-3 text-center">
          <figure><img src="{{ asset('images/t1.jpg') }}" alt=""></figure>
          <h4 class="post-title">Unidade Especial de Saúde</h4>
        
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam praesent.</p>
          
        </div>
        <!-- /column -->
         <div class="col-sm-3 text-center">
          <figure><img src="{{ asset('images/t1.jpg') }}" alt=""></figure>
          <h4 class="post-title">Mutirão de Visitas</h4>
        
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam praesent.</p>
          
        </div> <div class="col-sm-3 text-center">
          <figure><img src="{{ asset('images/t1.jpg') }}" alt=""></figure>
          <h4 class="post-title">Mutirão de Mobilização</h4>
        
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam praesent.</p>
          
        </div> <div class="col-sm-3 text-center">
          <figure><img src="{{ asset('images/t1.jpg') }}" alt=""></figure>
          <h4 class="post-title">Multas Domiciliáres</h4>
        
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam praesent.</p>
          
        </div>
         <div class="col-sm-3 text-center">
          <figure><img src="{{ asset('images/t1.jpg') }}" alt=""></figure>
          <h4 class="post-title">Multas imóveis abandonados</h4>
        
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam praesent.</p>
          
        </div>
        <!-- /column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  

  
  

@stop


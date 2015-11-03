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
  <div class="yellow-wrapper">
    <div class="container inner">
      <blockquote>Teste</blockquote>  
     
    </div>
   </div>
 
   <!-- /.container -->

  <!-- /.dark-wrapper -->

  <!-- /footer --> 
  

@stop


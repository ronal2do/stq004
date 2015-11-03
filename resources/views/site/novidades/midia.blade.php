@extends('site.index')
@section('title')
  Ações Individuais
@stop
@section('content')
   
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>A campanha na mídia</h2>

      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  
 
  <!-- /.dark-wrapper -->
  
  <!-- /.light-wrapper -->
  
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="thin">
        <h3 class="section-title text-center">Alguns detalhes</h3>
        
        </div>
      <!-- /.thin -->
   
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
  </div>
  
    <div class="yellow-wrapper">
    <div class="container inner">
         <div class="divide10"></div>
      <div class="row">
        <div class="col-sm-4">
          <div class="caption-overlay">
            <figure><a href="#"><img src="{{ asset('uploads/images/b2.jpg') }}" alt=""> </a></figure>
            <div class="caption bottom-right">
              <div class="title">
                <h3 class="main-title layer">Jornal</h3>
              </div>
              <!--/.title --> 
            </div>
            <!--/.caption --> 
          </div>
        </div>
        <!-- /column -->
        <div class="col-sm-4">
          <div class="caption-overlay">
            <figure><a href="#"><img src="{{ asset('uploads/images/b2.jpg') }}" alt=""> </a></figure>
            <div class="caption bottom-right">
              <div class="title">
                <h3 class="main-title layer">Revista</h3>
              </div>
              <!--/.title --> 
            </div>
            <!--/.caption --> 
          </div>
        </div>
        <!-- /column -->
        <div class="col-sm-4">
          <div class="caption-overlay">
            <figure><a href="#"><img src="{{ asset('uploads/images/b2.jpg') }}" alt=""> </a></figure>
            <div class="caption bottom-right">
              <div class="title">
                <h3 class="main-title layer">Televisão</h3>
              </div>
              <!--/.title --> 
            </div>
            <!--/.caption --> 
          </div>
        </div>
        <!-- /column --> 
      </div>
        
     
    </div>
  </div>
  
  
  

@stop


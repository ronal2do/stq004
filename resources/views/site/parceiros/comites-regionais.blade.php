@extends('site.index')
@section('title')
  comites regionais
@stop
@section('content')
   
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Comitês Regionais</h2>
       
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  <div class="light-wrapper">
    <div class="container inner">
      <div class="col-image">
      <div class="bg-wrapper col-md-6">
        <div class="bg-holder" style="background-image: url({{ asset('images/comites/regionais.png') }});"></div>
      </div>
      <!--/.bg-wrapper -->
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-md-offset-7 inner-col">
            
            <p>
       Estes comitês são formados pelos moradores das cinco regiões (norte, sul, leste, oeste e centro). Eles servirão como ponte entre os representantes do comitê municipal e a população. Eles também deverão executar as ações propostas para a evitar o crescimento da dengue em Marília.   </p>

            <!-- /.progress-list --> 
          </div>
        </div>
           
        <!--/.row --> 
      </div>
      <!--/.container --> 
    </div>
</div>

 
  </div>
  
 
  
  

@stop


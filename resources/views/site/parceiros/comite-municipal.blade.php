@extends('site.index')
@section('title')
  comite-municipal
@stop
@section('content')
   
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Comitê Municipal</h2>
       
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
 

  <div class="light-wrapper">
       <div class="container inner">
      <div class="col-image">
      <div class="bg-wrapper col-md-6">
        <div class="bg-holder" style="background-image: url({{ asset('images/comites/municipal.png') }});"></div>
      </div>
      <!--/.bg-wrapper -->
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-md-offset-7 inner-col">
            
            <p>
       Trata-se de um núcleo articulador formado por representantes da sociedade civil (moradores) e entidades e organizações, como a câmara de vereadores, ministério público, sindicatos e associações de moradores. 
</p><p>
São eles que irão traçar os planos de ação e repassar as decisões aos comitês regionais para que as execute. É também de responsabilidade do comitê municipal fiscalizar o andamento dos projetos com os voluntários. 
</p>
            <!-- /.progress-list --> 
          </div>
        </div>
      </div>
        <!--/.row --> 
      </div>
      <!--/.container --> 
    </div>


 
  </div>
  
@stop


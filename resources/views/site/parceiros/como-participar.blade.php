@extends('site.index')
@section('title')
  Como participar
@stop
@section('content')
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Como participar?</h2>

      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 



  <div class="light-wrapper">
  
    <div class="container inner">
      
      <div class="divide30"></div>
     <h3> A sua cooperação como voluntário é fundamental. </h3>
      <p>
      Preencha um breve cadastro abaixo e faça parte de um comitê regional, ele colocará em prática para acabarmos com a dengue em Marília.
        </p>
        <hr>

        {!! Form::open(array('url' => '/', 'class'=>'form-group')) !!}
                    <input type="email"
                       name="email"
                       placeholder="E-mail:"
                       size="47"
                       class="form-field"
                       required
                       ><br><br>
                    <input type="phone"
                       name="phone"
                       placeholder="Telefone:"
                       size="47"
                       class="form-field"
                       required
                       ><br><br>
                    <input type="nasc"
                       name="nasc"
                       placeholder="Nascimento:"
                       size="47"
                       class="form-field"
                       required
                       ><br><br>
                    <input type="name"
                       name="name"
                       placeholder="Nome:"
                       size="47"
                       class="form-field"
                       required
                       ><br><br>
                    
                    <input type="submit"
                       class="btn btn-success"
                       value="Participar"
                       >
                    
       {!! Form::close() !!}      
   </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->


@stop


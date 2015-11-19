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
      

     
        {!! Form::open(array('url' => '/', 'class'=>'form-group')) !!}
       <div class="row">
        <div class="col-sm-8">
          <h2 class="section-title">A sua cooperação como voluntário é fundamental.</h2>
          <p>
            Preencha um breve cadastro abaixo e faça parte de um comitê regional, ele nos ajuda a colocar em prática ações de combate à dengue em Marília.
          </p>  
          <div class="divide10"></div>
          <div class="form-container">
            <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate="novalidate">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="name" placeholder="Seu Nome" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="email" name="email" placeholder="E-mail" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                 <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="name" placeholder="Nascimento" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="email" name="email" placeholder="Bairro" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="tel" name="tel" placeholder="Telefone">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>

                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label class="custom-select">
                      <select name="department" required="required">
                        <option value="">Quero ser: v</option>
                        <option value="Sales">Voluntário</option>
                        <option value="Marketing">Patrocinador</option>
                        <option value="Support">Colaborador</option>
                        <option value="Other">Outro</option>
                      </select>
                      <span><!-- fake select handler --></span> </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column --> 
              </div>
              <!--/.row -->
              <textarea name="message" placeholder="Quais horários você pode colaborar..." required="required"></textarea>
              
              <!--/.radio-set -->
              <input type="submit" class="btn btn-sm btn-roxo" value="Enviar" data-error="Apenas teste" data-processing="Enviando..." data-success="Obrigado!" data-initial="Send">
              <footer class="notification-box"></footer>
            </form>
     
            <!--/.vanilla-form --> 
          </div>
          <!--/.form-container --> 
          
        </div>
        <!--/column -->
        
       <aside class="col-sm-4 sidebar">
          @include('site.resources.banner')
         
          <div class="sidebox widget">
            <h3 class="widget-title">Instagram</h3>
            <div class="image-grid col3">
              <div class="items-wrapper">
                <div id="instafeed-widget" class="isotope items"></div>
              </div>
            </div>
          </div>
        </aside>

      </div>
                    
       {!! Form::close() !!} 
       <hr>     
   </div>

  </div>
  <!-- /.light-wrapper -->


@stop


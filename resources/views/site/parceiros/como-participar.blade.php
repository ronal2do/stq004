@extends('site.index')
@section('title')
  Como participar
@stop
@section('content')
<style>
  .vanilla-form input[type="radio"], .vanilla-form input[type="checkbox"] {
    position: absolute;
    pointer-events: none;
    opacity: 0;
    margin: 0;
    padding: 0;
    height: 10px;
}
.vanilla-form .radio-set label {
    margin-right: 10px;
}
</style>
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
      

     
        {!! Form::open(array('url' => '/voluntario', 'class'=>'form-group')) !!}
       <div class="row">
        <div class="col-sm-8">
          <h2 class="section-title">A sua cooperação como voluntário é fundamental.</h2>
          <p>
            Assinale os dias, turnos e quantidade de horas que você poderá dispor para trabalhar a cada semana como voluntário. Se preferir, escreva no quadro abaixo sua programação.
          </p>  
          <div class="divide10"></div>
          <div class="form-container">
           
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="name" placeholder="Nome">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="email" name="email" placeholder="E-mail">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                 <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input id="nascimento" type="text" name="nascimento" placeholder="Nascimento">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="bairro" placeholder="Bairro">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <div class="col-sm-12">
                  <div class="form-field">
                    <label>
                      <input type="text" name="endereco" placeholder="Endereço">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="tel" placeholder="Telefone">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->

                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="ocupacao" placeholder="Ocupação">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column --> 
               
              </div>
            
             <div class="radio">
                <div class="radio-set">
                <label><b>Dias da semana:</b> </label><br/>
                <label>
                  <input type="radio" name="dias" value="domingo">
                  <span><!-- fake radio --></span> domingo</label>
                <label>
                  <input type="radio" name="dias" value="segunda">
                  <span><!-- fake radio --></span> segunda</label>
                <label>
                  <input type="radio" name="dias" value="terca">
                  <span><!-- fake radio --></span> Terça</label>
                <label>
                  <input type="radio" name="dias" value="quarta">
                  <span><!-- fake radio --></span> Quarta</label>
                 <label>
                  <input type="radio" name="dias" value="quinta">
                  <span><!-- fake radio --></span> quinta</label>
                <label>
                  <input type="radio" name="dias" value="sexta">
                  <span><!-- fake radio --></span> sexta</label>
                <label>
                  <input type="radio" name="dias" value="sabado">
                  <span><!-- fake radio --></span> sabado</label>
              </div>

              <div class="radio-set">
                <label><b>Periodo: </b></label><br/>
                <label>
                  <input type="radio" name="periodo" value="manha">
                  <span><!-- fake radio --></span> manha</label>
                <label>
                  <input type="radio" name="periodo" value="tarde">
                  <span><!-- fake radio --></span> tarde</label>
                <label>
                  <input type="radio" name="periodo" value="noite">
                  <span><!-- fake radio --></span> noite</label>               
              </div>

              <div class="radio-set">
                <label><b>Tempo: </b></label><br/>
                <label>
                  <input type="radio" name="horas" value="1h">
                  <span><!-- fake radio --></span> 1h</label>
                <label>
                  <input type="radio" name="horas" value="2h">
                  <span><!-- fake radio --></span> 2h</label>
                <label>
                  <input type="radio" name="horas" value="3h">
                  <span><!-- fake radio --></span> 3h</label>
                <label>
                  <input type="radio" name="horas" value="4h">
                  <span><!-- fake radio --></span> 4h</label>
              </div>

             </div>
              <!--/.row -->
              <textarea name="message" placeholder="Outros detalhes à adicionar"></textarea>
              
              <!--/.radio-set -->
              <input type="submit" class="btn btn-sm btn-roxo" value="Enviar" >
              <footer class="notification-box"></footer>
          
     
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
@section('post-script')

@endsection


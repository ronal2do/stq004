@extends('site.index')
@section('title')
  caracteristicas
@stop
@section('content')
    <div class="offset" style="padding-top: 90px;"></div>
  <!-- /.dark-wrapper -->
<div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-8">
          <h2 class="section-title">Inserir alerta</h2>
          <p>Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus.</p>
          <div class="divide10"></div>
          <div class="form-container">
            <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate="novalidate">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="name" placeholder="Endereço" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="email" name="email" placeholder="Upload Foto" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="tel" name="tel" placeholder="Informação">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label class="custom-select">
                      <select name="department" required="required">
                        <option value="">Informação</option>
                        <option value="Sales">Informação</option>
                        <option value="Marketing">Informação</option>
                        <option value="Support">Informação</option>
                        <option value="Other">Informação</option>
                      </select>
                      <span><!-- fake select handler --></span> </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column --> 
              </div>
              <!--/.row -->
              <textarea name="message" placeholder="Dê a descriçao..." required="required"></textarea>
              <div class="radio-set">
                <label>Informação:</label>
                <label>
                  <input type="radio" name="subject" value="Geral">
                  <span><!-- fake radio --></span> Geral</label>
                <label>
                  <input type="radio" name="subject" value="Oi">
                  <span><!-- fake radio --></span> Oi</label>
                <label>
                  <input type="radio" name="subject" value="Outra">
                  <span><!-- fake radio --></span> Outra</label>
              </div>
              <!--/.radio-set -->
              <input type="submit" class="btn state-initial" value="Enviar" data-error="Deu pau!" data-processing="Sending..." data-success="Thank you!" data-initial="Send">
              <footer class="notification-box"></footer>
            </form>
            <!--/.vanilla-form --> 
          </div>
          <!--/.form-container --> 
          
        </div>
        <!--/column -->
        
        <aside class="col-sm-4">
          <div class="sidebox widget">
            <h3 class="widget-title">Texto</h3>
            <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur.</p>
            
          </div>
          <!-- /.widget --> 
          
        </aside>
        <!--/column --> 
        
      </div>
      <!--/.row --> 
      
    </div>
    <!--/.container --> 
  </div>
  <!-- /footer --> 
  

@stop


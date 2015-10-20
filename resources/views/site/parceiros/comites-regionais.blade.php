@extends('site.index')
@section('title')
  comites regionais
@stop
@section('content')
   
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url({{ asset('images/fundo.png') }});">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Comitês Regionais</h2>
        <p class="lead">Lorem dolem Ipsum</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  
  <div class="dark-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center">Quem faz?</h3>
      <div class="row grid-view">
        <div class="col-sm-1 text-center">
          
        </div>
        <div class="col-sm-2 text-center">
          <figure><img src="style/images/art/t1.jpg" alt="" /></figure>
          <h4 class="post-title">Nikola Brooten</h4>
          <div class="meta">Comitê Regional Sul</div>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam praesent.</p>
          <ul class="social naked bigger text-center">
            <li><a href="#"><i class="icon-s-twitter"></i></a></li>
            <li><a href="#"><i class="icon-s-facebook"></i></a></li>
            <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
          </ul>
        </div>
        <!-- /column -->
        <div class="col-sm-2 text-center">
          <figure><img src="style/images/art/t2.jpg" alt="" /></figure>
          <h4 class="post-title">Coriss Ambady</h4>
          <div class="meta">Comitê Regional Norte</div>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros sed posuere.</p>
          <ul class="social naked bigger text-center">
            <li><a href="#"><i class="icon-s-twitter"></i></a></li>
            <li><a href="#"><i class="icon-s-instagram"></i></a></li>
          </ul>
        </div>
        <!-- /column -->
        <div class="col-sm-2 text-center">
          <figure><img src="style/images/art/t3.jpg" alt="" /></figure>
          <h4 class="post-title">Elsie Spear</h4>
          <div class="meta">Comitê Regional Leste</div>
          <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula.</p>
          <ul class="social naked bigger text-center">
            <li><a href="#"><i class="icon-s-twitter"></i></a></li>
            <li><a href="#"><i class="icon-s-instagram"></i></a></li>
            <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
          </ul>
        </div>
        <!-- /column -->
        <div class="col-sm-2 text-center">
          <figure><img src="style/images/art/t4.jpg" alt="" /></figure>
          <h4 class="post-title">Barclay Widerski</h4>
          <div class="meta">Comitê Regional Oeste</div>
          <p>Maecenas faucibus mollis interdum. Aenean eu leo quam ornare sem.</p>
          <ul class="social naked bigger text-center">
            <li><a href="#"><i class="icon-s-facebook"></i></a></li>
            <li><a href="#"><i class="icon-s-vimeo"></i></a></li>
          </ul>
        </div>
        <!-- /column --> 
        <div class="col-sm-2 text-center">
          <figure><img src="style/images/art/t4.jpg" alt="" /></figure>
          <h4 class="post-title">Barclay Widerski</h4>
          <div class="meta">Comitê Regional Centro</div>
          <p>Maecenas faucibus mollis interdum. Aenean eu leo quam ornare sem.</p>
          <ul class="social naked bigger text-center">
            <li><a href="#"><i class="icon-s-facebook"></i></a></li>
            <li><a href="#"><i class="icon-s-vimeo"></i></a></li>
          </ul>
        </div>
        <div class="col-sm-1 text-center">
          
        </div>
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!-- /.dark-wrapper -->
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-5">
          <figure><img src="style/images/art/thecompany.jpg" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-sm-7">
          <h3 class="section-title">about the company</h3>
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
      <div class="divide60"></div>
      <div class="row">
        <div class="col-sm-4">
          <h3>Our Skills</h3>
          <p>Duis non lectus sit amet est imperdiet cursus elementum vitae eros. Etiam adipiscingmorbi vitae magna tellus, ac mattis urna phasellus rhoncus.</p>
          <div class="divide10"></div>
          <ul class="progress-list">
            <li>
              <p>Photoshop <em>90%</em></p>
              <div class="progress plain">
                <div class="bar" data-width="90"></div>
              </div>
            </li>
            <li>
              <p>Final Cut <em>80%</em></p>
              <div class="progress plain">
                <div class="bar" data-width="80"></div>
              </div>
            </li>
            <li>
              <p>Studio Photography <em>85%</em></p>
              <div class="progress plain">
                <div class="bar" data-width="85"></div>
              </div>
            </li>
            <li>
              <p>Motion Video <em>75%</em></p>
              <div class="progress plain">
                <div class="bar" data-width="75"></div>
              </div>
            </li>
          </ul>
          <!-- /.progress-list --> 
        </div>
        <!--/column -->
        <div class="col-sm-4">
          <h3>Why Choose Us?</h3>
          <div class="divide5"></div>
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle active" data-parent="#accordion" href="#collapseOne"> 100% Responsive </a> </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda et.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion" href="#collapseTwo"> Clean & Professional Design </a> </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion" href="#collapseThree"> Collapsible Group Item #3 </a> </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
              </div>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-sm-4">
          <h3>Our Featured Services</h3>
          <div class="feature">
            <div class="icon"> <i class="budicon-camera-1 icn"></i> </div>
            <h4>Photography</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <!--/.feature -->
          <div class="feature">
            <div class="icon"> <i class="budicon-video-1 icn"></i> </div>
            <h4>Motion Video</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <!--/.feature -->
          <div class="feature">
            <div class="icon"> <i class="budicon-radio icn"></i> </div>
            <h4>Sound Design</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <!--/.feature --> 
          
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->
  
  

  
  

@stop


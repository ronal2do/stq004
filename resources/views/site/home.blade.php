   
@extends('site.index')
@section('title')
    Home
@stop
@section('content')

    
    <!-- revolution -->
  <div class="tp-fullscreen-container revolution">
    <div class="tp-fullscreen">
      <ul>
        <li data-transition="fade"> <img src="{{ asset('images/fundo.png') }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <h1 class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Watto</h1>
          <div class="tp-caption medium sfr" data-x="30" data-y="348" data-speed="900" data-start="1500" data-easing="Sine.easeOut">Leia skywalker watto ackbar <br>
           Moff watto anakin</div>
        </li>
        <li data-transition="fade"> <img src="{{ asset('images/fundo.png') }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut">Leia skywalker watto ackbar</div>
          <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut">Moff watto anakin</div>
        </li>
        <li data-transition="fade"> <img src="{{ asset('images/fundo.png') }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900" data-start="800" data-easing="Sine.easeOut">Leia skywalker watto ackbar</div>
          <div class="tp-caption medium text-center sfb" data-x="center" data-y="387" data-speed="900" data-start="1500" data-easing="Sine.easeOut">Moff watto anakin</div>
        </li>
        <li data-transition="fade"> <img src="{{ asset('images/fundo.png') }}" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
          <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900" data-start="800" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">Leia skywalker watto ackbar</div>
          <div class="tp-caption medium text-center sfb" data-x="center" data-y="387" data-speed="900" data-start="1500" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">Moff watto anakin</div>
          <div class="tp-caption tp-fade fadeout fullscreenvideo" data-x="0" data-y="0" data-speed="1000" data-start="1100" data-easing="Power4.easeOut" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1500" data-endeasing="Power4.easeIn" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true" data-dottedoverlay="twoxtwo" data-volume="mute" data-forcecover="1" data-aspectratio="16:9" data-forcerewind="on" style="z-index: 1;">
            <video class="" preload="none" width="100%" height="100%" poster="lydia/nyc.jpg">
              <source src="lydia/nyc.mp4" type="video/mp4">
              <source src="lydia/nyc.webm" type="video/webm">
            </video>
          </div>
        </li>
      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
    </div>
    <!-- /.tp-fullscreen-container --> 
  </div>
  <!-- /.revolution -->
  <!-- /.light-wrapper -->
  
  <div class="dark-wrapper">
    <div class="container inner">
     
      <div class="divide10"></div>
      <div class="carousel-wrapper">
        <div class="carousel carousel-boxed blog">
          <div class="item post">
            <figure class="main"><img src="lydia/b1.jpg" alt=""></figure>
            <div class="box text-center">
              <div class="category cat9"><span><a href="lydia/saved_resource">Ação N</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Parturient Commodo Aenean</a></h4>
             <!-- <div class="meta"><span class="date">14 Oct 2014</span><span class="comments"><a href="lydia/saved_resource"><i class="icon-chat-1"></i> 15</a></span></div>
             --> <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient. Curabitur blandit tempus lacinia odio.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          
          <div class="item post">
            <figure class="main"><img src="lydia/b2.jpg" alt=""></figure>
            <div class="box text-center">
              <div class="category cat9"><span><a href="lydia/saved_resource">Ação 1</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Quam Mollis Ligula Nullam</a></h4>
             <!-- <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="lydia/saved_resource"><i class="icon-chat-1"></i> 15</a></span></div>
             --> <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus. Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          
          <div class="item post">
            <figure class="main"><img src="lydia/b3.jpg" alt=""></figure>
            <div class="box text-center">
              <div class="category cat9"><span><a href="lydia/saved_resource">Ação 2</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Tellus Bibendum Parturient</a></h4>
             <!-- <div class="meta"><span class="date">23 Dec 2014</span><span class="comments"><a href="lydia/saved_resource"><i class="icon-chat-1"></i> 15</a></span></div>
             --> <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor. Sed posuere consectetur est at. Duis mollis, est.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          <div class="item post">
            <figure class="main"><img src="lydia/b4.jpg" alt=""></figure>
            <div class="box text-center">
              <div class="category cat9"><span><a href="lydia/saved_resource">Ação 3</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Parturient Commodo Aenean</a></h4>
             <!-- <div class="meta"><span class="date">14 Oct 2014</span><span class="comments"><a href="lydia/saved_resource"><i class="icon-chat-1"></i> 15</a></span></div>
             --> <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient. Curabitur blandit tempus lacinia.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          
          <div class="item post">
            <figure class="main"><img src="lydia/b5.jpg" alt=""></figure>
            <div class="box text-center">
              <div class="category cat9"><span><a href="lydia/saved_resource">Ação 4</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Quam Mollis Ligula Nullam</a></h4>
             <!-- <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="lydia/saved_resource"><i class="icon-chat-1"></i> 15</a></span></div>
             --> <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus. Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          
          <div class="item post">
            <figure class="main"><img src="lydia/b6.jpg" alt=""></figure>
            <div class="box text-center">
              <div class="category cat9"><span><a href="lydia/saved_resource">Ação 5</a></span></div>
              <h4 class="post-title"><a href="blog-post.html">Tellus Bibendum Parturient</a></h4>
             <!-- <div class="meta"><span class="date">23 Dec 2014</span><span class="comments"><a href="lydia/saved_resource"><i class="icon-chat-1"></i> 15</a></span></div>
             --> <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor. Sed posuere consectetur est at. Duis mollis, est non.</p>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post --> 
        </div>
        <!--/.carousel --> 
      </div>
      <!--/.carousel-wrapper --> 
    </div>
    <!--/.container --> 
    
  </div>
  <!-- /.dark-wrapper -->
   <div class="purple-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <h2>Comitê<br> Municipal</h2>
        </div>
        <!--/column -->
        <div class="col-sm-8 col-md-9">
           <p>
         Tee chuta hhat yudd! Goodness gracious me! Artoo Detoowha bo Seethreepiowha ey toota odd mischka Jabba du Hutt. 
         I don't think they're going to let us in, Artoo. We'd better go. Artoo, wait. 
         Oh, dear! Artoo. Artoo, I really don't think we should rush into all this. Oh, Artoo! Artoo, wait for me! 
         Just you deliver Master Luke's message and get us out of here. Oh my! Oh! Oh, no.
          </p>

        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
    
  </div>



  <div class="yellow-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-8 col-md-9">
          <p>
         Tee chuta hhat yudd! Goodness gracious me! Artoo Detoowha bo Seethreepiowha ey toota odd mischka Jabba du Hutt. 
         I don't think they're going to let us in, Artoo. We'd better go. Artoo, wait. 
         Oh, dear! Artoo. Artoo, I really don't think we should rush into all this. Oh, Artoo! Artoo, wait for me! 
         Just you deliver Master Luke's message and get us out of here. Oh my! Oh! Oh, no.
          </p> 
        </div>
        <!--/column -->
        <div class="col-sm-4 col-md-3">
          
           <h2>Comitês<br> Regionais</h2>
        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
    
  </div>

 <div class="dark-wrapper">
    <div class="container inner">
      <div class="carousel-wrapper">
        <div class="carousel clients">
          <div class="item"> <img src="style/images/art/c1.png" alt="" /> </div>
          <div class="item"> <img src="style/images/art/c2.png" alt="" /> </div>
          <div class="item"> <img src="style/images/art/c3.png" alt="" /> </div>
          <div class="item"> <img src="style/images/art/c4.png" alt="" /> </div>
          <div class="item"> <img src="style/images/art/c5.png" alt="" /> </div>
          <div class="item"> <img src="style/images/art/c6.png" alt="" /> </div>
          <div class="item"> <img src="style/images/art/c7.png" alt="" /> </div>
          <div class="item"> <img src="style/images/art/c8.png" alt="" /> </div>
        </div>
        <!--/.carousel --> 
      </div>
      <!--/.carousel-wrapper --> 
    </div>
    <!--/.container --> 
  </div>

        <!-- /.row -->
        @stop
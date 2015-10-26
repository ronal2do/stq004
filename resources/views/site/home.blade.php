   
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
          



          
          


          @forelse ($posts as $post)
          
          <div class="item post">
            <figure class="main"><img src="/uploads/images/{{$post->image}}" alt="{{$post->name}}"></figure>
            <div class="box text-center">
              <div class="category cat9"><span><a href="/novidades">CONFIRA ></a></span></div>
              <h4 class="post-title"><a href="/novidades">{{$post->name}}</a></h4>
              <div class="meta"><span class="date">{{$post->updated_at}}</span></div>
            </div>
            <!-- /.box --> 
            
          </div>
          <!-- /.post -->
          
          @empty
             <p>Nenhuma postagem</p>
          @endforelse



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
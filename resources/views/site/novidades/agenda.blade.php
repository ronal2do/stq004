@extends('site.index')
@section('title')
    Agenda
@stop
@section('content')
<div class="offset"></div>
  <div class="dark-wrapper">
    <div class="container inner2">
      <div class="blog row">
        <div class="col-sm-8 blog-content">
          <div class="blog-posts classic-view">
            <div class="post">
              <div class="box text-center">
              
                <h2 class="section-title">Agenda</h2>
                          
                <p style="text-align:left;">
                  Agenda dos comitês regionais/distritais - inicialmente todas as reuniões desses comitês acontecerão toda sexta-feira, 10hrs, simultaneamente em todos os locais.
                </p>
   
               
                <!-- .post-footer --> 
              </div>
              <!-- /.box --> 
              
            </div>
            <!-- .post -->
            
            
          
            
            
            <!-- /.box -->
            
            
            <!-- /.box --> 
            
          </div>
          <!-- /.classic-view --> 
          
        </div>
        <!-- /.blog-content -->
        
        <aside class="col-sm-4 sidebar">
         @include('site.resources.banner')
          <!-- /.widget -->
          
         
          <!-- /.widget -->
          <div class="sidebox widget">
            <h3 class="widget-title">Ultimas Postagens</h3>
            <ul class="post-list">
              @forelse ($postagems as $postagem)
              <li>
                <div class="icon-overlay"> <a href="/posts/{{$postagem->id}}"><img src="/uploads/images/{{$postagem->image}}" alt="" /> </a> </div>
                <div class="meta">
                  <h5><a href="/posts/{{$postagem->id}}">{{$postagem->name}}</a></h5>
                  <em><span class="date">{{$postagem->date_old}}</span> </em> </div>
              </li>
             @empty
                <h5>Nenhuma postagem</h5>
             @endforelse
            </ul>
            <!-- /.post-list --> 
          </div>
          <!-- /.widget -->
          
        
          
        
          <!-- /.widget -->
          
          <div class="sidebox widget">
            <h3 class="widget-title">Instagram</h3>
            <div class="image-grid col3">
              <div class="items-wrapper">
                <div id="instafeed-widget" class="isotope items"></div>
                
                <!--/.isotope --> 
              </div>
              <!--/.items-wrapper --> 
            </div>
            <!--/.image-grid --> 
          </div>
          <!-- /.widget --> 
          
        </aside>
        <!-- /column .sidebar --> 
        
      </div>
      <!-- /.blog --> 
    </div>
    <!--/.container -->
  </div>
  @stop
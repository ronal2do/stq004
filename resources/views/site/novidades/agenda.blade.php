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
                          
<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ronaldo.lima%40sotaquepropaganda.com.br&amp;color=%231B887A&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%2328754E&amp;src=snd68d31nkl1mnliq4gl1hvk2k%40group.calendar.google.com&amp;color=%23AB8B00&amp;src=pt.brazilian%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;src=sotaquepropaganda.com.br_70un0tkid4sktqv9rrjs0ng474%40group.calendar.google.com&amp;color=%232F6309&amp;ctz=America%2FSao_Paulo" style="border-width:0" width="700" height="600" frameborder="0" scrolling="no"></iframe>
   
               
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
          <div class="sidebox widget">
            <figure><img src="{{ asset('images/banner_lateral.jpg') }}" alt="" /></figure>
              <ul class="social">
              <li><a href="#"><i class="icon-s-rss"></i></a></li>
              <li><a href="#"><i class="icon-s-twitter"></i></a></li>
              <li><a href="#"><i class="icon-s-facebook"></i></a></li>
              <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
              <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
              <li><a href="#"><i class="icon-s-dribbble"></i></a></li>
              <li><a href="#"><i class="icon-s-flickr"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
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
                  <em><span class="date">{{$postagem->updated_at}}</span> </em> </div>
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
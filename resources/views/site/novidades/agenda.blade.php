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
              <div class="box text-left">
              
                <h2 class="section-title">Agenda</h2>
                          
                <p style="text-align:left;">
                  Inicialmente todas as reuniões dos comitês acontecerão às sextas-feiras, às 10h, simultaneamente em todos os locais.
                </p>
                 <p>
              <b>1) MUTIRÃO DE LIMPEZA "MARÍLIA SEM DENGUE"</b><br/>
                  Dias 7-8 e 9/Dez. na região norte<br/>
                  Retire todo material descartável de seu quintal<br/>
                  Vamos vencer mais este desafio

              </p>
              <p><b>2) MUTIRÃO DE LIMPEZA "MARÍLIA SEM DENGUE"</b><br/>
                        Dias 10-11 e 14/Dez. na região oeste<br/>
                        Retire todo material descartável de seu quintal<br/>
                        Vamos vencer mais este desafio

              </p>
              <p><b>3) MUTIRÃO DE LIMPEZA "MARÍLIA SEM DENGUE"</b><br/>
                        Dias 15-16 e 17/Dez. na região sul<br/>
                        Retire todo material descartável de seu quintal<br/>
                        Vamos vencer mais este desafio

              </p>
              <p><b>4) MUTIRÃO DE LIMPEZA "MARÍLIA SEM DENGUE"</b><br/>
                        Dia 18/Dez. na região leste<br/>
                        Retire todo material descartável de seu quintal<br/>
                        Vamos vencer mais este desafio
                      </p>              <!-- .post-footer --> 
              </div>
              <!-- /.box -->               
            </div>
            <!-- .post -->    
          </div>
          <!-- /.classic-view --> 
        </div>
        <!-- /.blog-content -->
        <aside class="col-sm-4 sidebar">
         @include('site.resources.banner')
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
          </div>
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
@extends('site.index')
@section('title')
    Postagem
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
                <h2 class="section-title">{{$post->name}}</h2>
                <br>
                <figure class="main"><img src="/uploads/images/{{$post->image}}" alt="" /></figure>
                <div class="post-content text-left">
                <div class="meta"><span class="date">{{$post->updated_at}}</span></div>
                 <p>{!! $post->description !!}</p>                
                  </div>
              </div>
            </div>
         </div>
         </div>
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
          </div>
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
    </div>
  </div>
  @stop
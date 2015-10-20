@extends('site.index')
@section('title')
	Privacidade
@stop
@section('content')
	<div class="offset"></div>
  <div class="dark-wrapper">
    <div class="container inner2">

      <div class="blog grid-view col3">
        <div class="blog-posts text-boxes">
          <div class="isotope row">
            




            @forelse ($posts as $post)

            <div class="col-sm-6 col-md-4 grid-view-post">
              <div class="item post">
                <figure class="main"><a href="blog-post.html"><img src="/uploads/images/{{$post->image}}" alt="{{$post->name}}" /></a></figure>
                <div class="box text-center">
                  <div class="category cat12"><span><a href="#">Novidades</a></span></div>
                  <h4 class="post-title"><a href="blog-post.html">{{$post->name}}</a></h4>
                  <div class="meta"><span class="date">{{$post->created_at}}</span><span class="comments"><a href="#"><i class="icon-chat-1"></i> 7</a></span></div>
                  {!!$post->description!!} 
                </div>
                <!-- /.box --> 
                
              </div>
              <!-- /.post --> 
            </div>
            <!-- /column -->
           
            @empty
                <p>Nenhuma postagem</p>
            @endforelse
          
            
           
            
          </div>
          <!-- /.isotope --> 
        </div>
        <!-- /.blog-posts -->
        
        <div class="pagination">
          <ul>
            <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
            <li class="active"><a href="#"><span>1</span></a></li>
            <li><a href="#"><span>2</span></a></li>
            <li><a href="#"><span>3</span></a></li>
            <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </div>
        <!-- /.pagination --> 
        
      </div>
      <!-- /.blog --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.dark-wrapper -->
@stop
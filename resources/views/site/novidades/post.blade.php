@extends('site.index')
@section('title')
    Privacidade
@stop
@section('content')
<div class="offset"></div>
  <div class="dark-wrapper">
    <div class="container inner2">
      <div class="blog no-sidebar">
        <div class="blog-content">
          <div class="blog-posts classic-view">
            <div class="post">
              <div class="box text-center">
              
                <h1 class="post-title">{{$post->name}}</h1>
                <div class="meta"><span class="date">{{$post->updated_at}}</span></div>
                <figure class="main"><img src="/uploads/images/{{$post->image}}" alt="" style="width: 100%;"/></figure>
                <div class="post-content text-left">
                 <p>{!! $post->description !!}</p>
                  
                  </div>
               
                <!-- .post-footer --> 
              </div>
              <!-- /.box --> 
              
            </div>
            <!-- .post -->
           
            <!-- /.box -->
          
            <!-- /.box -->
            
        
              
            </div>
            <!-- /.box -->
            
            
            <!-- /.box --> 
            
          </div>
          <!-- /.classic-view --> 
          
        </div>
        <!-- /.blog-content --> 
        
      </div>
      <!-- /.blog --> 
    </div>
    <!--/.container -->
  </div>
  <!--/.dark-wrapper -->
  @stop
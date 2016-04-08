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
                 <p style="margin: 0px 0px 8px; padding: 0px; border: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; color: #5e6066; font-family: arial; line-height: 20px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Fonte:&nbsp;</strong></strong><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><a href="http://www.marilia.sp.gov.br/prefeitura/?p=54095">marilia.sp.gov.br</a></strong></p>
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
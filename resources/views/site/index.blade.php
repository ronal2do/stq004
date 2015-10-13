
<!DOCTYPE html>
<html lang="en">

@include('site.resources.header')

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">
                    <img src="{{ asset('images/logo.png') }}" alt="Logotipo" >
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="background-color: #6D3F9A; background-image: linear-gradient(to bottom, #6B3E98, #9C5BCE); background-repeat: repeat-x;">
                     <li>
                                <a href="full-width.html"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="sidebar.html"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="faq.html"><i class="fa fa-youtube"></i></a>
                            </li>
                </ul> 
                <ul class="nav navbar-nav navbar-right amarelo" style="color:#643a90;">
                    <li>
                        <a href="sobre" style="color:#643a90;">Sobre</a>
                    </li>
                    <li>
                        <a href="servicos" style="color:#643a90;">Servico</a>
                    </li>
                    <li>
                        <a href="contato" style="color:#643a90;">Contato</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                   <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>-->
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('{{ asset('images/fundo.png') }}');"></div>
                <div class="carousel-caption">
                    <h2>Titulo 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('{{ asset('images/fundo.png') }}');"></div>
                <div class="carousel-caption">
                    <h2>Titulo 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('{{ asset('images/fundo.png') }}');"></div>
                <div class="carousel-caption">
                    <h2>Titulo 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

  @yield('content')

        <hr>

        <!-- Footer -->
        @include('site.resources.footer')

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

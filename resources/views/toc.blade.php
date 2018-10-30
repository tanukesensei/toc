<!DOCTYPE html>

@if (Auth::check())
  
@endif
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TOC - Organizador de Coleções</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('home/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('home/assets/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('home/assets/css/creative.css') }}" rel="stylesheet">


    <style>
.branding{
  font-size: 56px;
}

.branding span {
  display: inline-block;
}

.branding a {
  color: #fff;
}

.branding a .logo-askew {
  -webkit-animation-name: unskew;
          animation-name: unskew;
  -webkit-animation-duration: .6s;
          animation-duration: .6s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  -webkit-animation-timing-function: cubic-bezier(.75, -2, .75, 2);
          animation-timing-function: cubic-bezier(.75, -2, .75, 2);
  -webkit-transform-origin: 86% 15%;
          transform-origin: 86% 15%;
}

.branding a:hover .logo-askew {
  -webkit-animation-name: skew;
          animation-name: skew;
  -webkit-animation-duration: 1.2s;
          animation-duration: 1.2s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
  -webkit-transform-origin: 86% 15%;
          transform-origin: 86% 15%;
}

@-webkit-keyframes unskew {
  0% {
    -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
  }
  to {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
}

@keyframes unskew {
  0% {
    -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
  }
  to {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
}

@-webkit-keyframes skew {
  40% {
    -webkit-transform: rotate(-18deg);
            transform: rotate(-18deg);
  }
  60% {
    -webkit-transform: rotate(-10deg);
            transform: rotate(-10deg);
  }
  to {
    -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
  }
}

@keyframes skew {
  40% {
    -webkit-transform: rotate(-18deg);
            transform: rotate(-18deg);
  }
  60% {
    -webkit-transform: rotate(-10deg);
            transform: rotate(-10deg);
  }
  to {
    -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
  }
}

    </style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">TOC - Organizador de coleções</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Controle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a href="#login" class="nav-link " data-toggle="modal" data-target="#myModal">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                        <form action="{{ route('login') }}" method="post">
                                          {{ csrf_field() }}
                                            <div class="modal-body">


                                             <label for="email">E-mail: </label>
                                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required />
                                                <br>
                                            <label for="password">Senha: </label>
                                                <input type="password" name="password" class="form-control" required />


                                            </div>
                                            <div class="modal-footer">
                                                <a  href="{{ url('/register') }}" >Cadastre-se!</a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                <button type="submit" name="entrar" value="entrar" class="btn btn-primary">Entrar</button>
                                            </div>
                                        </form>
                                    </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
    <!-- /.modal -->


    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="branding text-uppercase">
             <a href="#"><span class="branding__title">TO<span class="logo-askew">C</span></span></a>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-custom mb-5">Uma maneira simples e inteligente de organizar suas coleções literarias.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Descubra!</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white"><!--We've got what you need!--> Da maneira que você quer!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"><!--Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!-->
                                       Suas coleções literarias agora pode ser organizadas de maneira mais simples para manter a ordem dos seus exemplares.
            </p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services"><!--Get Started!--> Coleções!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><!--At Your Service--> Organize da forma que achar melhor</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-book text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Livros</h3>
              <p class="text-muted mb-0">Organize por Autor, Titulos ou Ordem Alfabética.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-leanpub text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Revistas</h3>
              <p class="text-muted mb-0">Ajuste suas revistas por número de edição, lançamento e ano!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-image text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Mangás</h3>
              <p class="text-muted mb-0">Coloque em ordem numérica, por autor ou ordem alfabética.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-comments-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">HQ's</h3>
              <p class="text-muted mb-0">Separe de acordo com o ano de lançamento, edição e autores!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('imagens/portfolio/fullsize/1.jpg')}}">
              <img class="img-fluid" src="{{asset('imagens/portfolio/thumbnails/1.jpeg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <!--Category-->
                  </div>
                  <div class="project-name">
                    Grandes Coleções
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('imagens/portfolio/fullsize/2.jpg')}}">
              <img class="img-fluid" src="{{asset('imagens/portfolio/thumbnails/2.jpeg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <!--Category-->
                  </div>
                  <div class="project-name">
                    Satisfação!
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('imagens/portfolio/fullsize/3.jpg')}}">
              <img class="img-fluid" src="{{asset('imagens/portfolio/thumbnails/3.jpeg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <!--Category-->
                  </div>
                  <div class="project-name">
                    Livros
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('imagens/portfolio/fullsize/4.jpg')}}">
              <img class="img-fluid" src="{{asset('imagens/portfolio/thumbnails/4.jpeg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <!--Category-->
                  </div>
                  <div class="project-name">
                    Mangás
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('imagens/portfolio/fullsize/5.jpg')}}">
              <img class="img-fluid" src="{{asset('imagens/portfolio/thumbnails/5.jpeg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <!--Category-->
                  </div>
                  <div class="project-name">
                    Revistas
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{asset('imagens/portfolio/fullsize/6.jpg')}}">
              <img class="img-fluid" src="{{asset('imagens/portfolio/thumbnails/6.jpeg')}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <!--Category-->
                  </div>
                  <div class="project-name">
                    HQ's
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>




    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery.easing.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"  type="text/javascript"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/creative.min.js') }}"type="text/javascript"></script>

  </body>

</html>

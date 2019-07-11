<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>

	<style media="screen">
		.sidebar-wrapper .nav .openable-li ul {
      display: none;
      transition: max-height 0.2s ease-out;
      list-style: none;
    }
    .sidebar-wrapper .nav .openable-li ul li {
      margin: 0 0 25px;
    }
    .sidebar-wrapper .nav .openable-li.is-open ul {
      display: block;
    }
	</style>

  	<meta charset="utf-8" />
  	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('imagens/sidebar/apple-icon.png') }}" />
  	<link rel="icon" type="image/png" href="{{ asset('resources/assets/material-dashboard/assets/img/favicon.png') }}" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  	<!-- CSRF Token -->
  	<meta name="csrf-token" content="{{ csrf_token() }}">

	  <title>TOC - Organizador de Coleções</title>

	  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}"
		C:\Bitnami\wapp7\apache2\htdocs\toc\public\css rel="stylesheet" />

    <!-- Hispters Card-->
    <link href="{{ asset('css/hipster_cards.css') }}" rel="stylesheet"/>

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons  -- Dashboard   -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display|Raleway:700,100,400|Roboto:400,700|Playfair+Display+SC:400,700' rel='stylesheet' type='text/css'>

  <!--
    <style>
        .card{
            margin-bottom: 70px;
        }
    </style>

  -->
</head>

<body>

  <!-- Começo do Painel Lateral -->
<div class="wrapper">
  	    <div class="sidebar" data-color="purple" data-image="{{ asset('resources/assets/material-dashboard/assets/img/sidebar-1.jpg') }}">

  			<!--
  		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

  		        Tip 2: you can also add an image using data-image tag
  		    -->

  			<div class="logo">
  				<a href="/usuario" class="simple-text">
  					TOC
  				</a>
  			</div>

  	    	<div class="sidebar-wrapper">
  	            <ul class="nav">
  	                <li class="active">
                        <a href="/usuario">
  	                        <i class="material-icons">home</i>
  	                        <p>Página principal</p>

  	                    </a>
  	                </li>
  									<li class="openable-li">
  	                    <a href="#">
  	                        <i class="material-icons">apps</i>
  	                        <p>Minhas coleções</p>
  	                    </a>
												<ul>
													<li><a href="/colecao/livros/{{$u}}">
	  	                        <i class="material-icons">book</i>
	  	                        <span>Livros</span>
	  	                    </a></li>
													<li><a href="/colecao/revistas/{{$u}}">
	  	                        <i class="material-icons">developer_board</i>
	  	                        <span>Revistas</span>
	  	                    </a></li>
													<li><a href="/colecao/mangas/{{$u}}">
	  	                        <i class="material-icons">burst_mode</i>
	  	                        <span>Mangás</span>
	  	                    </a></li>
													<li><a href="/colecao/hqs/{{$u}}">
	  	                        <i class="material-icons">high_quality</i>
	  	                        <span>HQ's</span>
	  	                    </a></li>
												</ul>
  	                </li>
  									<li>
  	                    <a href="/colecao/create/{{$u}}">
  	                        <i class="material-icons">create_new_folder</i>
  	                        <p>+ Coleções</p>
  	                    </a>
  	                </li>
  						<!--	<li>
  	                    <a href="#">
  	                        <i class="material-icons">search</i>
  	                        <p>Pesquisar</p>
  	                    </a>
  	                </li>
							-->
  	            </ul>
  	    	</div>
  		</div>
  <!-- Fim do Painel Lateral -->


  <!--------------------------------------------------------------------------->


  <!-- Começo do menu superior (Navbar) -->

  	 <div class="main-panel">
  				<nav class="navbar navbar-transparent navbar-absolute">
  				<div class="container-fluid">
  					<div class="navbar-header">
  						<button type="button" class="navbar-toggle" data-toggle="collapse">
  							<span class="sr-only">Toggle navigation</span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
	  						</button>
  					</div>
  					<div class="collapse navbar-collapse">
  						<ul class="nav navbar-nav navbar-right">


<!-- começo das notificações QUE AINDA NÃO TA NADA PRONTA SÓ TA JOGADA AQUI POR ENQUANTO -->
								<li class="nav-item dropdown">
								                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								                  <i class="material-icons">notifications</i>
																	<span class="notification">	{{ $count_notify_user }} </span>
								                </a>
								                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								                	@foreach($notify_user_messages as $message)
								                  <a class="dropdown-item" href="{{ url('/user/read-notification/' . $message['id'] ) }}">{{ $message['data'] }}</a>
																	@endforeach
																</div>
								              </li>
<!-- fim das notificações -->



  							<li>
  								<a href="/user/show/{{$u}}" class="dropdown-toggle" data-toggle="dropdown">
  									<i class="material-icons">person</i>
  									<p class="hidden-lg hidden-md">Dashboard</p>
  									{{ Auth::user()->name }}
  								</a>
  							</li>


  							<li>
  								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
  	 							   <i class="material-icons">keyboard_arrow_down</i>
  	 							   <p class="hidden-lg hidden-md">Profile</p>
  	 						   </a>
  								 <ul class="dropdown-menu">
										 <li>
											 <a href="/user/discord/{{$u}}">
											 	<i class="material-icons">comment</i>
													Discord
											</a>
										 </li>
									   <li>
										 	<a href="/user/edit/{{$u}}">
										 		<i class="material-icons">settings</i>
													Editar Perfil
									 	 	</a>
									   </li>
  								<!-- <li><a href="#">You have 5 new tasks</a></li>
  								 <li><a href="#">You're now friend with Andrew</a></li>
  								 <li><a href="#">Another Notification</a></li>-->
  								 <li><a href="{{ route('logout') }}"
									 	 			onclick="event.preventDefault();
									 				document.getElementById('logout-form').submit();">
									 				<i class="material-icons">exit_to_app</i> Sair
											 </a>
											 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													 {{ csrf_field() }}
											 </form>
									 </li>
  								 </ul>
  							</li>
  						</ul>
					<form class="navbar-form navbar-right" role="search" method="get" action="{{route('buscar')}}">
						<!--renomeei a rota da busca, assim vai funncionar em qualquer parte do projeto o/-->
  							<div class="form-group  is-empty">
															<input type="hidden" name="_token" value="{{csrf_token()}}">
															<input type="text" class="form-control" name="busca" placeholder="Pesquisar">
  	                        	<span class="material-input"></span>
  							</div>
  							<button type="submit" class="btn btn-white btn-round btn-just-icon">
  								<i class="material-icons">search</i><div class="ripple-container"></div>
  							</button>
  	          </form>
  					</div>
  				</div>
  			</nav>
<!-- Fim do menu de cima (Navbar) -->


<!-------------------------------------------------------------------------->

@yield('content')

<!-------------------------------------------------------------------------->


  <!-- Começo do footer -->
  			<footer class="footer">
  	            <div class="container-fluid">
  	                <nav class="pull-left">
  	                    <ul>
  	                        <li>
  	                            <a href="#">
  	                                <!--Home-->
  	                            </a>
  	                        </li>

  	                    </ul>
  	                </nav>
  	                <p class="copyright pull-right">
  	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://github.com/tanukesensei">Luan Vitola</a>, todos os direitos reservados.
  	                </p>
  	            </div>
  	        </footer>

  <!-- Final do footer -->


			</div>
</div>


  <!-------------------------------------------------------------------------->



</body>
<!--PQP O rIAN TÁ ME DEVENDO ESSA-->
<script>
document.addEventListener('DOMContentLoaded', function loadOpenableLi () {
  var openableLiArr = document.querySelectorAll('.openable-li')

  for (var i = 0; i < openableLiArr.length; i++) {
    var openableLi = openableLiArr[i]
    openableLi.addEventListener('click', function onClickOpenableLi () {
      openableLi.classList.toggle('is-open')
    })
  }
  console.log({openableLiArr})
})


// var acc = document.getElementsByClassName("luan");
// var i;

// for (i = 0; i < acc.length; i++) {
// acc[i].addEventListener("click", function() {
// 	this.classList.toggle("jojo");
// 	var panel = this.nextElementSibling;
// 	if (panel.style.maxHeight){
// 		panel.style.maxHeight = null;
// 	} else {
// 		panel.style.maxHeight = panel.scrollHeight + "px";
// 	}
// });
// }
</script>

	<!--   Core JS Files   -->
	<script src="{{ asset('js/jquery-3.1.0.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/material.min.js') }}" type="text/javascript"></script>

  <!-- Cards JS Files -->
  <script src="{{ asset('js/hipster-cards.js') }}" type="text/javascript"></script>

  <!-- End of JS Cards Files -->

 	<!--  Charts Plugin -->
	<script src="{{ asset('js/chartist.min.js') }}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{ asset('js/bootstrap-notify.js') }}"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{{ asset('js/material-dashboard.js') }}"></script>



</html>

<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>

	<style media="screen">
		.sidebar-wrapper .nav li ul{
			display: none;

		}
		.sidebar-wrapper .nav li:hover> ul{
			display: block;
			list-style: none;
			transition: max-height 0.2s ease-out;

		}
		.jojo{
			display: block;

		}
	</style>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('resources/assets/material-dashboard/assets/img/apple-icon.png') }}" />
	<link rel="icon" type="image/png" href="{{ asset('resources/assets/material-dashboard/assets/img/favicon.png') }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}"
		C:\Bitnami\wapp7\apache2\htdocs\toc\public\css rel="stylesheet" />
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
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
  				<a href="http://www.creative-tim.com" class="simple-text">
  					TOC
  				</a>
  			</div>

  	    	<div class="sidebar-wrapper">
  	            <ul class="nav">
  	                <li class="active">
                        <a href="#">
  	                        <i class="material-icons">home</i>
  	                        <p>Página principal</p>

  	                    </a>
  	                </li>
  									<li>
  	                    <a href="#">
  	                        <i class="material-icons">apps</i>
  	                        <p>Minhas coleções</p>
  	                    </a>
												<ul class="luan">
													<li><a href="#">
	  	                        <i class="material-icons">apps</i>
	  	                        <p>Livros</p>
	  	                    </a></li>
													<li><a href="#">
	  	                        <i class="material-icons">apps</i>
	  	                        <p>Revistas</p>
	  	                    </a></li>
													<li><a href="#">
	  	                        <i class="material-icons">apps</i>
	  	                        <p>Mangás</p>
	  	                    </a></li>
													<li><a href="#">
	  	                        <i class="material-icons">apps</i>
	  	                        <p>HQ's</p>
	  	                    </a></li>
												</ul>
  	                </li>
  									<li>
  	                    <a href="/colecao/create/{{$u}}">
  	                        <i class="material-icons">create_new_folder</i>
  	                        <p>+ Coleções</p>
  	                    </a>
  	                </li>
  									<li>
  	                    <a href="#">
  	                        <i class="material-icons">search</i>
  	                        <p>Pesquisar</p>
  	                    </a>
  	                </li>
  	            </ul>
  	    	</div>
  		</div>
  <!-- Fim do Painel Lateral -->


  <!-------------------------------------------------------------------------->


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
  						<a class="navbar-brand" href="#">Home</a>
  					</div>
  					<div class="collapse navbar-collapse">
  						<ul class="nav navbar-nav navbar-right">
  							<li>
  								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
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
										 <a href="/user/edit/{{$u}}">
										 <i class="material-icons">settings</i> Editar Perfil</a></li>
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

  						<form class="navbar-form navbar-right" role="search">
  							<div class="form-group  is-empty">
  	                        	<input type="text" class="form-control" placeholder="Pesquisar">
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
  	                                Home
  	                            </a>
  	                        </li>

  	                    </ul>
  	                </nav>
  	                <p class="copyright pull-right">
  	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
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
var acc = document.getElementsByClassName("luan");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
	this.classList.toggle("jojo");
	var panel = this.nextElementSibling;
	if (panel.style.maxHeight){
		panel.style.maxHeight = null;
	} else {
		panel.style.maxHeight = panel.scrollHeight + "px";
	}
});
}
</script>



	<!--   Core JS Files   -->
	<script src="{{ asset('js/jquery-3.1.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/material.min.js') }}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('js/chartist.min.js') }}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{ asset('js/bootstrap-notify.js') }}"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{{ asset('js/material-dashboard.js') }}"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ asset('js/demo.js') }}"></script>


</html>

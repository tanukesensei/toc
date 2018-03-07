<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material-dashboard/assets/img/apple-icon.png') }}" />
	<link rel="icon" type="image/png" href="{{ asset('material-dashboard/assets/img/favicon.png') }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{ config('app.name', 'Laravel') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('material-dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('material-dashboard/assets/css/material-dashboard.css') }}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('material-dashboard/assets/css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

  <!-- Começo do Painel Lateral -->
  	<div class="wrapper">
  	    <div class="sidebar" data-color="purple" data-image="{{ asset('material-dashboard/assets/img/sidebar-1.jpg') }}">

  			<!--
  		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

  		        Tip 2: you can also add an image using data-image tag
  		    -->

  			<div class="logo">
  				<a href="http://www.creative-tim.com" class="simple-text">
  					Creative Tim
  				</a>
  			</div>

  	    	<div class="sidebar-wrapper">
  	            <ul class="nav">
  	                <li class="active">
                        <a href="#">
  	                        <i class="material-icons">home</i>
  	                        <p>Página principal <span class="label label-info">Demo</span></p>

  	                    </a>
  	                </li>
  									<li>
  	                    <a href="#">
  	                        <i class="material-icons">apps</i>
  	                        <p>Minhas coleções <span class="label label-info">Demo</span></p>
  	                    </a>
  	                </li>
  									<li>
  	                    <a href="#">
  	                        <i class="material-icons">create_new_folder</i>
  	                        <p>+ Coleções <span class="label label-info">Demo</span></p>
  	                    </a>
  	                </li>
  									<li>
  	                    <a href="#">
  	                        <i class="material-icons">search</i>
  	                        <p>Pesquisar <span class="label label-info">Demo</span></p>
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
  									AlexJMercer
  								</a>
  							</li>

  							<li>
  								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
  	 							   <i class="material-icons">keyboard_arrow_down</i>
  	 							   <p class="hidden-lg hidden-md">Profile</p>
  	 						   </a>
  								 <ul class="dropdown-menu">
  								 <li><a href="#"><i class="material-icons">settings</i> Configurações</a></li>
  								 <li><a href="#">You have 5 new tasks</a></li>
  								 <li><a href="#">You're now friend with Andrew</a></li>
  								 <li><a href="#">Another Notification</a></li>
  								 <li><a href="#"><i class="material-icons">exit_to_app</i> Sair</a></li>
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



  	        <div class="content">
  	            <div class="container-fluid">
  	                <div class="row">
  									<!-- <div class="row">  Row que quebra as duas linhas -->
  										<div class="col-lg-6 col-md-6 col-sm-6">
  											<div class="card card-stats">
  												<div class="card-header" data-background-color="red">
  													<i class="material-icons">book</i>
  												</div>
  												<div class="card-content">
  													<p class="category">Livros</p>
  													<h3 class="title">75</h3>
  												</div>
  												<div class="card-footer">
  													<a href="#"></a>
  													<div class="stats">
  														 <i class="material-icons text-primary">find_in_page</i><a href="#">Visualizar</a>
  													</div>
  												</div>
  											</div>
  										</div>


  										<div class="col-lg-6 col-md-6 col-sm-6">
  											<div class="card card-stats">
  												<div class="card-header" data-background-color="blue">
  													<i class="material-icons">developer_board</i>
  												</div>
  												<div class="card-content">
  													<p class="category">Revistas</p>
  													<h3 class="title">245</h3>
  												</div>
  												<div class="card-footer">
  													<div class="stats">
  														<i class="material-icons text-primary">find_in_page</i> <a href="#">Visualizar</a>
  													</div>
  												</div>
  											</div>
  										</div>
  									<!-- </div> Fecha o row de quebra em duas linhas-->




  										<div class="col-lg-6 col-md-6 col-sm-6">
  											<div class="card card-stats">
  												<div class="card-header" data-background-color="orange">
  													<i class="material-icons">burst_mode</i>
  												</div>
  												<div class="card-content">
  													<p class="category">Mangás</p>
  													<h3 class="title">56</h3>
  												</div>
  												<div class="card-footer">
  													<div class="stats">
  														<i class="material-icons text-primary">find_in_page</i> <a href="#">Visualizar</a>
  													</div>
  												</div>
  											</div>
  										</div>
  										<div class="col-lg-6 col-md-6 col-sm-6">
  											<div class="card card-stats">
  												<div class="card-header" data-background-color="green">
  													<i class="material-icons">high_quality</i>
  												</div>
  												<div class="card-content">
  													<p class="category">Quadrinhos</p>
  													<h3 class="title">353</h3>
  												</div>
  												<div class="card-footer">
  													<div class="stats">
  														<i class="material-icons text-primary">find_in_page</i> <a href="#">Visualizar</a>
  													</div>
  												</div>
  											</div>
  										</div>
<!-- Fim do menu de cima (Navbar) -->
      </div><!--fecha o row-->
    <div class="row"></div>
  </div>
</div>



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

	<!--   Core JS Files   -->
	<script src="{{ asset('material-dashboard/assets/js/jquery-3.1.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('material-dashboard/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('material-dashboard/assets/js/material.min.js') }}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('material-dashboard/assets/js/chartist.min.js') }}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{ asset('material-dashboard/assets/js/bootstrap-notify.js') }}"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{{ asset('material-dashboard/assets/js/material-dashboard.js') }}"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ asset('material-dashboard/assets/js/demo.js') }}"></script>


</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="Bienestar-icon" sizes="76x76" href="assets/img/logo-bienestar.png">
	<link rel="icon" type="image/png" href="assets/img/logo-bienestar.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		<?php $_REQUEST['c'] = !isset($_REQUEST['c']) ? 'home' : $_REQUEST['c']; ?>
		Bienestar -
		<?= ucfirst($_REQUEST['c']); ?>
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- CSS Files -->
	<link href="assets/css/loader.css" rel="stylesheet" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
	<link href="assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
	<link href="node_modules/noty/lib/noty.css" rel="stylesheet">
	<link href="node_modules/noty/lib/themes/metroui.css" rel="stylesheet">
	<link href='assets/fullcalendar-4.0.1\packages\core\main.css' rel='stylesheet' />
	<link href='assets/fullcalendar-4.0.1\packages\daygrid\main.css' rel='stylesheet' />
	<link href='assets\fullcalendar-4.0.1\packages\list\main.css' rel='stylesheet' />
	<link href='assets\fullcalendar-4.0.1\packages\timegrid\main.css' rel='stylesheet' />
	<link href='assets\fullcalendar-4.0.1\packages\bootstrap\main.css' rel='stylesheet' />
	<link href='node_modules\chart.js\dist\Chart.css' rel='stylesheet' />

</head>

<body class="" id=" log">
	<div class="preloader-wrapper">
		<div class="preloader">
			<img src="assets/img/logo-login.png" alt="">
		</div>
	</div>
	<div class="wrapper ">
		<div class="sidebar" data-color="orange">
			<!--
		  Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
			<div class="logo">
				<a href="?c=home" class="simple-text logo-mini">
					<img src="assets/img/logo-bienestar.png">
				</a>
				<a href="?c=home" class="simple-text logo-normal">
					Bienestar Al aprendiz
				</a>
			</div>
			<div class="sidebar-wrapper" id="sidebar-wrapper">
				<ul class="nav">
					<li class="">
						<a data-toggle="collapse" href="#pagesExamplesA" aria-expanded="<?= $_REQUEST['c'] == 'actividad' ? "true" : "false"; ?>" class="collapsed">
							<i class="now-ui-icons design_bullet-list-67"></i>
							<p>
								Actividades<b class="caret"></b>
							</p>
						</a>
						<div class="collapse" id="pagesExamplesA" style="">
							<ul class="nav">
								<li>
									<a href="?c=accion">
										<i class="fas fa-circle"></i>
										<p><b>acciones</b></p>
									</a>
								</li>
								<li>
									<a href="?c=actividad">
										<i class="fas fa-circle"></i>
										<p><b>listado de actividades</b></p>
									</a>
								</li>
								<li>
									<a href="?c=registro">
										<i class="fas fa-circle"></i>
										<p><b>Registros de Actividad</b></p>
									</a>
								</li>
								<li>
									<a href="?c=asistencia">
										<i class="fas fa-circle"></i>
										<p><b>Registros de Asistencia</b></p>
									</a>
								</li>
								<li>
									<a href="?c=encuesta">
										<i class="fas fa-circle"></i>
										<p><b>encuestas</b></p>
									</a>
								</li>

							</ul>
					<li>
						<a data-toggle="collapse" href="#pagesExamplesB" class="collapsed">
							<i class="now-ui-icons design-2_ruler-pencil"></i>
							<p>
								Gestion de ambientes<b class="caret"></b>
							</p>
						</a>
						<div class="collapse" id="pagesExamplesB">
							<ul class="nav">
								<li>
									<a href="?c=programa">
										<i class="fas fa-circle"></i>
										<p>Gestionar Programas</p>
									</a>
								</li>
								<li>
									<a href="?c=ficha">
										<i class="fas fa-circle"></i>
										<p>Gestionar Fichas</p>
									</a>
								</li>
								<li>
									<a href="?c=estudiante">
										<i class="fas fa-circle"></i>
										<p>Gestionar Estudiantes</p>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<a href="?c=remision">
							<i class="now-ui-icons business_badge"></i>
							<p>Remisiones</p>
						</a>
					</li>
					<li>
						<a href="?c=pdf">
							<i class="now-ui-icons files_single-copy-04"></i>
							<p>Informes</p>
						</a>
					</li>
					<li>
						<a href="?c=home&a=Calendario">
							<i class="now-ui-icons ui-1_calendar-60"></i>
							<p>Calendario</p>
						</a>
					</li>
					<!-- <li >
								<a href="?c=desersion">
									 <i class="now-ui-icons arrows-1_cloud-download-93"></i>
									 <p>desercion</p>
								</a>
						  </li> -->
				</ul>
			</div>
		</div>
		<div class="main-panel" id="main-panel">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<div class="navbar-toggle">
							<button type="button" class="navbar-toggler">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</button>
						</div>
						<a class="navbar-brand" href="?c=home">Inicio</a><a class="navbar-brand" href="?c=<?= $_REQUEST['c']; ?>">
							<?= "<b>></b>" . "  " . strtoupper($_REQUEST['c']); ?></a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<form>
							<div class="input-group no-border">
								<input type="text" value="" class="form-control" placeholder="Search...">
								<div class="input-group-append">
									<div class="input-group-text">
										<i class="now-ui-icons ui-1_zoom-bold"></i>
									</div>
								</div>
							</div>
						</form>
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#pablo">
									<i class="now-ui-icons media-2_sound-wave"></i>
									<p>
										<span class="d-lg-none d-md-block">Stats</span>
									</p>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="?c=home&a=Index">
									<i class="now-ui-icons business_bank "></i>
									<p>
										<span class="d-lg-none d-md-block">Inicio</span>
									</p>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="now-ui-icons users_single-02"></i>
									<p>
										<span class="d-lg-none d-md-block">Perfil</span>
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="?c=home&a=Salir">
										<i class="now-ui-iconss media-1_button-power"></i>Cerrar Sesion</a>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</nav>
			<!-- End Navbar -->
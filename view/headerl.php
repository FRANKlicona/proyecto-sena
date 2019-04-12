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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/loader.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
    <link href="node_modules/noty/lib/noty.css" rel="stylesheet">
    <link href="node_modules/noty/lib//themes/metroui.css" rel="stylesheet">

    <link href='assets/fullcalendar-4.0.1\packages\core\main.css' rel='stylesheet' />
    <link href='assets/fullcalendar-4.0.1\packages\daygrid\main.css' rel='stylesheet' />
    <link href='assets\fullcalendar-4.0.1\packages\list\main.css' rel='stylesheet' />
    <link href='assets\fullcalendar-4.0.1\packages\timegrid\main.css' rel='stylesheet' />
    <link href='assets\fullcalendar-4.0.1\packages\bootstrap\main.css' rel='stylesheet' />
</head>

<body id="log" class="login-page sidebar-collapse">
    <div class="preloader-wrapper">
        <div class="preloader">
            <img src="assets/img/logo-login.png" alt="">
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top <?= ($_REQUEST['a'] != 'Nada') ? 'navbar-transparent' : "" ?> " color-on-scroll="400">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-header">Dropdown header</a>
                    <a class="dropdown-item" <?= (isset($_REQUEST['a']) && $_REQUEST['a'] == 'Landing') ? 'onclick="scrollToActivity()"' : 'href="?c=Home&a=Landing#activities"'; ?>>Actividades Programadas</a>
                    <a class="dropdown-item" <?= (isset($_REQUEST['a']) && $_REQUEST['a'] == 'Landing') ? 'onclick="scrollToCalendar()"' : 'href="?c=Home&a=Landing#calendar"'; ?>>Calendario de Peticiones</a>
                    <a class="dropdown-item" <?= (isset($_REQUEST['a']) && $_REQUEST['a'] == 'Landing') ? 'onclick="scrollToRequire()"' : 'href="?c=Home&a=Landing#formularioPet"'; ?>>Peticion</a>
                </div>
            </div>
            <div class="navbar-translate">
                <a class="navbar-brand" href="?c=home&a=Landing">
                    Bienestar al aprendiz
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar top-bar"></span>
                    <span class="navbar-toggler-bar middle-bar"></span>
                    <span class="navbar-toggler-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://presentation.creative-tim.com">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://cysbolivar.blogspot.com/">Blog</a>
                    </li>
                    <?php if (!isset($_REQUEST['a']) || $_REQUEST['a'] != 'Login') : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=home&a=Login">Iniciar Sesion</a>
                        </li>
                    <?php endif;
                if (!isset($_REQUEST['a']) || $_REQUEST['a'] != 'Ingreso') : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=home&a=Ingreso">Registrarse</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
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
    <link href="assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <link href="node-modules/noty/lib/noty.css" rel="stylesheet">
    <link href="node-modules/noty/lib//themes/metroui.css" rel="stylesheet">
    <link rel="stylesheet" href="node-modules/noty/lib/themes/metroui.css">

</head>

<body class="" id="log">
    <div class="preloader-wrapper">
        <div class="preloader">
            <img src="assets/img/logo-login.png" alt="">
        </div>
    </div>
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
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
                            <i class="now-ui-icons design_image"></i>
                            <p>
                                Actividades<b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamplesA" style="">
                            <ul class="nav">
                                <li class=<?= (isset($_REQUEST['v']) && $_REQUEST['v'] == 'accion') ? "active active-pro" : "active-pro"; ?>>
                                    <a href="?c=accion">
                                        <i class="now-ui-icons files_paper "></i>
                                        <p>acciones</p>
                                    </a>
                                </li>
                                <li <?= (isset($_REQUEST['v']) && $_REQUEST['v'] == 'apoyo') ? "class='active'" : ""; ?>>
                                    <a href="?c=actividad">
                                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                                        <p><b>listado de actividades</b></p>
                                    </a>
                                </li>
                                <li <?= (isset($_REQUEST['v']) && $_REQUEST['v'] == 'cultura') ? "class='active'" : ""; ?>>
                                    <a href="?c=registro">
                                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                                        <p>Registros de Actividad</p>
                                    </a>
                                </li>
                                <li class=<?= (isset($_REQUEST['v']) && $_REQUEST['v'] == 'encuesta') ? "active active-pro" : "active-pro"; ?>>
                                    <a href="?c=encuesta">
                                        <i class="now-ui-icons files_paper "></i>
                                        <p>encuestas</p>
                                    </a>
                                </li>
                            </ul>
                    <li class=<?= (isset($_REQUEST['v']) && $_REQUEST['v'] == 'desersion') ? "active active-pro" : "active-pro"; ?>>
                        <a href="?c=desersion">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>desercion</p>
                        </a>
                    </li>
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="?c=login">Iniciar Sesion</a>
                                    <a class="dropdown-item" href="?c=login&a=Salir">Cerrar Sesion</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <?php
            if (isset($_REQUEST['v'])) {
                switch ($_REQUEST['v']) {
                    case 'apoyo':
                        $dim = 1;
                        break;
                    case 'cultura':
                        $dim = 2;
                        break;
                    case 'deporte':
                        $dim = 3;
                        break;
                    case 'liderazgo':
                        $dim = 4;
                        break;
                    case 'psicologia':
                        $dim = 5;
                        break;
                    case 'salud':
                        $dim = 6;
                        break;

                    default:
                        $dim = 0;
                        break;
                }
            }
            ?> 
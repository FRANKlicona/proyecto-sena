<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
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
    <link href="assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- <link href="assets/css/material-dashboard.css?v=1.3.0" rel="stylesheet" /> -->
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="?c=home" class="simple-text logo-mini">
                    BA
                </a>
                <a href="?c=home" class="simple-text logo-normal">
                    Bienestar Al aprendiz
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">

                    <li <?= ($_REQUEST['c'] == 'apoyo') ? "class='active'" : ""; ?>>
                        <a href="?c=apoyo">
                            <i class="now-ui-icons design_app"></i>
                            <p>Apoyo y sostenimiento</p>
                        </a>
                    </li>
                    <li <?= ($_REQUEST['c'] == 'cultura') ? "class='active'" : ""; ?>>
                        <a href="?c=cultura">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Cultura</p>
                        </a>
                    </li>
                    <li <?= ($_REQUEST['c'] == 'deporte') ? "class='active'" : ""; ?>>
                        <a href="?c=deporte">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Deporte y Recreacion</p>
                        </a>
                    </li>
                    <li <?= ($_REQUEST['c'] == 'liderazgo') ? "class='active'" : ""; ?>>
                        <a href="?c=liderazgo">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Liderazgo</p>
                        </a>
                    </li>
                    <li <?= ($_REQUEST['c'] == 'psicologia') ? "class='active'" : ""; ?>>
                        <a href="?c=psicologia">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Psicologia</p>
                        </a>
                    </li>
                    <li <?= ($_REQUEST['c'] == 'salud') ? "class='active'" : ""; ?>>
                        <a href="?c=salud">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Salud</p>
                        </a>
                    </li>
                    <li class=<?= ($_REQUEST['c'] == 'desersion') ? "active active-pro" : "active-pro"; ?> >
                        <a href="?c=desercion">
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
                            <?= "  <b>></b>   " . strtoupper($_REQUEST['c']); ?></a>
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
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
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
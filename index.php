<?php
//Se da inicio de secciones
session_start();
//Se establece la zona horaria
date_default_timezone_set('America/Bogota');
//Se requiere la base de datos
require_once 'model/database.php';
//Se pregunta si existe una variable de sesion para agregarlo a la variable sesion
$session= isset($_SESSION['auth'])?$_SESSION['auth']:'';

if($session){

    $controller = 'home';

    // Todo esta lógica hara el papel de un FrontController
    if(!isset($_REQUEST['c'])) {
            require_once "controller/$controller.controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            $controller->Index();
        } else {
            // Obtenemos el controlador que queremos cargar
            $controller = strtolower($_REQUEST['c']);
            $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

            // Instanciamos el controlador
            require_once "controller/$controller.controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;

            // Llama la accion
            call_user_func(array($controller, $accion) );
    }
} else{
    $controller = 'home';
    if (isset($_REQUEST['a'])&&($_REQUEST['a']!='Index')) {
        $accion = ($_REQUEST['a']);
    }else{
        $accion = 'Landing';
    }
    

    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func(array($controller, $accion) );
}

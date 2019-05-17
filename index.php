<?php
//Se define la variable global URL
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
class Index {
    public function url()
    {
        global $url;
        return $url;
    }
}
global $Index;
$Index = new Index();

//Se da inicio a secciones
session_start();
//Se establece la zona horaria
date_default_timezone_set('America/Bogota');
//Se requiere la base de datos
require_once 'model/database.php';
require_once 'model/listados.php';
//Se pregunta si existe una variable de sesion para agregarlo a la variable sesion
$session= isset($_SESSION['auth'])?$_SESSION['auth']:'';

if($session){

    $controller = 'home';

            //  Todo esta lógica hara el papel de un FrontController
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

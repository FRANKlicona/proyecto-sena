<?php
// require_once 'model/login.php';

class loginController
{

    // private $model;

    // public function __CONSTRUCT()
    // {
    //     $this->model = new login();
    // }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/login/login.php';
        require_once 'view/footer.php';
        
    }
    public function Registro()
    {
        require_once 'view/header.php';
        require_once 'view/login/registro.php';
        require_once 'view/footer.php';
        
    }
}
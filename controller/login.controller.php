<?php
require_once 'model/login.php';

class loginController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new login();
    }

    public function Index()
    {
        require_once 'view/login/login.php';
        require_once 'view/footer.php';
    }
    public function Ingreso()
    {
        require_once 'view/login/registro.php';
        require_once 'view/footer.php';
        
    }
    public function Validacion()
    {
        $login = new login();
        print_r($_REQUEST);
        if (isset($_REQUEST['email'])&&isset($_REQUEST['password'])) {
            $login = $this->model->Verificar($_REQUEST['email'],$_REQUEST['password']);
        }
        header('location:?c=home');
    }
    public function Registro()
    {
        $login = new login();

        $login->id          = $_REQUEST['id'];
        $login->name        = $_REQUEST['name'];
        $login->last_name   = $_REQUEST['last_name'];
        $login->tell        = $_REQUEST['tell'];
        $login->email       = $_REQUEST['email'];
        $login->password    = $_REQUEST['password'];
        $login->dimension_id= $_REQUEST['dimension_id'];
        $login->rol_id      = $_REQUEST['rol_id'];
        
        $this->model->Registrar($login);

        header('Location: index.php?c=login');
    }

    public function Salir()
    {
        unset($_SESSION['admin']);
        session_destroy();
        require_once 'view/login/login.php';
        require_once 'view/footer.php';
    }

}
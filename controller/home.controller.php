<?php
require_once('model/home.php');
class HomeController
{
    public function __CONSTRUCT()
    {
        $this->model = new Home();
    }
    
    private $model;

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/home/home.php';
        require_once 'view/footer.php';
    }
    public function Landing()
    {
        require_once 'view/headerl.php';
        require_once 'view/home/landing.php';
        require_once 'view/footer.php';
    }
    public function Login()
    {
        require_once 'view/headerl.php';
        require_once 'view/home/login.php';
        require_once 'view/footer.php';
    }
    public function Ingreso()
    {
        require_once 'view/headerl.php';
        require_once 'view/home/registro.php';
        require_once 'view/footer.php';
    }

    public function Recuperar()
    {
        if(isset($_REQUEST['email'])){

            $home = new Home();
            $email=$_REQUEST['email'];
            $home = $this->model->Recuperarclave($email);

            require_once 'view/headerl.php';
            require_once 'view/home/enviado.php';
            require_once 'view/footer.php';

        } else{
            require_once 'view/headerl.php';
            require_once 'view/home/recuperar.php';
            require_once 'view/footer.php';
        }
    }
    public function Salir()
    {
        unset($_SESSION['admin']);
        session_destroy();
        require_once 'view/headerl.php';
        require_once 'view/home/login.php';
        require_once 'view/footer.php';
    }

    public function Peticion()
    {
        require_once 'view/headerl.php';
        require_once 'view/home/peticion.php';
        require_once 'view/footer.php';


    }

    public function Validacion()
    {
        $home = new Home();
        if (isset($_REQUEST['email'])&& isset($_REQUEST['password'])) {
            $home = $this->model->Verificar($_REQUEST['email'],$_REQUEST['password']);
        }
        header('location:?c=home&a=Index');
    }
    public function Registro()
    {
        $home = new Home();

        $home->id          = $_REQUEST['id'];
        $home->name        = $_REQUEST['name'];
        $home->last_name   = $_REQUEST['last_name'];
        $home->tell        = $_REQUEST['tell'];
        $home->email       = $_REQUEST['email'];
        $home->password    = $_REQUEST['password'];
        $home->dimension_id= $_REQUEST['dimension_id'];
        $home->rol_id      = $_REQUEST['rol_id'];

        $this->model->Registrar($home);

        header('Location: index.php?c=home');
    }
    public function ValidacionPeticion()
    {
        $home = new Home();
        if (isset($_REQUEST['pass_code'])&& isset($_REQUEST['token_id'])) {
            $home = $this->model->Verificar($_REQUEST['pass_code'],$_REQUEST['token_id']);
        }
        header('location:?c=home&a=Peticion');
    }
    public function Guardar()
    {


        $Peticion = new Peticion();

        $actividad->id          = $_REQUEST['id'];
        $actividad->date        = $_REQUEST['date'];
        $actividad->token_id    = $_REQUEST['token_id'];
        $actividad->action_id   = $_REQUEST['action_id'];
        $actividad->id > 0
            ? $this->model->Actualizar($actividad)
            : $this->model->Registrar($actividad);

        header("Location: index.php?c=home&v=".$_REQUEST['v']);
    }

    
    

}


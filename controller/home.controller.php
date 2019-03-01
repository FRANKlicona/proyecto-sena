<?php
require_once 'model/home.php';

class homeController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new home();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/home.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $home = new home();

        if (isset($_REQUEST['id'])) {
            $home = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/home/home-editar.php';
    }

    public function Guardar()
    {
        $home = new home();

        $home->id = $_REQUEST['id'];
        $home->dni = $_REQUEST['dni'];
        $home->Nombre = $_REQUEST['Nombre'];
        $home->Apellido = $_REQUEST['Apellido'];
        $home->Correo = $_REQUEST['Correo'];
        $home->telefono = $_REQUEST['telefono'];


        $home->id > 0
            ? $this->model->Actualizar($home)
            : $this->model->Registrar($home);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}


<?php
require_once 'model/cultura.php';

class culturaController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new cultura();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/cultura/cultura.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $cultura = new cultura();

        if (isset($_REQUEST['id'])) {
            $cultura = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/cultura/cultura-editar.php';
    }

    public function Guardar()
    {
        $cultura = new cultura();

        $cultura->id = $_REQUEST['id'];
        $cultura->dni = $_REQUEST['dni'];
        $cultura->Nombre = $_REQUEST['Nombre'];
        $cultura->Apellido = $_REQUEST['Apellido'];
        $cultura->Correo = $_REQUEST['Correo'];
        $cultura->telefono = $_REQUEST['telefono'];


        $cultura->id > 0
            ? $this->model->Actualizar($cultura)
            : $this->model->Registrar($cultura);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}


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

        $cultura->id      = $_REQUEST['id'];
        $cultura->name    = $_REQUEST['name'];
        $cultura->token   = $_REQUEST['token'];
        $cultura->program = $_REQUEST['program'];
        $cultura->date    = $_REQUEST['date'];
        $cultura->duration    = $_REQUEST['duration'];
        $cultura->dimension_id = '2';


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


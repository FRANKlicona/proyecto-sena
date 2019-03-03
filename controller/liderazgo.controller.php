<?php
require_once 'model/liderazgo.php';

class liderazgoController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new liderazgo();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/liderazgo/liderazgo.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $liderazgo = new liderazgo();

        if (isset($_REQUEST['id'])) {
            $liderazgo = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/liderazgo/liderazgo-editar.php';
    }

    public function Guardar()
    {
        $liderazgo = new liderazgo();

        $liderazgo->id      = $_REQUEST['id'];
        $liderazgo->name    = $_REQUEST['name'];
        $liderazgo->token   = $_REQUEST['token'];
        $liderazgo->program = $_REQUEST['program'];
        $liderazgo->date    = $_REQUEST['date'];
        $liderazgo->duration    = $_REQUEST['duration'];
        $liderazgo->dimension_id = '4';


        $liderazgo->id > 0
            ? $this->model->Actualizar($liderazgo)
            : $this->model->Registrar($liderazgo);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}


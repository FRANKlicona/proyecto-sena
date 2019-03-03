<?php
require_once 'model/deporte.php';

class deporteController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new deporte();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/deporte/deporte.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $deporte = new deporte();

        if (isset($_REQUEST['id'])) {
            $deporte = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/deporte/deporte-editar.php';
    }

    public function Guardar()
    {
        $deporte = new deporte();

        $deporte->id      = $_REQUEST['id'];
        $deporte->name    = $_REQUEST['name'];
        $deporte->token   = $_REQUEST['token'];
        $deporte->program = $_REQUEST['program'];
        $deporte->date    = $_REQUEST['date'];
        $deporte->duration    = $_REQUEST['duration'];
        $deporte->dimension_id = '3';


        $deporte->id > 0
            ? $this->model->Actualizar($deporte)
            : $this->model->Registrar($deporte);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}


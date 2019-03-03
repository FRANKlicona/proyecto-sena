<?php
require_once 'model/psicologia.php';

class psicologiaController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new psicologia();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/psicologia/psicologia.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $psicologia = new psicologia();

        if (isset($_REQUEST['id'])) {
            $psicologia = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/psicologia/psicologia-editar.php';
    }

    public function Guardar()
    {
        $psicologia = new psicologia();

        $psicologia->id      = $_REQUEST['id'];
        $psicologia->name    = $_REQUEST['name'];
        $psicologia->token   = $_REQUEST['token'];
        $psicologia->program = $_REQUEST['program'];
        $psicologia->date    = $_REQUEST['date'];
        $psicologia->duration    = $_REQUEST['duration'];
        $psicologia->dimension_id = '5';


        $psicologia->id > 0
            ? $this->model->Actualizar($psicologia)
            : $this->model->Registrar($psicologia);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}


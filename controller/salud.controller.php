<?php
require_once 'model/salud.php';

class saludController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new salud();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/salud/salud.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $salud = new salud();

        if (isset($_REQUEST['id'])) {
            $salud = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/salud/salud-editar.php';
    }

    public function Guardar()
    {
        $salud = new salud();

        $salud->id      = $_REQUEST['id'];
        $salud->name    = $_REQUEST['name'];
        $salud->token   = $_REQUEST['token'];
        $salud->program = $_REQUEST['program'];
        $salud->date    = $_REQUEST['date'];
        $salud->duration    = $_REQUEST['duration'];
        $salud->dimension_id = '6';


        $salud->id > 0
            ? $this->model->Actualizar($salud)
            : $this->model->Registrar($salud);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}

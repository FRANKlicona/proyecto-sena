<?php
require_once 'model/remision.php';

class remisionController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new accion();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/remision/remision.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $accion = new accion();

        if (isset($_REQUEST['id'])) {
            $accion = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/remision/remision-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar()
    {


        $accion = new accion();

        $accion->id      = $_REQUEST['id'];
        $accion->name    = $_REQUEST['name'];
        $accion->token   = $_REQUEST['token'];
        $accion->program = $_REQUEST['program'];
        $accion->date    = $_REQUEST['date'];
        $accion->duration    = $_REQUEST['duration'];
        $accion->dimension_id = $_REQUEST['dimension_id'];
        $accion->id > 0
            ? $this->model->Actualizar($accion)
            : $this->model->Registrar($accion);

        header("Location: index.php?c=accion&v=" . $_REQUEST['v']);
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=accion&v=' . $_REQUEST['v']);
    }
}

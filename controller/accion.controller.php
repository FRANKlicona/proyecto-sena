<?php
require_once 'model/accion.php';

class AccionController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Accion();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/accion/accion.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $accion = new Accion();

        if (isset($_REQUEST['id'])) {
            $accion = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/accion/accion-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar()
    {


        $accion = new Accion();

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

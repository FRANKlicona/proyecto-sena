<?php
require_once 'model/registro.php';

class apoyoController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new registro();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/registro/registro.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $registro = new registro();

        if (isset($_REQUEST['id'])) {
            $registro = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/registro/registro-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar()
    {


        $registro = new registro();

        $registro->id      = $_REQUEST['id'];
        $registro->name    = $_REQUEST['name'];
        $registro->token   = $_REQUEST['token'];
        $registro->program = $_REQUEST['program'];
        $registro->date    = $_REQUEST['date'];
        $registro->duration    = $_REQUEST['duration'];
        $registro->dimension_id = $_REQUEST['dimension_id'];
        $registro->id > 0
            ? $this->model->Actualizar($registro)
            : $this->model->Registrar($registro);

        header('Location: index.php?c=registro');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=registro');
    }
}
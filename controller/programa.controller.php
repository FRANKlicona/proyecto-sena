<?php
require_once 'model/programa.php';

class ProgramaController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Programa();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/programa/programa.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $programa = new Programa();

        if (isset($_REQUEST['id'])) {
            $programa = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/programa/programa-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar()
    {


        $programa = new Programa();

        $programa->id      = $_REQUEST['id'];
        $programa->name    = $_REQUEST['name'];
        $programa->status   = $_REQUEST['status'];
    
        $programa->id > 0
            ? $this->model->Actualizar($programa)
            : $this->model->Registrar($programa);

        header("Location: index.php?c=programa");
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=programa');
    }
}

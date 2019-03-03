<?php
require_once 'model/apoyo.php';

class apoyoController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new apoyo();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/apoyo/apoyo.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $apoyo = new apoyo();

        if (isset($_REQUEST['id'])) {
            $apoyo = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/apoyo/apoyo-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar()
    {
        
        $apoyo = new apoyo();
        
        $apoyo->id      = $_REQUEST['id'];
        $apoyo->name    = $_REQUEST['name'];
        $apoyo->token   = $_REQUEST['token'];
        $apoyo->program = $_REQUEST['program'];
        $apoyo->date    = $_REQUEST['date'];
        $apoyo->duration    = $_REQUEST['duration'];
        $apoyo->dimension_id= '1';

        $apoyo->id > 0
            ? $this->model->Actualizar($apoyo)
            : $this->model->Registrar($apoyo);

        header( 'Location: index.php?c=apoyo');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        setcookie("delete","well",time()+1);
        header('Location: index.php?c=apoyo');

    }
}


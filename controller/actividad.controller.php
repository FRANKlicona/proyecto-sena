<?php
require_once 'model/actividad.php';

class actividadController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new actividad();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/actividad/actividad.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $actividad = new actividad();

        if (isset($_REQUEST['id'])) {
            $actividad = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/actividad/actividad-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar()
    {


        $actividad = new actividad();

        $actividad->id          = $_REQUEST['id'];
        $actividad->date        = $_REQUEST['date'];
        $actividad->token_id    = $_REQUEST['token_id'];
        $actividad->action_id   = $_REQUEST['action_id'];
        $actividad->id > 0
            ? $this->model->Actualizar($actividad)
            : $this->model->Registrar($actividad);

        header("Location: index.php?c=actividad&v=".$_REQUEST['v']);
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=actividad&v='.$_REQUEST['v']);
    }
}

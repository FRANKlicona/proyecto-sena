<?php
require_once 'model/encuesta.php';

class encuestaController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new encuesta();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/encuesta/encuesta.php';
        require_once 'view/footer.php';
    }

   /* public function Crud//()
    {
        $encuesta = new encuesta//();

        if //(isset($_REQUEST['id'])) {
            $encuesta = $this->model->Obtener($_REQUEST['id']);
        //}

        require_once 'view/header.php';
        require_once 'view/actividad/actividad-editar.php';
        require_once 'view/footer.php';
    }*/

    public function Guardar()
    {


        $encuesta = new encuesta();

        $encuesta->id      = $_REQUEST['id'];
        $encuesta->name    = $_REQUEST['name'];
        $encuesta->token   = $_REQUEST['token'];
        $encuesta->program = $_REQUEST['program'];
        $encuesta->date    = $_REQUEST['date'];
        $encuesta->duration    = $_REQUEST['duration'];
        $encuesta->dimension_id = $_REQUEST['dimension_id'];
        $encuesta->id > 0
            ? $this->model->Actualizar($encuesta)
            : $this->model->Registrar($encuesta);

        header("Location: index.php?c=encuestad&v=".$_REQUEST['v']);
    }

    /*public function Eliminar//()
    //{
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=actividad&v='.$_REQUEST['v']);
    }*/
}

<?php
require_once 'model/remision.php';

class remisionController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Remision();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/remision/remision.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $remision = new Remision();

        if (isset($_REQUEST['id'])) {
            $remision = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/remision/remision-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar()
    {


        $remision = new Remision();

        $remision->id                   = $_REQUEST['id'];
        $remision->referal_type         = $_REQUEST['referal_type'];
        $remision->date_create          = $_REQUEST['date_create'];
        $remision->n_orden              = $_REQUEST['n_orden'];
        $remision->reason_referal       = $_REQUEST['reason_referal'];
        $remision->instructor_name      = $_REQUEST['instructor_name'];
        $remision->instructor_firm      = $_REQUEST['instructor_firm'];
        $remision->situation_found      = $_REQUEST['situation_found'];
        $remision->promises             = $_REQUEST['promises'];
        $remision->psico_firm_before    = $_REQUEST['psico_firm_before'];
        $remision->student_firm         = $_REQUEST['student_firm'];
        $remision->date_eval            = $_REQUEST['date_eval'];
        $remision->eval_track           = $_REQUEST['eval_track'];
        $remision->date_promises        = $_REQUEST['date_promises'];
        $remision->psico_firm_after     = $_REQUEST['psico_firm_after'];
        $remision->student_id           = $_REQUEST['student_id'];
        $remision->program_id           = $_REQUEST['program_id'];

        $remision->id > 0
            ? $this->model->Actualizar($remision)
            : $this->model->Registrar($remision);

        header("Location: index.php?c=remision");
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=remision');
    }
}

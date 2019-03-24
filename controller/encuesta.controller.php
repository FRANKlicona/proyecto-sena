<?php
require_once 'model/encuesta.php';

class EncuestaController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Encuesta();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/encuesta/encuesta.php';
        require_once 'view/footer.php';
    }

   public function Crud()
    {
        $encuesta = new Encuesta();

        if (isset($_REQUEST['id'])) {
            $encuesta = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/encuesta/encuesta-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar()
    {


        $encuesta = new Encuesta();

        //$encuesta->id      = $_REQUEST['id'];
        $encuesta->region    = $_REQUEST['region'];
        $encuesta->munipality   = $_REQUEST['munipality'];
        $encuesta->edificication   = $_REQUEST['edificication'];
        $encuesta->program_id = $_REQUEST['program_id'];
        $encuesta->age    = $_REQUEST['age'];
        $encuesta->gender_id    = $_REQUEST['gender_id'];
        $encuesta->training_modality = $_REQUEST['training_modality'];
        $encuesta->register_id = $_REQUEST['register_id'];
        $encuesta->question_1 = $_REQUEST['question_1'];
        $encuesta->question_2 = $_REQUEST['question_2'];
        $encuesta->question_3 = $_REQUEST['question_3'];
        $encuesta->question_4 = $_REQUEST['question_4'];
        $encuesta->question_5 = $_REQUEST['question_5'];
        $encuesta->question_6 = $_REQUEST['question_6'];
        $encuesta->question_7 = $_REQUEST['question_7'];
        $encuesta->question_8 = $_REQUEST['question_8'];
        $encuesta->question_9 = $_REQUEST['question_9'];
        $encuesta->question_10 = $_REQUEST['question_10'];
        
        $this->model->Registrar($encuesta);

        //$encuesta->id = 0 ? $this->model->Actualizar($encuesta): $this->model->Registrar($encuesta);

        header("Location: index.php?c=encuesta&v=".$_REQUEST['v']);
    }

    /*public function Eliminar//()
    //{
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=actividad&v='.$_REQUEST['v']);
    }*/
}

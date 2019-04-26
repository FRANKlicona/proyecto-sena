<?php
require_once 'model/estudiante.php';
require_once 'vendor\fzaninotto\faker\src\autoload.php';

class EstudianteController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Estudiante();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $estudiante = new Estudiante();

        if (isset($_REQUEST['id'])) {
            $estudiante = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar()
    {


        $estudiante = new Estudiante();
        

        $estudiante->id                 = $_REQUEST['id'];
        $estudiante->name               = $_REQUEST['name'];
        $estudiante->last_name          = $_REQUEST['last_name'];
        $estudiante->gender             = $_REQUEST['gender'];
        $estudiante->age                = $_REQUEST['age'];
        $estudiante->status             = $_REQUEST['status'];
        $estudiante->cell               = $_REQUEST['cell'];
        $estudiante->email              = $_REQUEST['email'];
        $estudiante->identification     = $_REQUEST['identification'];
        $estudiante->HR                 = $_REQUEST['HR'];
        $estudiante->token_id           = $_REQUEST['token_id'];
        // print_r($estudiante);die;
        $estudiante->id > 0
            ? $this->model->Actualizar($estudiante)
            : $this->model->Registrar($estudiante);

        header("Location: index.php?c=estudiante");
    }
    public function Faker()
    {
        $this->model->RegistrarFaker();
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=estudiante');
    }
}



?>
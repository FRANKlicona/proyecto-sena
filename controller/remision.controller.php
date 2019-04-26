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
        if ($_SESSION['dimension_id']==5 || $_SESSION['dimension_id'] == 7 ) {
            require_once 'view/header.php';
            require_once 'view/remision/remision.php';
            require_once 'view/footer.php';
        }else{
            setcookie('icon','error',time()+3);
            setcookie('text','Usted o se encuentra con acceso a este apartado', time()+3);
            header('Location:?c=Home&a=Index');
            
        }
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
        $remision->reason_referal       = $_REQUEST['reason_referal'];
        $remision->instructor_name      = $_REQUEST['instructor_name'];
        $remision->identification_id    = $_REQUEST['identification_id'];
        $remision->instructor_email      = $_REQUEST['instructor_email'];

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

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
    }

    public function Guardar()
    {
        $apoyo = new apoyo();

        $apoyo->id = $_REQUEST['id'];
        $apoyo->dni = $_REQUEST['dni'];
        $apoyo->Nombre = $_REQUEST['Nombre'];
        $apoyo->Apellido = $_REQUEST['Apellido'];
        $apoyo->Correo = $_REQUEST['Correo'];
        $apoyo->telefono = $_REQUEST['telefono'];


        $apoyo->id > 0
            ? $this->model->Actualizar($apoyo)
            : $this->model->Registrar($apoyo);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}


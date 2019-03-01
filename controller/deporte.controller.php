<?php
require_once 'model/deporte.php';

class deporteController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new deporte();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/deporte/deporte.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $deporte = new deporte();

        if (isset($_REQUEST['id'])) {
            $deporte = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/deporte/deporte-editar.php';
    }

    public function Guardar()
    {
        $deporte = new deporte();

        $deporte->id = $_REQUEST['id'];
        $deporte->dni = $_REQUEST['dni'];
        $deporte->Nombre = $_REQUEST['Nombre'];
        $deporte->Apellido = $_REQUEST['Apellido'];
        $deporte->Correo = $_REQUEST['Correo'];
        $deporte->telefono = $_REQUEST['telefono'];


        $deporte->id > 0
            ? $this->model->Actualizar($deporte)
            : $this->model->Registrar($deporte);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}


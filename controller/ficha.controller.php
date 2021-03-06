<?php
require_once 'model/ficha.php';

class FichaController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Ficha();
        $this->listado = new Lista();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/ficha/ficha.php';
        require_once 'view/footer.php';
    }
    public function Info()
    {
        $ficha = new Ficha();

        if (isset($_REQUEST['id'])) {
            $ficha = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/ficha/ficha-info.php';
        require_once 'view/footer.php';
    }

    public function Crud()
    {
        $ficha = new Ficha();

        if (isset($_REQUEST['id'])) {
            $ficha = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/ficha/ficha-editar.php';
        require_once 'view/footer.php';
    }

    public function ListarPeticion($opc)
    {
        $peticion = new Lista();
        $peticion = $this->listado->ListarPeticion($opc);
    }

    public function Guardar()
    {
        // print_r($_REQUEST);
        $ficha = new Ficha();

        $ficha->id      = $_REQUEST['id'];
        $ficha->name    = $_REQUEST['name'];
        $ficha->student   = $_REQUEST['student'];
        $ficha->date_start = $_REQUEST['date_start'];
        $ficha->date_finish    = $_REQUEST['date_finish'];
        $ficha->journey    = $_REQUEST['journey'];
        $ficha->status      = $_REQUEST['status'];
        $ficha->place       = $_REQUEST['place'];
        $ficha->formation_level = $_REQUEST['formation_level'];
        $ficha->program_id = $_REQUEST['program_id'];
        
        $ficha->id > 0
            ? $this->model->Actualizar($ficha)
            : $this->model->Registrar($ficha);

        header("Location: index.php?c=ficha");
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=ficha');
    }
}

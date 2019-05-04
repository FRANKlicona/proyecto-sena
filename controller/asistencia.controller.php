<?php
require_once 'model/accion.php';
require_once 'model/validacion.php';

class AsistenciaController
{

   private $model;

   public function __CONSTRUCT()
   {
      $this->model = new Accion();
      $this->valid = new Validacion();
   }

   public function Index()
   {
      require_once 'view/header.php';
      require_once 'view/accion/accion.php';
      require_once 'view/footer.php';
   }

   public function Crud()
   {
      $accion = new Accion();

      if (isset($_REQUEST['id'])) {
         $accion = $this->model->Obtener($_REQUEST['id']);
      }

      require_once 'view/header.php';
      require_once 'view/accion/accion-editar.php';
      require_once 'view/footer.php';
   }

   public function Guardar()
   {

      $accion = new Accion();

      $accion->id           = $_REQUEST['id'];
      $accion->name         = $_REQUEST['name'];
      $accion->dimension_id = $_REQUEST['dimension_id'];
      $accion->sumbit       = $_REQUEST['submit'];
      $this->valid->Validar($accion);
      $accion->id > 0
         ? $this->model->Actualizar($accion)
         : $this->model->Registrar($accion);

      header("Location: index.php?c=accion");
   }

   public function Eliminar()
   {
      $this->model->Eliminar($_REQUEST['id']);
      header('Location: index.php?c=accion');
   }
}

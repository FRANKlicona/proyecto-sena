<?php
class actividad
{
    private $pdo;

    public $id;
    public $date;
    public $action_id;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar($dim)
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT 
                actividades.id,
                date,
                acciones.id as exe_id,
                acciones.name as exe_name 
                FROM actividades 
                INNER JOIN acciones on action_id=acciones.id" );
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function ListarAcciones()
    {
        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM acciones");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Obtener($id)
    {
        try {
            $stm = $this->pdo
                ->prepare("SELECT * FROM actividades WHERE id = ?");


            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM actividades WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE actividades SET  
                        date        = ?,
                        action_id   = $data->action_id
						
                    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->date,

                        $data->id


                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(actividad $data)
    {
        try {
            $sql = "INSERT INTO actividades (date,action_id) 
                VALUES ( ? ,? ,$data->action_id)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->date
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


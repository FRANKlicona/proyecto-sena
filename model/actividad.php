<?php
class actividad
{
    private $pdo;

    public $id;
    public $name;
    public $token;
    public $program;
    public $date;
    public $duration;
    public $dimension_id;

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
                actividades.name,
                dimensiones.id as dim_id,
                dimensiones.name as dim_name 
                FROM actividades 
                INNER JOIN dimensiones on dimension_id=dimensiones.id 
                WHERE dimension_id = ".$dim);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function ListarDimension()
    {
        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM dimensiones");
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
                        name        = ?,
                        token       = ?,
                        program     = ?,
                        date        = ?,
                        duration    = ?,
                        dimension_id= $data->dimension_id
						
                    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->token,
                        $data->program,
                        $data->date,
                        $data->duration,

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
            $sql = "INSERT INTO actividades (name,token,program,date,duration,dimension_id) 
                VALUES ( ? ,? ,? ,? ,? ,$data->dimension_id)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->token,
                        $data->program,
                        $data->date,
                        $data->duration

                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


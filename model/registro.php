<?php
class registro
{
    private $pdo;

    public $id;
    public $students;
    public $men;
    public $women;
    public $dimension_id;
    public $token_id;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT registros.id,students,men,women,actividades.id as dim_id,actividades.name as dim_name,fichas.id as tok_id, fichas.name as tok_name FROM registros INNER JOIN actividades on activity_id=actividades.id INNER JOIN fichas ON token_id = fichas.id where dimension_id = 1");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function ListarActividad()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM actividades");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function ListarFicha()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM fichas");
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
                ->prepare("SELECT * FROM registros WHERE id = ?");


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

    public function Registrar(registro $data)
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

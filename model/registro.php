<?php
class registro
{
    private $pdo;

    public $id;
    public $students;
    public $men;
    public $women;
    public $activity_id;
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

            $stm = $this->pdo->prepare("SELECT 
                    registros.id,
                    students,
                    men,
                    women,
                    actividades.id as act_id,
                    actividades.name as act_name,
                    fichas.id as tok_id,
                    fichas.name as tok_name 
                FROM registros 
                INNER JOIN actividades on activity_id=actividades.id 
                INNER JOIN fichas ON token_id = fichas.id ");
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
                ->prepare("DELETE FROM registros WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE resgistros SET                         
                        students        = ?,
                        men       = ?,
                        women     = ?,
                        activity_id= $data->activity_id,
                        token_id= $data->token_id
						
                    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->students,
                        $data->men,
                        $data->women,
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
            $sql = "INSERT INTO registros (students,men,women,activity_id,token_id) 
                VALUES ( ? ,? ,? ,$data->activity_id,$data->token_id)";
            // print_r($data);
            // print_r($_REQUEST);
            // print_r($sql);
            // die;
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->students,
                        $data->men,
                        $data->women

                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

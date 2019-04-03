<?php
class Estudiante
{
    private $pdo;

    public $id;
    public $name;
    public $last_name;
    public $gender;
    public $age;
    public $status;
    public $cell;
    public $email;
    public $identification;
    public $HR;
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
                estudiantes.id as id,
                estudiantes.name as student_name,
                last_name,
                gender,
                age,
                cell,
                email,
                identification,
                HR,
                fichas.id as token_id,
                fichas.name as token_name 
                FROM estudiantes 
                INNER JOIN fichas on token_id=fichas.id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Cantidad()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT COUNT(*) as cant FROM estudiantes");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
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
                ->prepare("SELECT *,estudiantes.name as student_name 
                           FROM estudiantes
                           WHERE estudiantes.id = ?"
                         );


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
                ->prepare("DELETE FROM estudiantes WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE estudiantes SET  
                        name           = ?,
                        last_name      = ?,
                        gender         = ?,
                        status         = ?,
                        age            = ?,
                        cell           = ?,
                        identification = ?,
                        HR             = ?,
                        token_id       = $data->token_id,
                        action_id      = $data->action_id						
                    WHERE id = ?";
//                     print_r($data);
// die($sql);

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

    public function Registrar(estudiante $data)
    {
        try {
            $sql = "INSERT INTO estudiantes (name,last_name,gender,age,cell,email,identification,HR,token_id) 
                VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , $data->token_id)";
            // print_r($_REQUEST);
            // echo $sql."llega aqui";
            // die;
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


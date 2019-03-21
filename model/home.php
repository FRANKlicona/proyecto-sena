<?php
class home
{
    private $pdo;

    public $id;
    public $students;
    public $men;
    public $women;
    public $duration;
    public $activity_id;
    public $program_id;
    public $token_id;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ListarPeticion()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare( "SELECT 
                    peticiones.id,
                    date_create,
                    requester,
                    peticiones.pass_code as code,
                    fichas.id               as tok_id,
                    fichas.name             as tok_name,
                    acciones.name           as acc_name
                FROM peticiones 
                    INNER JOIN fichas       ON token_id     = fichas.id  
                    INNER JOIN acciones     ON action_id    = acciones.id ");
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
    public function ListarPrograma()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM programas");
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
                        students    = ?,
                        men         = ?,
                        women       = ?,
                        duration    = ?,
                        activity_id = $data->activity_id,
                        activity_id = $data->program_id,
                        token_id    = $data->token_id
						
                    WHERE id = ?";
            // print_r($sql);
            // print_r($_REQUEST);
            // print_r($data);
            // die;
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->students,
                        $data->men,
                        $data->women,
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
            $sql = "INSERT INTO registros (students,men,women,date,duration,activity_id,program_id,token_id) 
                VALUES ( ? ,? ,? ,?,?,$data->activity_id,$data->program_id,$data->token_id)";
            // echo "<pre>";
            // print_r($_REQUEST);
            // print_r($data);
            // print_r($sql);
            // echo "</pre>";
            // die;
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->students,
                        $data->men,
                        $data->women,
                        $data->duration

                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
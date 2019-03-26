<?php
class Remision
{
    private $pdo;

    public $id;
    public $referal_type;
    public $date_create;
    public $n_orden;
    public $reason_referal;
    public $instructor_name;
    public $instructor_firm;
    public $situation_found;
    public $promises;
    public $psico_firm_before;
    public $student_firm;
    public $date_eval;
    public $eval_track;
    public $date_promises;
    public $psico_firm_after;
    public $student_id;
    public $program_id;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar($i,$c)
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare( "SELECT
                remisiones.id as id, 
                referal_type,
                date_create,
                n_orden,
                reason_referal,
                instructor_name,
                instructor_firm,
                situation_found,
                promises,
                psico_firm_before,
                student_firm,
                date_eval,
                eval_track,
                date_promises,
                psico_firm_after,
                estudiantes.name as stutent,
                programas.name as program
                FROM remisiones 
                INNER JOIN estudiantes ON estudiantes.id = remisiones.stutent_id
                INNER JOIN programas ON programas.id = remisiones.program_id
                ORDER BY date_create DESC LIMIT ".$c . ', ' . $i );
                // print_r($stm);
                // die;
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

            $stm = $this->pdo->prepare("SELECT COUNT(*) as cant FROM remisiones");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ListarAccion()
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
            $stm = $this->pdo->prepare("SELECT * FROM remisiones WHERE id = ?");
            $stm->execute(array($id));

            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $stm = $this->pdo->prepare("DELETE FROM remisiones WHERE id = ?");
            $stm->execute(array($id));

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE remisiones SET  
                        date        = ?,
                        token_id    = $data->token_id
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

    public function Registrar(remision $data)
    {
        try {
            $sql = "INSERT INTO remisiones (date,token_id,action_id) 
                VALUES ( ? ,$data->token_id,$data->action_id)";
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


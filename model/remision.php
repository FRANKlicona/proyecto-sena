<?php
class Remision
{
    private $pdo;

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
                date_create,
                n_orden,
                instructor_name,
                date_eval,
                estudiantes.name as stutent
                FROM remisiones 
                INNER JOIN estudiantes ON estudiantes.identification = remisiones.student_ide
                ORDER BY date_create DESC LIMIT ".$c . ', ' . $i);
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
            $stm = $this->pdo->prepare("SELECT
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
            date_promises,
            psico_firm_after,
            identification_id,
            program_id,
            estudiantes.name as stutent 
            FROM remisiones 
            INNER JOIN estudiantes ON estudiantes.identification = remisiones.identification_id 
            WHERE remisiones.id = ?");
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
                          referal_type       = ?,
                          date_create        = ?,
                          n_orden            = ?,
                          reason_referal     = ?,
                          instructor_name    = ?,
                          situation_found    = ?,
                          promises           = ?,
                          date_eval          = ?,
                          eval_track         = ?,
                          date_promises      = ?,
                          identification_id  = ?,
                          program_id         = ?
						
                    WHERE id = ?";
            // print_r($sql);
            // print_r($_REQUEST);
            // print_r($data);
            // die;
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->referal_type,
                        $data->date_create,
                        $data->n_orden,
                        $data->reason_referal,
                        $data->instructor_name,
                        $data->situation_found,
                        $data->promises,
                        $data->date_eval,
                        $data->eval_track,
                        $data->date_promises,
                        $data->identification_id,
                        $data->program_id,
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
        $d= date('Y-m-d');
        $stm = $this->pdo->prepare("SELECT * FROM remisiones WHERE date_create = ?");
        $stm->execute(array($d));
        $n= date('Ymd');
        $n .= "0".$stm->rowCount();
            $n_orden = $n;
            $sql = "INSERT INTO remisiones (
                    date_create,
                    n_orden,
                    reason_referal,
                    instructor_name,
                    instructor_email,
                    student_ide
                    ) 
                    VALUES (now(), $n_orden,?,?,?,
                        $data->identification_id)";
            // die($sql."llega aqui");
            
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->reason_referal,
                        $data->instructor_name,
                        $data->instructor_email
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


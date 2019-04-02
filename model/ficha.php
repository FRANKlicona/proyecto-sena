<?php
class Ficha
{
    private $pdo;

    public $id;
    public $date;
    public $token_id;
    public $action_id;

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
                fichas.id as id,
                fichas.name as fichaName,
                student,
                date_start,
                date_finish,
                journey,
                pass_code,
                programas.name as programaName
                FROM fichas 
                INNER JOIN programas on program_id = programas.id
                LIMIT ".$c . ', ' . $i );
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

            $stm = $this->pdo->prepare("SELECT COUNT(*) as cant FROM fichas");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ListarPrograma()
    {
        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT id,name FROM programas");
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
                ->prepare("SELECT
                    fichas.id as fichasId,
                    fichas.name as fichasName,
                    student,
                    date_start,
                    date_finish,
                    journey,
                    pass_code,
                    programas.id as programasId,
                    programas.name as programaName
                    FROM fichas
                    INNER JOIN programas on program_id = programas.id
                    WHERE fichas.id = ?"
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
                ->prepare("DELETE FROM fichas WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE fichas SET  
                            name        = ?,
                            student     = ?,
                            date_start  = ?,
                            date_finish = ?,
                            journey     = ?,
                            pass_code 	= ?,
                            program_id  = ?					
                    WHERE id = ?";
//                     print_r($data);
// die($sql);

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(ficha $data)
    {
        try {
            $sql = "INSERT INTO fichas (date,token_id,action_id) 
                VALUES ( ? , ? , ? , ? , ? , ? , ?)";
            // print_r($_REQUEST);
            // echo $sql."llega aqui";
            // die;
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->student,
                        $data->date_start,
                        $data->date_finish,
                        $data->journey,
                        $data->pass_code,
                        $data->program_id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


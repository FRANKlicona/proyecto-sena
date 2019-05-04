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
                date_start as date_start,
                date_finish as date_finish,
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
                    fichas.id as tok_id,
                    fichas.name as tok_name,
                    student,
                    date_start,
                    date_finish,
                    journey,
                    pass_code,
                    programas.id as pro_id,
                    programas.name as pro_name
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
                            status      = ?,
                            place       = ?,
                            formation_level= ?,
                            program_id  = ?					
                    WHERE id = ?";

//                     print_r($data);
// die($sql);

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->student,
                        $data->date_start,
                        $data->date_finish,
                        $data->journey,
                        $data->program_id,
                        $data->id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(ficha $data)
    {
        try {
            $sql = "INSERT INTO fichas (name,student,date_start,date_finish,journey,status,place,formation_level,pass_code,program_id) 
                VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ?)";
            $alpha = "123QWERTYUIOPA456sdSDFGHJKLZXCVBNM789";
            $data->pass_code = "";
            $longitud = 3;
            for ($i = 0; $i < $longitud; $i++) {
                $data->pass_code .= $alpha[rand(0, strlen($alpha) - 1)];
            } 
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->student,
                        $data->date_start,
                        $data->date_finish,
                        $data->journey,
                        $data->status,
                        $data->place,
                        $data->formation_level,
                        $data->pass_code,
                        $data->program_id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


<?php
class Actividad
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

    public function Listar($i, $c, $o, $ch, $shr,$v)
    {
        try {
            $result = array();
            switch ($ch) {
                case '-1':
                    $ch = 'DESC';
                    break;
                case '1':
                    $ch = '';
                    break;
                default:
                    $ch = '';
                    break;
            }
            $d = ($_SESSION['dimension_id']!=7) ? "AND acciones.dimension_id = ".$_SESSION['dimension_id'] : "" ;
            $v = ($v=="v")?"VENCIDA":"NO";
            $v = ($v == "s") ? "SI" : "NO";
            $o = ($o != '') ? $o : 'date_create';
            $stm = $this->pdo->prepare("SELECT 
                actividades.id,                
                date,
                fichas.id       as tok_id,
                fichas.name     as tok_name,
                acciones.id     as exe_id,
                acciones.name   as exe_name,
                programas.name  as pro_name,
                acciones.dimension_id as exe_dim
                FROM actividades 
                INNER JOIN fichas   on token_id = fichas.id
                INNER JOIN acciones on action_id= acciones.id
                INNER JOIN programas on program_id= programas.id
                WHERE checkit = '$v'" . $shr .$d."
                ORDER BY " . $o . " " . $ch . " 
                LIMIT " . $c . ', ' . $i);
            // print_r($stm);
            // die;
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Cantidad($shr)
    {
        try {
            $result = array();
            $d = ($_SESSION['dimension_id'] != 7) ? "AND acciones.dimension_id = " . $_SESSION['dimension_id'] : "";
            $stm = $this->pdo->prepare("SELECT 
                COUNT(*) as cant
                FROM actividades 
                INNER JOIN fichas   on token_id = fichas.id
                INNER JOIN acciones on action_id = acciones.id
                WHERE checkit = 'NO' ".$shr. $d);
            // print_r($stm);
            // die;
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
    public function ListarFicha()
    {
        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT fichas.id as id,fichas.name as name,programas.name AS pro_name FROM fichas
            INNER JOIN programas ON program_id = programas.id");
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
                ->prepare(
                    "SELECT *,acciones.name as exe_name 
                        FROM actividades
                        INNER JOIN acciones on action_id = acciones.id
                        WHERE actividades.id = ?"
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
                        token_id    = $data->token_id,
                        action_id   = $data->action_id						
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

    public function Registrar(actividad $data)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM actividades where token_id = ? and checkit = 'NO'");
            $stm->execute(array($data->token_id));
            
            if ($stm->rowCount() < 14) {
                $sql = "INSERT INTO actividades (date,token_id,action_id) 
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
            }else{
                header('Location:?c=Actividad&a=Crud');
                die;
            }            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


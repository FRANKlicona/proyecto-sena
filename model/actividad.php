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

    public function Listar($i,$c,$o,$ch,$shr)
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
                    $ch='';
                    break;
            }
             
            $o= ($o!='')? $o : 'date';
            $stm = $this->pdo->prepare( "SELECT 
                actividades.id,                
                date,
                fichas.id       as tok_id,
                fichas.name     as tok_name,
                acciones.id     as exe_id,
                acciones.name   as exe_name,
                programas.name  as pro_name
                FROM actividades 
                INNER JOIN fichas   on token_id = fichas.id
                INNER JOIN acciones on action_id= acciones.id
                INNER JOIN programas on program_id= programas.id
                WHERE checkit = 'NO'".$shr."
                ORDER BY ".$o." ".$ch." 
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
    public function Cantidad($shr)
    {
        try {
            $result = array();
            
            $stm = $this->pdo->prepare("SELECT 
                COUNT(*) as cant
                FROM actividades 
                INNER JOIN fichas   on token_id = fichas.id
                WHERE checkit = 'NO' $shr");
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
                ->prepare("SELECT *,acciones.name as exe_name 
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
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


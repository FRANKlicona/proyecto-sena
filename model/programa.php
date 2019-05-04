<?php
class Programa
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
                id,                
                name,
                status,
                mode,
                type
                FROM programas
                ORDER BY name DESC 
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

            $stm = $this->pdo->prepare("SELECT COUNT(*) as cant FROM programas");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Obtener($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM programas WHERE id = ?");

            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $stm = $this->pdo->prepare("DELETE FROM programas WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE programas SET  
                        name    = ?,
                        status  = ?,
                        mode    =?,
                        type    =?						
                    WHERE id = ?";
                //print_r($data);
                // die($sql);

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->status,
                        $data->mode,
                        $data->type,
                        $data->id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(programa $data)
    {
        try {
            $sql = "INSERT INTO programas (name,status,mode,type) 
                VALUES ( ? , ? , ? , ? )";
            // print_r($_REQUEST);
            // echo $sql."llega aqui";
            // die;
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->status,
                        $data->mode,
                        $data->type
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


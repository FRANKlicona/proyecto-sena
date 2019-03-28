<?php
class Accion
{
    private $pdo;

    public $id;
    public $name;
    public $dimension_id;

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
                acciones.id as id,
                acciones.name,
                dimensiones.id as dim_id,
                dimensiones.name as dim_name 
                FROM acciones 
                INNER JOIN dimensiones on dimension_id=dimensiones.id");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function ListarDimension()
    {
        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM dimensiones");
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
                ->prepare("SELECT * FROM acciones WHERE id = ?");


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
                ->prepare("DELETE FROM acciones WHERE id = ?");
            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE acciones SET                         
                        name        = ?,
                        dimension_id= $data->dimension_id
						
                    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->id


                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(accion $data)
    {
        try {
            $sql = "INSERT INTO acciones (name,dimension_id) 
                VALUES ( ? ,$data->dimension_id)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
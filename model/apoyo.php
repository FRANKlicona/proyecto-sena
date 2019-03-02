<?php
class apoyo
{
    private $pdo;

    public $id;
    public $name;
    public $token;
    public $program;
    public $date;
    public $duration;

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

            $stm = $this->pdo->prepare("SELECT * FROM apoyo");
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
                ->prepare("SELECT * FROM apoyo WHERE id = ?");


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
                ->prepare("DELETE FROM apoyo WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE apoyo SET                         
                        name    = ?,
                        token   = ?,
                        program = ?,
                        date    = ?,
                        duration= ?
						
                    WHERE id = ?";
                echo"<pre>";
                print_r($sql);             
                echo"</pre>";
                echo"<pre>";
                print_r($data);             
                echo"</pre>";
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->token,
                        $data->program,
                        $data->date,
                        $data->duration,
                        $data->id
                        
                    )
                    );
                print_r($data);
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(apoyo $data)
    {
        try {
            $sql = "INSERT INTO apoyo (name,token,program,date,duration) 
		        VALUES (?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->token,
                        $data->program,
                        $data->date,
                        $data->duration
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


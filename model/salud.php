<?php
class salud
{
    private $pdo;

    public $id;
    public $name;
    public $token;
    public $program;
    public $date;
    public $duration;
    public $diemension_id='6';

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

            $stm = $this->pdo->prepare("SELECT * FROM actividades");
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
                ->prepare("SELECT * FROM actividades WHERE id = ?");


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
                        name    = ?,
                        token   = ?,
                        program = ?,
                        date    = ?,
                        duration= ?,
                        dimension_id ='6'
						
				    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->token,
                        $data->program,
                        $data->date,
                        $data->duration,
                        $data->dimension_id,
                        $data->id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(salud $data)
    {
        try {
            $sql = "INSERT INTO actividades (name,token,program,date,duration, dimension_id) 
		        VALUES (?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->token,
                        $data->program,
                        $data->date,
                        $data->duration,
                        $data->dimension_id

                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

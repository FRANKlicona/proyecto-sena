<?php
class cultura
{
    private $pdo;

    public $id;
    public $dni;
    public $Nombre;
    public $Apellido;
    public $Correo;
    public $Telefono;
    public $dimension_id = '2';

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
						dni      		= ?,
						Nombre          = ?, 
						Apellido        = ?,
                        Correo        = ?,
                        Telefono        = ?,
						dimension_id = ?

				    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->dni,
                        $data->Nombre,
                        $data->Apellido,
                        $data->Correo,
                        $data->telefono,
                        $data->id,
                        $data->dimension_id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(actividades $data)
    {
        try {
            $sql = "INSERT INTO actividades (dni,Nombre,Apellido,Correo,telefono, dimension_id) 
		        VALUES (?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->dni,
                        $data->Nombre,
                        $data->Apellido,
                        $data->Correo,
                        $data->telefono,
                        $data->dimension_id

                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


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

            $stm = $this->pdo->prepare("SELECT * FROM cultura");
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
                ->prepare("SELECT * FROM cultura WHERE id = ?");


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
                ->prepare("DELETE FROM cultura WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE cultura SET 
						dni      		= ?,
						Nombre          = ?, 
						Apellido        = ?,
                        Correo        = ?,
                        Telefono        = ?
						
				    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->dni,
                        $data->Nombre,
                        $data->Apellido,
                        $data->Correo,
                        $data->telefono,
                        $data->id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(cultura $data)
    {
        try {
            $sql = "INSERT INTO cultura (dni,Nombre,Apellido,Correo,telefono) 
		        VALUES (?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->dni,
                        $data->Nombre,
                        $data->Apellido,
                        $data->Correo,
                        $data->telefono

                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


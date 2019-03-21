<?php
class Peticion
{
	private $pdo;

	public $id;
	public $date_create;
	public $requester;
	public $action_id;
	public $token_id;
	public $pass_code_id;

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

            $stm = $this->pdo->prepare( "SELECT 
                peticiones.id,
                date_create,
                requester,
                acciones.id     as exe_id,
                acciones.name   as exe_name 
                fichas.id       as tok_id,
                fichas.name     as tok_name,
                pass_code_id,
                FROM peticiones 
                INNER JOIN fichas   on token_id = fichas.id
                INNER JOIN acciones on action_id= acciones.id" );
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
            $stm = $this->pdo->prepare("SELECT * FROM peticiones");
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
                ->prepare("SELECT * FROM peticiones WHERE id = ?");


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
                ->prepare("DELETE FROM peticiones WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


}




?>
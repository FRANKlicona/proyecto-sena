<?php
class Home
{
    private $pdo;

    public $id;
    public $date_create;
    public $requester;
    public $pass_code;
    public $action_id;
    public $token_id;



    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Verificar($email,$password)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM users where email = ? and password = ?");
            $stm->execute(array($email,$password));
            if ($stm->rowCount() > 0) {
                $_SESSION['admin'] = true;
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }else{ 
                $_SESSION['admin'] = false;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ListarDimensiones()
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

    public function Registrar(home $data)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM users where email = ? ");
            $stm->execute(array($data->email));
            if ($stm->rowCount() > 0) {
                header('location:?c=home&a=Ingreso');
                die;
            } else{
                $sql = "INSERT INTO users (name,last_name,tell,email,password,dimension_id,rol_id) 
                VALUES ( ? ,? ,? ,? ,? ,$data->dimension_id,$data->rol_id)";
                $this->pdo->prepare($sql)
                    ->execute(
                        array(
                            $data->name,
                            $data->last_name,
                            $data->tell,
                            $data->email,
                            $data->password
                        )
                    );
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function RegistrarPeticion(home $data)
    {
        try {
       
                $sql = "INSERT INTO peticiones (date_create,requester,pass_code,action_id,token_id) 
                VALUES ( ? ,? ,? ,$data->action_id,$data->token_id)";
                $this->pdo->prepare($sql)
                    ->execute(
                        array(
                            $data->date_create,
                            $data->requester,
                            $data->pass_code
                         
                        )
                    );
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ListarPeticion()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare( "SELECT 
                    peticiones.id,
                    date_create,
                    requester,
                    peticiones.pass_code as code,
                    fichas.id               as tok_id,
                    fichas.name             as tok_name,
                    acciones.name           as acc_name
                FROM peticiones 
                    INNER JOIN fichas       ON token_id     = fichas.id  
                    INNER JOIN acciones     ON action_id    = acciones.id ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function ListarActividad()
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
    public function ListarPrograma()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM programas");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
}

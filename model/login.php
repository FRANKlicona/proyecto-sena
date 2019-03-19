<?php
class login
{
    private $pdo;

    public $id;
    public $name;
    public $last_name;
    public $tell;
    public $email;
    public $password;
    public $dimension_id;
    public $rol_id;
    
    
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
                
            }
            
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Registrar(login $data)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM users where email = ? ");
            $stm->execute(array($data->email));
            if ($stm->rowCount() > 0) {
                header('location:?c=login&a=Ingreso');
                die;
            }
            else{
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
}


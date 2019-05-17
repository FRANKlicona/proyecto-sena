<?php
class Estudiante
{
    private $pdo;

    public $id;
    public $name;
    public $last_name;
    public $gender;
    public $age;
    public $status;
    public $cell;
    public $email;
    public $identification;
    public $HR;
    public $token_id;

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
                estudiantes.id as id,
                estudiantes.name as student_name,
                last_name,
                gender,
                age,
                estudiantes.status as status,
                cell,
                email,
                identification,
                HR,
                fichas.id as tok_id,
                fichas.name as tok_name 
                FROM estudiantes 
                INNER JOIN fichas on token_id=fichas.id
                LIMIT " . $c . ', ' . $i);
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

            $stm = $this->pdo->prepare("SELECT COUNT(*) as cant FROM estudiantes");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
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
                ->prepare("SELECT *,estudiantes.name as student_name 
                           FROM estudiantes
                           WHERE estudiantes.id = ?"
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
                ->prepare("DELETE FROM estudiantes WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE estudiantes SET  
                        name           = ?,
                        last_name      = ?,
                        gender         = ?,
                        status         = ?,
                        age            = ?,
                        cell           = ?,
                        identification = ?,
                        HR             = ?,
                        token_id       = $data->token_id
                        					
                    WHERE id = ?";
//                     print_r($data);
// die($sql);

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->id


                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(estudiante $data)
    {
        try {
            $sql = "INSERT INTO estudiantes (name,last_name,gender,age,status,cell,email,identification,HR,token_id) 
                VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , $data->token_id)";
            //  print_r($data);die;
            //  echo $sql."llega aqui";
            // die;
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->name,
                        $data->last_name,
                        $data->gender,
                        $data->age,
                        $data->status,
                        $data->cell,
                        $data->email,    
                        $data->identification,
                        $data->HR
                        

                    )
                );
                
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function RegistrarFaker()
    {
        try {
            for ($i=0; $i < 52 ; $i++) {
                $faker = Faker\Factory::create('es_ES');
                $sql = "INSERT INTO estudiantes (name,last_name,gender,age,status,cell,email,identification,HR,token_id) 
                VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? ,?)";
                $this->pdo->prepare($sql)
                    ->execute(
                        array(
                            $faker->firstName . ' '. $faker->firstName,
                            $faker->lastName.' '. $faker->lastName,
                            $faker->numberBetween(1,2),
                            $faker->numberBetween(16, 25),
                            1,
                            $faker->phoneNumber,
                            $faker->freeEmail,
                            $faker->numberBetween(1000000000, 1500000000),
                            $faker-> numberBetween(1,8),
                            $faker->numberBetween(1, 2,4,5)
                        )
                    );
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


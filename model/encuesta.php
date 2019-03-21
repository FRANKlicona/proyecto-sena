<?php
class encuesta
{
    private $pdo;

    public $region;
    public $munipality;
    public $edificication;
    public $program_id;
    public $age;
    public $gender_id;
    public $training_modality;
    public $register_id;
    public $question_1;
    public $question_2;
    public $question_3;
    public $question_4;
    public $question_5;
    public $question_6;
    public $question_7;
    public $question_8;
    public $question_9;
    public $question_10;

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
                region,
                munipality,
                edificication,
                programas.name as program,
                age,
                gender_id,
                training_modality,
                acciones.name as activity,
                question_1,
                question_2,
                question_3,
                question_4,
                question_5,
                question_6,
                question_7,
                question_8,
                question_9,
                question_10
                FROM encuestas
                INNER JOIN programas ON encuestas.program_id =  programas.id
                INNER JOIN registros ON register_id = registros.id  
                INNER JOIN actividades ON registros.activity_id = actividades.id
                INNER JOIN acciones ON actividades.action_id = acciones.id  
                ");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
            die;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function ListarProgram()
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

    public function ListarActivity()
    {
        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT 
                                        actividades.id,
                                        acciones.name 
                                        FROM actividades 
                                        INNER JOIN acciones
                                        WHERE action_id = acciones.id
                                      ");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(encuesta $data)
    {
        try {
            $sql = "INSERT INTO encuestas  (
                                            region,
                                            munipality,
                                            edificication,
                                            program_id,
                                            age,
                                            gender_id,
                                            training_modality,
                                            register_id,
                                            question_1,
                                            question_2,
                                            question_3,
                                            question_4,
                                            question_5,
                                            question_6,
                                            question_7,
                                            question_8,
                                            question_9,
                                            question_10) 
                    VALUES ( ? ,? ,? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ?, ? )";
                    

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->region,
                        $data->munipality,
                        $data->edificication,
                        $data->program_id,
                        $data->age,
                        $data->gender_id,
                        $data->training_modality,
                        $data->register_id,
                        $data->question_1,
                        $data->question_2,
                        $data->question_3,
                        $data->question_4,
                        $data->question_5,
                        $data->question_6,
                        $data->question_7,
                        $data->question_8,
                        $data->question_9,
                        $data->question_10
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


<?php
class Registro
{
    private $pdo;

    public $id;
    public $students;
    public $men;
    public $women;
    public $duration;
    public $activity_id;
    public $program_id;
    public $token_id;

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
            $d = ($_SESSION['dimension_id'] != 9) ? "WHERE acciones.dimension_id = " . $_SESSION['dimension_id'] : "";
            $stm = $this->pdo->prepare( "SELECT 
                    registros.id,
                    students,
                    men,
                    women,
                    duration,
                    actividades.id          as act_id,
                    actividades.date        as act_date,
                    actividades.action_id   as act_action_id,
                    acciones.name           as acc_name
                FROM registros 
                INNER JOIN actividades  on activity_id          = actividades.id 
                INNER JOIN acciones     ON actividades.action_id= acciones.id 
                $d");
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
            $opc = ($_SESSION['dimension_id']!=9) ? "AND acciones.dimension_id = ".$_SESSION['dimension_id'] : "" ;
            $stm = $this->pdo->prepare( "SELECT 
                actividades.id,
                date,
                acciones.name   as exe_name, 
                fichas.name     as tok_name
                FROM actividades 
                INNER JOIN acciones on action_id= acciones.id
                INNER JOIN fichas   on token_id = fichas.id
                WHERE checkit = 'NO' $opc ");
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
                ->prepare("SELECT * FROM registros WHERE id = ?");


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
                ->prepare("DELETE FROM registros WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {            
            $sql = "UPDATE resgistros SET                         
                        students    = ?,
                        men         = ?,
                        women       = ?,
                        duration    = ?,
                        activity_id = $data->activity_id
						
                    WHERE id = ?";
            // print_r($sql);
            // print_r($_REQUEST);
            // print_r($data);
            // die;
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->students,
                        $data->men,
                        $data->women,
                        $data->date,
                        $data->duration,
                        $data->id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());

        }
    }
    public function Registrar(registro $data)
    {
        try {
            // Se realiza la insercion a la base de datos del nuevo registro
            $sql = "INSERT INTO registros (students,men,women,duration,activity_id) 
                VALUES ( ? ,? ,?,?,$data->activity_id)";
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->students,
                        $data->men,
                        $data->women,
                        $data->duration
                    )
                );
            // Se actializa el estado de la activia a "SI" indicando que se realizo
            $sql = "UPDATE actividades SET checkit = 'SI' WHERE id = ?";
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->activity_id
                    )
                );
            // se extrae el No Referecia de la actividad
            $stm = $this->pdo
                ->prepare("SELECT no_reff,date FROM actividades WHERE id = ?");
            $stm->execute(array($data->activity_id));
            $row = $stm->fetch(PDO::FETCH_OBJ);
                // se encuentra la coincidencia con el No Referencia en las peticiones
            $stm = $this->pdo
                ->prepare( "SELECT * FROM peticiones WHERE no_reff = ?");
            $stm->execute(array($row->no_reff));
            $pet = $stm->fetch(PDO::FETCH_OBJ);
            setcookie('icon','success',time()+3);
            setcookie('text','Registro realizado correctamente',time() +3);
            // una vez obtenido los datos de la peticion se notifica del nuevo estado de la actividad
            // print_r($row->no_reff);
            // die;
            $to = $pet->email;
            $name = $pet->requester;
            $subject = "La actividad que solicito fue realizada";
            $content = " $pet->requester la solicitud con No. de Referecian <b>$pet->no_reff</b> se realizo el dia  $row->date </br></hr>
            <table>
                <tr>
                    <td>Estudiantes</td>
                    <td>Hombre</td>
                    <td>Mujeres</td>
                </tr>
                <tr>
                    <td>$data->students</td>
                    <td>$data->men</td>
                    <td>$data->women</td>
                </tr>
            </table>";
            require_once('email.php');

            $Email = new Email();
            $Email->GenerarEmail($to, $name, $subject, $content);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

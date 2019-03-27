<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
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

    public function RecuperarClave($e){
        //Reseteo variables.
        $error = null;
        //Comprobamos que no este vacio nuestro input.
        if (empty($e)) {
            header('Location:?c=Home&a=Login');
            die;
        } else {
            //Importante, añadir la conexion donde se va utilizar.
            require_once('database.php');
        }
        //Sentencia
        try {
            $stm = $this->pdo->prepare("SELECT * FROM users where email = ? ");
            $stm->execute(array($e));
            if ($stm->rowCount() > 0) {
                $row = $stm->fetchAll(PDO::FETCH_OBJ);

                //Compones nuestro correo electronico

                //Incluimos libreria PHPmailer (deberas descargarlo).

                // Load Composer's autoloader

                require 'vendor/autoload.php';
                require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';

                $mail = new PHPMailer(true);

                try {
                    //Nuevo correo electronico.
                    $mail = new PHPMailer;
                    //Caracteres.
                    $mail->CharSet = 'UTF-8';

                    //De dirección correo electrónico y el nombre
                    $mail->From = "f.a.licona.falm@gmail.com";
                    $mail->FromName = "Frank Licona";

                    //Dirección de envio y nombre.
                    $mail->addAddress($row->email, $row->name . ' ' . $row->last_name);
                    //Dirección a la que responderá destinatario.
                    $mail->addReplyTo("f.a.licona.falm@gmail.com", "Frank Licona");

                    //BCC ->  incluir copia oculta de email enviado.
                    $mail->addBCC("f.a.licona.falm@gmail.com");

                    //Enviar codigo HTML o texto plano.
                    $mail->isHTML(true);

                    //Titulo email.
                    $mail->Subject = "Sistema de recuperacion de contraseña";
                    //Cuerpo email con HTML.
                    $mail->Body = "Tu contraseña actualizada es:" . $row->password; //Podrias personalizar mediante HTML y CSS :)
                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            } else { //0 registros.
                $error = 'El email ingresado no existe en nuestros registros.';
            }
        } catch (Exception $e) {
            echo $error;
            die($e->getMessage());
        }
    }

    
}

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

    public function VerificarUser($email,$password)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM users where email = ? and password = ?");
            $stm->execute(array($email,$password));
            

            if ($stm->rowCount() > 0) {

                $u = $stm->fetchAll(PDO::FETCH_OBJ);

                $_SESSION['auth'] = true;

                $_SESSION['name']           = $u[0]->name;
                $_SESSION['last_name']      = $u[0]->last_name;
                $_SESSION['tell']           = $u[0]->tell;
                $_SESSION['email']          = $u[0]->email;
                $_SESSION['dimension_id']   = $u[0]->dimension_id;
                $_SESSION['rol_id']         = $u[0]->rol_id;
            }else{ 
                $_SESSION['auth'] = false;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function VerificarPeticion($pass_code,$token_id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM fichas where pass_code = ? and id = ? ");
            $stm->execute(array($pass_code,$token_id));
            if ($stm->rowCount() == 0) {
                header("location:?c=home&a=Landing ");die;

                            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function RegistrarUser(home $data)
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
            $sql = "INSERT INTO peticiones (requester,action_id,token_id) 
            VALUES ( ? ,$data->action_id,$data->token_id)";
            // print_r($data);
            // die;
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->requester,                     
                    )
                );
            
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

    public function ListarPeticion()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare( "SELECT 
                    peticiones.id,
                    date_create,
                    requester,
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

            $stm = $this->pdo->prepare("SELECT 
                actividades.id as id,
                date,
                token_id,
                acciones.name   as exe_name,
                acciones.id   as exe_id 
                FROM actividades 
                INNER JOIN acciones on action_id= acciones.id");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function ListarAccion()
    {
        try {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM acciones");
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

    public function ObtenerFicha($id)
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM fichas WHERE id = '$id'");
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

                require_once('vendor/phpmailer/phpmailer/src/PHPMailer.php');
                require_once('vendor/phpmailer/phpmailer/src/Exception.php');
                require_once('vendor/phpmailer/phpmailer/src/SMTP.php');

                $mail = new PHPMailer(true);

                try{
                    //Nuevo correo electronico.
                    $mail = new PHPMailer;
                    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                    $mail->isSMTP();                                            // Set mailer to use SMTP
                    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'f.a.licona.falm@gmail.com';            // SMTP username
                    $mail->Password   = 'gG97062755';                           // SMTP password
                    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
                    $mail->Port       = 587;
                    //Caracteres.
                    $mail->CharSet = 'UTF-8';

                    //De dirección correo electrónico y el nombre
                    $mail->setFrom("f.a.licona.falm@gmail.com",'Frank Licona');

                    //Dirección de envio y nombre.
                    $mail->addAddress($row[0]->email, $row[0]->name . ' ' . $row[0]->last_name);
                    //Dirección a la que responderá destinatario.
                    $mail->addReplyTo("f.a.licona.falm@gmail.com", "Frank Licona");

                    //BCC ->  incluir copia oculta de email enviado.
                    $mail->addBCC("f.a.licona.falm@gmail.com");

                    //Enviar codigo HTML o texto plano.
                    $mail->isHTML(true);

                    //Titulo email.
                    $mail->Subject = "Sistema de recuperacion de contraseña ";

                    
                    //Cuerpo email con HTML.
                    $mail->Body = $row[0]->name." ".$row[0]->last_name."tu contraseña actualizada sera reestablesidaa haciendo click <a href ='http://localhost/OneDrive%20-%20Servicio%20Nacional%20de%20Aprendizaje/proyecto-sena/?c=Home&a=Recuperar&=token'>aqui</a>";
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

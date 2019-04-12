<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Home
{
	private $pdo;



	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function VerificarUser($email, $password)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM users where email = ? and password = ?");
			$stm->execute(array($email, $password));


			if ($stm->rowCount() > 0) { 

				$u = $stm->fetchAll(PDO::FETCH_OBJ);

				$_SESSION['auth'] =  true;
				setcookie('auth', true, time() + 2);

				$_SESSION['name']           = $u[0]->name;
				$_SESSION['last_name']      = $u[0]->last_name;
				$_SESSION['tell']           = $u[0]->tell;
				$_SESSION['email']          = $u[0]->email;
				$_SESSION['dimension_id']   = $u[0]->dimension_id;
			} else {
				$_SESSION['auth'] = false;
				setcookie('icon', 'error', time() + 2);
				setcookie('text', 'Este correo no se encuentra registrado', time() + 2);
			}
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function VerificarPeticion($pass_code, $token_id)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM fichas where pass_code = ? and id = ? ");
			$stm->execute(array($pass_code, $token_id));
			if ($stm->rowCount() == 0) {
				header("location:?c=home&a=Landing ");
				die;
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
			} else {
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

	public function AceptarPeticion(home $data)
	{
		try {

			$sql = "INSERT INTO actividades (date,token_id,action_id) 
					 VALUES ($data->date,$data->token_id,$data->action_id)";
			// echo $sql;
			// die;            
			$this->pdo->prepare($sql)
				->execute(
					array()
				);
			// die;
			// print_r($data);
			$stm = $this->pdo
				->prepare("DELETE FROM peticiones WHERE id = ?");
			$stm->execute(array($data->ide));
			setcookie("icon", 'success', time() + 2);
			setcookie("text", 'Solicitud aceptada correctamente', time() + 2);
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

			$stm = $this->pdo->prepare("SELECT 
						  peticiones.id as ide,
						  date_create,
						  requester,
						  fichas.id               as tok_id,
						  fichas.name             as tok_name,
						  acciones.name           as acc_name,
						  acciones.id             as acc_id
					 FROM peticiones 
						  INNER JOIN fichas       ON token_id     = fichas.id  
						  INNER JOIN acciones     ON action_id    = acciones.id 
						  limit 5");
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
					 INNER JOIN acciones on action_id= acciones.id
					 WHERE checkit = 'NO'");
			$stm->execute();

			$sql = "UPDATE actividades SET  
                        checkit     = 'VENCIDA'						
                    WHERE date <= now() and checkit = 'NO'";
            $this->pdo->prepare($sql)->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function ListarAccion($opc)
	{
		try {
			if ($opc != "") {
				$opc = "WHERE dimension_id = $opc";
			} else {
				$opc = "";
			}
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM acciones $opc");
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
	public function VerificarCorreo($data)
	{
		//Reseteo variables.
		$error = null;
		//Sentencia
		try {

			// Load Composer's autoloader

			require_once('vendor/phpmailer/phpmailer/src/PHPMailer.php');
			require_once('vendor/phpmailer/phpmailer/src/Exception.php');
			require_once('vendor/phpmailer/phpmailer/src/SMTP.php');

			$mail = new PHPMailer(true);
			// print_r($data);
			// die;
			try {
				//Nuevo correo electronico.
				$mail = new PHPMailer;
				$mail->SMTPDebug = 0;                                       // Enable verbose debug output
				$mail->isSMTP();                                            // Set mailer to use SMTP
				$mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
				$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
				$mail->Username   = 'balaprendiz@gmail.com';            // SMTP username
				$mail->Password   = 'bienestar-_-3127';                           // SMTP password
				$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
				$mail->Port       = 587;
				//Caracteres.
				$mail->CharSet = 'UTF-8';

				//De dirección correo electrónico y el nombre
				$mail->setFrom("balaprendiz@gmail.com", 'Bienestar Al Aprendiz');

				//Dirección de envio y nombre.
				$mail->addAddress($data->email, $data->name . ' ' . $data->last_name);
				//Dirección a la que responderá destinatario.
				$mail->addReplyTo("balaprendiz@gmail.com", "Frank Licona");

				//BCC ->  incluir copia oculta de email enviado.
				$mail->addBCC("balaprendiz@gmail.com");

				//Enviar codigo HTML o texto plano.
				$mail->isHTML(true);

				//Titulo email.
				$mail->Subject = "Correo de verificacion de Bienestar al Aprendiz";

				$alpha = "123qwertyuiopaQWERTYUIOPA456sdfghjklzxcvbnmSDFGHJKLZXCVBNM789";
				$data->token = "";
				$longitud = 5;
				for ($i = 0; $i < $longitud; $i++) {
					$data->token .= $alpha[rand(0, strlen($alpha) - 1)];
				}
				setcookie("token", $data->token, time() + 1800);
				//Cuerpo email con HTML.
				$mail->Body = $data->name . " " . $data->last_name . ", este es un correo de verificacion de bienestar al aprendiz,
											para continuar con su proceso de registro haga clink en el siguiente enlace 
											<a href ='http://localhost/OneDrive%20-%20Servicio%20Nacional%20de%20Aprendizaje/proyecto-sena/?c=Home&a=Ingreso&t="
					. md5($data->token) . "&email=" . $data->email . "&name=" . $data->name . "&last_name=" . $data->last_name . "'>
											Continuar
											</a>";
				$mail->send();
			} catch (Exception $error) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		} catch (Exception $e) {
			echo $error;
			die($e->getMessage());
		}
	}



	public function RecuperarClave($e)
	{
		//Reseteo variables.
		$error = null;
		//Comprobamos que no este vacio nuestro input.
		if (empty($e)) {
			header('Location:?c=Home&a=Login');
			die;
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

				try {
					//Nuevo correo electronico.
					$mail = new PHPMailer;
					$mail->SMTPDebug = 0;                                       // Enable verbose debug output
					$mail->isSMTP();                                            // Set mailer to use SMTP
					$mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
					$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
					$mail->Username   = 'balaprendiz@gmail.com';            // SMTP username
					$mail->Password   = 'bienestar-_-3127';                           // SMTP password
					$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
					$mail->Port       = 587;
					//Caracteres.
					$mail->CharSet = 'UTF-8';

					//De dirección correo electrónico y el nombre
					$mail->setFrom("balaprendiz@gmail.com", 'Bienestar Al Aprendiz');

					//Dirección de envio y nombre.
					$mail->addAddress($row[0]->email, $row[0]->name . ' ' . $row[0]->last_name);
					//Dirección a la que responderá destinatario.
					$mail->addReplyTo("balaprendiz@gmail.com", "Frank Licona");

					//BCC ->  incluir copia oculta de email enviado.
					$mail->addBCC("balaprendiz@gmail.com");

					//Enviar codigo HTML o texto plano.
					$mail->isHTML(true);

					//Titulo email.
					$mail->Subject = "Sistema de recuperacion de contraseña ";

					$alpha = "123qwertyuiopaQWERTYUIOPA456sdfghjklzxcvbnmSDFGHJKLZXCVBNM789";
					$token = "";
					$longitud = 5;
					for ($i = 0; $i < $longitud; $i++) {
						$data->token .= $alpha[rand(0, strlen($alpha) - 1)];
					}
					setcookie("token", $token, time() + 1800);
					//Cuerpo email con HTML.
					$mail->Body = $row[0]->name . " " . $row[0]->last_name . ", tu contraseña actualizada sera reestablesidaa haciendo click <a href ='http://localhost/OneDrive%20-%20Servicio%20Nacional%20de%20Aprendizaje/proyecto-sena/?c=Home&a=Recuperar&r=" . $token . "&id=" . $row[0]->id . "'>aqui</a>";
					$mail->send();
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

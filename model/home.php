<?php

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
	public function RegistrarUser(home $data)
	{
		try {
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
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function RegistrarPeticion(home $data)
	{
		try {
			$alpha = "123QWERTYUIOPA456SDFGHJKLZXCVBNM789";
			$noreff = "";
			$longitud = 3;
			for ($i = 0; $i < $longitud; $i++) {
				$noreff .= $alpha[rand(0, strlen($alpha) - 1)];
			}
			$noreff =date('Y-m-d').$noreff;
			$sql = "INSERT INTO peticiones (requester,email,no_reff,action_id,token_id) 
				VALUES ( ? ,?,?,$data->action_id,$data->token_id)";
				
			setcookie('icon', 'success', time() + 5);
			setcookie('text', 'Su Solicitud ha sido creada exitosamente', time() + 5);
			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->requester,
						$data->email,
						$noreff
					)
				);
			$to = $data->email;
			$name = $data->requester ;
			$subject = "Su solicitud ha sido enviada exitosamente";
			$content = "$data->requester hemos generado un No. de Referecian con el que puede tener seguimiento de la actividad solicitada
							<button>$noreff</button> ";
			require_once('email.php');

			$Email = new Email();
			$Email->GenerarEmail($to, $name, $subject, $content);
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
				->prepare("UPDATE peticiones set checkit = 'SI' WHERE id = ?");
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
			$stm = $this->pdo->prepare("SELECT * FROM dimensiones limit 6");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function ListarPeticion($opc)
	{
		try {
			$result = array();
			if ($opc) {
				$opc = " WHERE dimensiones.id = ".$_SESSION['dimension_id'];
			}else {
				$opc ="";
			}
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
						  INNER JOIN dimensiones  ON acciones.dimension_id = dimensiones.id
						  $opc 
						  AND checkit = 'NO'
						  limit 2");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
			die;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}	
	public function ListarActividad($opc)
	{
		try {
			$result = array();
			$opc = ($opc != 9) ? "AND acciones.dimension_id = $opc" : "" ;
			$stm = $this->pdo->prepare("SELECT 
					 actividades.id as id,
					 date,
					 token_id,
					 acciones.name   as exe_name,
					 acciones.id   as exe_id 
					 FROM actividades 
					 INNER JOIN acciones on action_id= acciones.id
					 WHERE checkit = 'NO' $opc");
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
			if ($opc != 9) {
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

			$stm = $this->pdo->prepare("SELECT 
					fichas.id as id,
					fichas.name as name,
					programas.name as dimension 
					FROM fichas
					INNER JOIN programas on program_id = programas.id");
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
	public function VerificarUser($email, $password)
	{
		try {
			$stm = $this->pdo->prepare("SELECT 
				users.name 				as name,
				users.last_name 		as last_name,
				users.tell 				as tell,
				users.email 			as email,
				users.dimension_id	as dimension_id,
				dimensiones.name 		as dimension 
			FROM users
				INNER JOIN dimensiones ON dimension_id = dimensiones.id 
				where email = ? and password = ?");
			$stm->execute(array($email, $password));


			if ($stm->rowCount() > 0) {

				$u = $stm->fetchAll(PDO::FETCH_OBJ);

				setcookie('auth', true, time() + 2);
				$_SESSION['auth'] =  true;
				$_SESSION['name']          = $u[0]->name;
				$_SESSION['last_name']     = $u[0]->last_name;
				$_SESSION['tell']          = $u[0]->tell;
				$_SESSION['email']         = $u[0]->email;
				$_SESSION['dimension_id']  = $u[0]->dimension_id;
				$_SESSION['dimension']   	= $u[0]->dimension;
			} else {
				$_SESSION['auth'] = false;
				setcookie('icon', 'error', time() + 2);
				setcookie('text', 'Su correo o contraseña son incorrectos', time() + 2);
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
			}else{
				setcookie('validation',true,time()+30);
			}
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function VerificarCorreo($data)
	{
		// Verificamos la existencia del correo
		$stm = $this->pdo->prepare("SELECT * FROM users where email = ? ");
		$stm->execute(array($data->email));
		if ($stm->rowCount() > 0) {
			setcookie('icon','success',time()+3);
			setcookie('text','Este correo ya se encuentra registrado',time()+3);
			header('location:?c=home&a=Ingreso');
			die;
		}
		// Se genera un token de autenticacion
		$alpha = "123qwertyuiopaQWERTYUIOPA456sdfghjklzxcvbnmSDFGHJKLZXCVBNM789";
		$data->token = "";
		$longitud = 16;
		for ($i = 0; $i < $longitud; $i++) {
			$data->token .= $alpha[rand(0, strlen($alpha) - 1)];
		}
		// Se define un variable cookie con el valor del token que expira en 30 minutos
		setcookie("token", $data->token, time() + 1800);
		// Se definen la variables para la generacion de emails
		$to = $data->email;
		$name = $data->name . ' ' . $data->last_name;
		$subject = "Correo de verificacion de Bienestar al Aprendiz";
		$content = $data->name . " " . $data->last_name . ", este es un correo de verificacion de bienestar al aprendiz,
											para continuar con su proceso de registro haga clink en el siguiente enlace 
											<a href ='http://localhost/OneDrive%20-%20Servicio%20Nacional%20de%20Aprendizaje/proyecto-sena/?c=Home&a=Ingreso&t="
			. md5($data->token) . "&email=" . $data->email . "&name=" . $data->name . "&last_name=" . $data->last_name . "'>
											Continuar
											</a>";
		require_once('email.php');
		
		$Email =new Email();
		$Email->GenerarEmail($to,$name,$subject,$content);
		
	}
	public function RecuperarClave($e)
	{
		try {
			// Verificamos que el email existe en nuestros registros
			$stm = $this->pdo->prepare("SELECT * FROM users where email = ? ");
			$stm->execute(array($e));
			if ($stm->rowCount() > 0) {
				$row = $stm->fetchAll(PDO::FETCH_OBJ);
				// Generamos un toke de autenticacion
				$alpha = "123qwertyuiopaQWERTYUIOPA456sdfghjklzxcvbnmSDFGHJKLZXCVBNM789";
				$token = "";
				$longitud = 5;
				for ($i = 0; $i < $longitud; $i++) {
					$token .= $alpha[rand(0, strlen($alpha) - 1)];
				}
				setcookie("token", $token, time() + 600);
				// Se definen variables para la generacion de emails
				$to = $row[0]->email;
				$name = $row[0]->name . ' ' . $row[0]->last_name;
				$subject = "Sistema de recuperacion de contraseña ";
				$content = $row[0]->name . " " . $row[0]->last_name . ", tu contraseña actualizada sera reestablesidaa
								haciendo click <a href ='http://localhost/OneDrive%20-%20Servicio%20Nacional%20de%20Aprendizaje/proyecto-sena/?c=Home&a=Recuperar&r=" . md5($token) . "
								&id=" . $row[0]->id . "'>aqui</a>";
				require_once('email.php');

				$Email = new Email();
				$Email->GenerarEmail($to, $name, $subject, $content);
			}
		} catch (Exception $e) {
			echo $error;
			die($e->getMessage());
		}
	}
}

<?php
require_once('model/home.php');
class HomeController
{
	public function __CONSTRUCT()
	{
		$this->model = new Home();
	}
	
	private $model;

	public function Index()
	{
		require_once 'view/header.php';
		require_once 'view/home/home.php';
		require_once 'view/footer.php';
	}
	public function Calendario()
	{
		require_once 'view/header.php';
		require_once 'view/home/calendario.php';
		require_once 'view/footer.php';
	}
	public function Landing()
	{
		require_once 'view/headerl.php';
		require_once 'view/home/landing.php';
		require_once 'view/footer.php';
	}
	public function Login()
	{
		require_once 'view/headerl.php';
		require_once 'view/home/login.php';
		require_once 'view/footer.php';
	}
	public function Salir()
	{
		unset($_SESSION);
		session_destroy();
		require_once 'view/headerl.php';
		require_once 'view/home/landing.php';
		require_once 'view/footer.php';
	}
	public function Peticion(){   
		require_once 'view/headerl.php';
		require_once 'view/home/peticion.php';
		require_once 'view/footer.php';     
	}
	public function Nada()
	{
		require_once 'view/headerl.php';
		require_once 'view/home/enviado.php';
		require_once 'view/footer.php';
	}
	
	public function Ingreso()
	{
		if(isset($_REQUEST['t'])){
			if(isset($_COOKIE['token'])){
				if ($_REQUEST['t']==md5($_COOKIE['token'])) {
					require_once 'view/headerl.php';
					require_once 'view/home/registro-verificado.php';
					require_once 'view/footer.php';
				} else {
					setcookie('icon','error',time()+10);
					setcookie('text', 'Este enlace a expirado, porfavor intentelo nuevamente', time() + 10);
					require_once 'view/headerl.php';
					require_once 'view/home/registro.php';
					require_once 'view/footer.php';
				}            
			}else {
				
				setcookie('icon','error',time()+10);
				setcookie('text', 'Este enlace a expirado, porfavor intentelo nuevamente', time() + 10);
				require_once 'view/headerl.php';
				require_once 'view/home/registro.php';
				require_once 'view/footer.php';
			}            
		}else {
			require_once 'view/headerl.php';
			require_once 'view/home/registro.php';
			require_once 'view/footer.php';
		}
	}
	public function Recuperar()
	{
		if(isset($_REQUEST['email'])){

			$email=$_REQUEST['email'];
			$this->model->Recuperarclave($email);

			header('Location:?c=Home&a=Nada');

		} else{
			if(isset($_REQUEST['r'])){
				if ($_REQUEST['r'] == md5($_COOKIE['token'])) {
					
				}
			}
			require_once 'view/headerl.php';
			require_once 'view/home/recuperar.php';
			require_once 'view/footer.php';
		}
	}

	public function ValidarCorreo()
	{
		$home = new Home();
		$home->email    = $_REQUEST['email'];
		$home->name      = $_REQUEST['name'];
		$home->last_name = $_REQUEST['last_name'];
		// print_r($home);
		// die;
		$this->model->VerificarCorreo($home);
		 header('Location:?c=Home&a=Nada');
	}

	public function ValidacionUser()
	{
		$home = new Home();

		if (isset($_REQUEST['email'])&& isset($_REQUEST['password'])) {
			$home = $this->model->VerificarUser($_REQUEST['email'],$_REQUEST['password']);
		}
		
		
		header('location:?c=home&a=Index');
	}
	public function ValidacionPeticion()
	{
		$home = new Home();

		if (isset($_REQUEST['pass_code'])&& isset($_REQUEST['token_id'])) {
			$home = $this->model->VerificarPeticion($_REQUEST['pass_code'],$_REQUEST['token_id']);
			$requester = $_REQUEST['requester'];
			$token_id = $_REQUEST['token_id'];
		}

		header("location:?c=home&a=Peticion&requester=$requester&ficha=$token_id");
	}
	public function RegistroUser()
	{
		$home = new Home();

		$home->id          = $_REQUEST['id'];
		$home->name        = $_REQUEST['name'];
		$home->last_name   = $_REQUEST['last_name'];
		$home->tell        = $_REQUEST['tell'];
		$home->email       = $_REQUEST['email'];
		$home->password    = $_REQUEST['password'];
		$home->dimension_id= $_REQUEST['dimension_id'];
		$home->rol_id      = $_REQUEST['rol_id'];
		$home->requester   = $_REQUEST['requester'];

		$this->model->RegistrarUser($home);

		header('Location: index.php?c=home');
	}
	public function Guardar()
	{
		$home = new Home();

		$home->action_id   = $_REQUEST['action_id'];
		$home->requester   = $_REQUEST['requester'];
		$home->token_id    = $_REQUEST['token_id'];

		$this->model->RegistrarPeticion($home);

		header("Location: index.php?c=home");
	}
	public function AprovarActividad(){

		$home = new Home();
		
		$home->ide   = $_REQUEST['ide'];
		$home->token_id    = $_REQUEST['token_id'];
		$home->action_id   = $_REQUEST['action_id'];
		$home->date        = $_REQUEST['date'];  
		// print_r($home);
		// die;
		//  print_r($_REQUEST);die;
		$this->model->AceptarPeticion($home);
		header("Location: index.php?c=pdf");
	}
}


?>
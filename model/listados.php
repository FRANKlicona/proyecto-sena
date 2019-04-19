<?php 
class Lista
{
	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function ListarPeticion($opc)
	{
		try {
			$result = array();
			if ($opc == 'pending') {
				$opc = "WHERE checkit = 'NO'";
			}
			if ($opc == 'denied') {
				$opc = "WHERE checkit = 'RECHAZADA'";
			}
			if ($opc == 'accepted') {
				$opc = "WHERE checkit = 'SI'";
			}
			$token = "AND fichas.id = ". $_REQUEST['id'];
			$dimension = ($_SESSION['dimension_id']!= '7') ? " AND acciones.dimension_id = ".$_SESSION['dimension_id']  : "" ;
			$stm = $this->pdo->prepare( "SELECT 
						peticiones.id as ide,
						date_create,
						requester,
								checkit,
						fichas.id               as tok_id,
						fichas.name             as tok_name,
						acciones.name           as acc_name,
						acciones.id             as acc_id,
                  acciones.dimension_id   as acc_did
					 FROM peticiones 
						  INNER JOIN fichas       ON token_id     = fichas.id  
						  INNER JOIN acciones     ON action_id    = acciones.id						  
						  $opc
						  $dimension
						  $token ");
			// print_r($stm);
			// die;
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
			if ($opc == 'pending') {
				$opc = "WHERE checkit = 'NO'";
			}
			if ($opc == 'denied') {
				$opc = "WHERE checkit = 'VENCIDA'";
			}
			if ($opc == 'accepted') {
				$opc = "WHERE checkit = 'SI'";
			}
			$token = "AND fichas.id = " . $_REQUEST['id'];
			$dimension = ($_SESSION['dimension_id'] != '7') ? " AND acciones.dimension_id = " . $_SESSION['dimension_id']  : "";
			$stm = $this->pdo->prepare("SELECT 
						peticiones.id as ide,
						date_create,
						requester,
								checkit,
						fichas.id               as tok_id,
						fichas.name             as tok_name,
						acciones.name           as acc_name,
						acciones.id             as acc_id,
                  acciones.dimension_id   as acc_did
					 FROM peticiones 
						  INNER JOIN fichas       ON token_id     = fichas.id  
						  INNER JOIN acciones     ON action_id    = acciones.id						  
						  $opc
						  $dimension
						  $token ");
			// print_r($stm);
			// die;
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
			die;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
?>
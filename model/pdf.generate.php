<?php 
require 'vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
class Pdf
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
    public function GenerarPdf($doc,$name)
    {
    $html = new Html2Pdf('p','A4','es',  'true ','UTF-8 '); 
    ob_start();
    require 'view/pdfTemplates/informe'.$doc.'.php';
    $view = ob_get_clean();
    $html->writeHTML($view);
    $html->output('Informe'.$name. date('Y,m,d',time()).'.pdf');
    }
    public function RegistrarPeticion(home $data)
    {
        try {
            $sql = "INSERT INTO peticiones (requester,action_id,token_id) 
				VALUES ( ? ,$data->action_id,$data->token_id)";
            // print_r($data);
            // die;
            setcookie('icon', 'success', time() + 5);
            setcookie('text', 'Su Solicitud ha sido creada exitosamente', time() + 5);
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
}
?>
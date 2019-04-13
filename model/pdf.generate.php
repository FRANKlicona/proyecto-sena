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
    
}
?>
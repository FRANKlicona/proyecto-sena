<?php
require_once 'vendor/autoload.php';
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
    public function GenerarPdf()
    {
        ob_start();
        require_once 'view/pdfTemplates/informeRemision.php';
        $html = ob_get_clean();
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'c',
            'margin_left' => 32,
            'margin_right' => 25,
            'margin_top' => 27,
            'margin_bottom' => 25,
            'margin_header' => 16,
            'margin_footer' => 13
        ]);
        $mpdf->SetDisplayMode('fullpage');

        $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list

        // Load a stylesheet
        $stylesheet = file_get_contents('assets/css/mpdfstyletables.css');

        $mpdf->WriteHTML($stylesheet, 1); // The parameter 1 tells that this is css/style only and no body/html/text
        $mpdf->WriteHTML($html, 2);
        $name = 'Remision'.date('Y-m-d');
        $mpdf->Output($name,'I');
        exit;

    }
    
    
}
?>
<?php
require_once 'model/pdf.generate.php';

class PdfController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Pdf();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/pdf/pdf.lista.php';
        require_once 'view/footer.php';
    }

    public function GenerarPdf()
    {
        $this->model->GenerarPdf($_REQUEST['doc'], $_REQUEST['name']);
    }

    
}

<?php
require_once('model/home.php');
class homeController
{
    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/home.php';
        require_once 'view/footer.php';
    }

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new home();
    }

}


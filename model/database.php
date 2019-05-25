<?php
class Database
{
    public static function StartUp()
    {
        if ( $_SERVER['HTTP_HOST']== 'localhost'){
            $pdo = new PDO('mysql:host=localhost;dbname=bienestar;charset=utf8', 'root', '');
        }else{
            $pdo = new PDO( 'mysql:host=localhost;dbname=id6430473_bienestar;charset=utf8','id6430473_bienestar','id6430473_bienestar');
        }
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

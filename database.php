<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'colegiofalm';
$mysqli = new mysqli($servername,$username,$password,$database) ;
if($mysqli->connect_error){
    echo $mysqli->connect_error;
    }
    echo 'conected to server   ';
?>

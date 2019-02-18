<?php 

require_once "database.php";

$name      = (!isset($_REQUEST['name']) ? '' : $_REQUEST['name']);
$username  = (!isset($_REQUEST['username']) ? '' : $_REQUEST['username']);
$email     = (!isset($_REQUEST['email']) ? '' : $_REQUEST['email']);
$date      = (!isset($_REQUEST['date']) ? '' : $_REQUEST['date']);
$address   = (!isset($_REQUEST['address']) ? '' : $_REQUEST['address']);
$password  = (!isset($_REQUEST['password']) ? '' : $_REQUEST['password']);


$query = "INSERT INTO users VALUES (null,'$name','$username','$email','$date','$address','$password')";
        
try
{
$mysqli->query($query);
echo $query;
}
catch(Exception $e){
    echo $e->errorMessage();
    die;
}
// header('location:index.php?v=user.');
?>
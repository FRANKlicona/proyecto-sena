<?php 

$opc   = (!isset($_REQUEST['p']) ? '' : $_REQUEST['p']);
$value = (!isset($_REQUEST['d']) ? '' : $_REQUEST['d']);

require_once "database.php";

switch ($opc) {
    case 'status':
        $query = "INSERT INTO estados VALUES (null,'$value')";
        
        break;
    case 'grade':
        $query = "INSERT INTO grados VALUES (null,'$value')";

        break;
    case 'journey':
        $query = "INSERT INTO jornadas VALUES (null,'$value')";

        break;
    case 'place':
        $query = "INSERT INTO sedes VALUES (null,'$value')";

        break;
    default:
        header('location:index.php?v=addinfo.');
        break;
}
try
{
$mysqli->query($query);

}
catch(Exception $e){
    echo $e->errorMessage();
    die;
}
header('location:index.php?v=addinfo.');
?>
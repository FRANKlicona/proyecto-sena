<?php 
$view = (!isset($_REQUEST['v']) ? 'home.': $_REQUEST['v'] );

require_once("view/header.html");
if ($view != null and $view != '' ){
 require_once($view."php");
}else{
    
require_once "home.html";

}
require_once("view/footer.html");

?>
<?php include 'config/config-genos.php'; 
$action = $_GET["action"];

switch($action) {
    case 'recherche' : 
        $rech = $_POST["rech"];
        Client::Datagrid($rech);
    break;
    
}

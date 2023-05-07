<?php

require_once('usercontroller.php');

$succeful =  new modeloController();


if (isset($_GET["id"])) { 
    $id = $_GET['id'];       
$succeful->deleteMedicamento($id); 
}


?>
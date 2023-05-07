<?php

require_once('usercontroller.php');

$succeful =  new modeloController();



if (isset($_POST)) { 

     $datos = array($_POST);
$succeful->editarMedicamento($datos); 
}


?>
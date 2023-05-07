<?php

require_once('usercontroller.php');

$succeful =  new modeloController();

    $addMedicamento = array(
         $nombre= $_POST["nombre"],
         $precio = $_POST["precio"],
         $cantidad =  $_POST["precio"],
         $file = $_FILES["imagen"]
    );

       $succeful->recibirMeducamentos($addMedicamento); 
       


?>
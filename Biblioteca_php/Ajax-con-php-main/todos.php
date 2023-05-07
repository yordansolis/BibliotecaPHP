<?php
include_once 'db.php';

class Todos extends DB{

    function nuevoTodo($texto){
        if (!empty($texto)) {
            # code...
        $query = $this->connect()->prepare('INSERT INTO todotabla (texto) VALUES (:texto)');
        $query->execute(['texto' => $texto]);    
   	 }      

    }

    // Para que se ordene por fecha
    function mostrarTodos(){
        return $this->connect()->query('SELECT * FROM todotabla ORDER BY TIMESTAMP DESC');
    }
}

?>
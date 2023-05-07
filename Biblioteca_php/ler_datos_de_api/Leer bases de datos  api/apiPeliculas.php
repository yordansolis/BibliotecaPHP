<?php

include_once 'peliculas.php';

class ApiPeliculas{ 
    function getAll(){
        $peli = new Peliculas();

        $peliculaS = array();
        $peliculaS["items"] = array();

       

        $res = $peli->obtenerPeliculas();
        //validar que exisata almenos 1 pelicula
            if ($res->rowCount()) {               
                while($row = $res->fetch(PDO::FETCH_ASSOC)){

                    $item=array(
                        "id" => $row['id'],
                        "nombre" => $row['nombre'],
                        "imagen" => $row['imagen'],
                    );
                    //
                    array_push($peliculaS["items"], $item);
                }
                //Imprime el arreglo de peliculas
                echo json_encode($peliculaS);
            }
            else{
//SI NO TENEMOS NOS MUESTRA ESTE MENSAJE JSON
                echo json_encode(array('mensaje' => 'No hay elementos'));
            }

    }
}

?>
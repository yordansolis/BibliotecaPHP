<?php
include_once 'dbPdo.php';


class Peliculas extends DB
{
   function obtenerPeliculas()
    {
        $query = $this->connect()->query('SELECT * FROM pelicula');
        return $query;
    }
}

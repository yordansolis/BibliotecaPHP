<?php
include_once 'dbPdo.php';


class Peliculas extends DB
{

    private $db;
    private $paginaActual;
    private $totalPaginas;
    private $nResultados;
    private $resultadosPorPagina;
    private $indice;

    public function __construct($nPorPagina)
    {
        // si no se hace esto esta funcion se ejecuta antes de la clase BD    
        parent::__construct();

        $this->resultadosPorPagina = $nPorPagina;
        $this->indice = 0;
        $this->paginaActual = 1;

        $this->calcularPaginas();
    }


    //muestra 3 peliculas por pagina
    function mostrarPeliculas()
    {
        $query = $this->connect()->prepare('SELECT * FROM pelicula LIMIT :pos, :n');
        $query->execute(['pos' => $this->indice, 'n' => $this->resultadosPorPagina]);

        foreach ($query as $pelicula) {
            include 'vista-peliculas.php';
        }
    }

    //canculamos el total de las paginas 
    function calcularPaginas()
    {
        $queryTotalResultados = $this->connect()->query('SELECT COUNT(*) AS total FROM pelicula');
        $this->nResultados = $queryTotalResultados->fetch(PDO::FETCH_OBJ)->total;

        $this->totalPaginas = $this->nResultados / $this->resultadosPorPagina;

        if (isset($_GET['pagina'])) {
            $this->paginaActual = $_GET['pagina'];
            $this->indice = ($this->paginaActual - 1) * $this->resultadosPorPagina;
        }
    }



    function mostrarPaginas()
    {
        $actual = '';
        echo "<ul>";

        for ($i = 0; $i < $this->totalPaginas; $i++) {
            if (($i + 1) == $this->paginaActual) {
                $actual = ' class="actual" ';
            } else {
                $actual = '';
            }
            echo '<li><a ' . $actual . 'href="?pagina=' . ($i + 1) . '">' . ($i + 1) . '</a></li>';
        }
        echo "</ul>";
    }

    function mostrarTotalResultados()
    {
        return $this->nResultados;
    }
}

<?php
include 'survey.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>

    <form action="#" method="POST">


        <?php

        $survey = new Survey();
        $showResults = false;

        if (isset($_POST['lenguajes'])) {
            $showResults = true;
            $survey->setOpcionseled($_POST['lenguajes']);

            $survey->vote();
        } else {
            $lenguaje = [];
        }
        ?>
        <h2>¿Cuál es tu lenguaje de programación favorito?</h2>
        <?php

        if ($showResults) {
            $lenguajes = $survey->showResults();

            //trae la suma de todos los votos
            echo '<h2>' . $survey->getTotalVotes() . ' votos totales</h2>';

            foreach ($lenguajes as $lenguaje) {
                $porcentaje = $survey->getPercentageVotes($lenguaje['votos']);
                include 'vistas/vista-resultado.php';
            }
        } else {
            include 'vistas/vista-votacion.php';
        }
        ?>



    </form>
</body>

</html>
</body>

</html>
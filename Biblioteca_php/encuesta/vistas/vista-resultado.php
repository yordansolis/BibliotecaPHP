<div class="opcion">
    <?php
    //esta sesion se muestra la barra azul 
    $widthBar = $porcentaje * 5;
    $estilo = "barra";

    if ($survey->getOptionSelecionada() == $lenguaje['opcion']) {
        $estilo = "seleccionado";
    }

    echo $lenguaje['opcion'];
    ?>
    <div class="<?php echo $estilo; ?>" style="width: <?php echo $widthBar . 'px;' ?>"><?php echo $porcentaje . '%';  ?></div>

</div>
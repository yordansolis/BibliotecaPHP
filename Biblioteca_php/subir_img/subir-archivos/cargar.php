<?php
var_dump ($_FILES["file"]);

$directorio = "archivos/";

$archivo = $directorio . basename($_FILES["file"]["name"]);
//echo $archivos;
//tipo de archvo
$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

//validar que sea imagen 
$chearImagen = getimagesize($_FILES["file"]["tmp_name"]);

// var_dump($size);

if ($chearImagen != false) {
    $size =  $_FILES["file"]["size"];
    //VALIDAR TAMAÑO DEL ARCHIVO    
    if ($size > 218289) {
        echo "el archivo tiene que ser menor a 118.289";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)) {
            echo "el archivo se subio correctamente";
        } else {
            echo "Ubo un error con la ruta de la carpeta donde se guarda el arhivo !";
        }
    }
} else {
    echo "el documento no es una imagen";
}

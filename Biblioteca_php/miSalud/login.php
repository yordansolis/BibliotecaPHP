<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="views/css/login_style.css">
</head>

<?php
require 'assets/db/config.php';

if (isset($_POST['submit'])) {


 
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $campo = array();

    if ($usuario == "") {
        array_push($campo, "El campo usuario no puede estar vacio");
    }

    if ($password == "" ) {
        array_push($campo, "El passwor no puede estar vacio ");
    }

    try {

        $query    = $connect->prepare(
            'SELECT usuario, nombre, rol FROM administrador
            where usuario=:usuario
            UNION
            SELECT usuario , nombre, rol FROM trabajadores 
            where usuario=:usuario'
        );

        //si el usuario existe
        $query->execute(array(
            ':usuario' => $usuario
        ));
        // me trigo la collecion de arreglos


        $rol = $query->fetch(PDO::FETCH_ASSOC);
        if ($rol == null) {           
            $messeje = "Usuario no encontrado en el sistema";
    
        }


        if($rol !=  null) { 


        $opcion = $rol["rol"];  

        if ($opcion ==  'trabajador') {

            $query = $connect->prepare("SELECT  *  FROM trabajadores
                    WHERE  usuario=:usuario");

            //traemos los datos del user
            $query->execute(array(
                ':usuario' => $usuario
            ));
            /** obtenemos un arreglo asociativo */
            $result = $query->fetch(PDO::FETCH_ASSOC);
            /** usamos la constante confir para comprobar que sea true */
            $confir =  $result["password"];
            /** obtenemos el psss */
            if (password_verify($password, $confir)) {
                $_SESSION['id_trabajadores'] = $result['id_trabajadores'];
                $_SESSION['nombre'] = $result['nombre'];
                $_SESSION['rol'] = $result['rol'];
                $_SESSION['usuario'] = $result['usuario'];
                header('location: views/users/user.php');
            } else {
                //lo enviamosa  que verifica el password
                $messeje = "Verifique su contraeña";
            }
        }


        if ($opcion == 'administrador') {

            $query = $connect->prepare("SELECT * FROM administrador
                    WHERE  usuario =:usuario");

      
        $query->execute(array(
            ':usuario' => $usuario
        ));

    
        $result = $query->fetch(PDO::FETCH_ASSOC);
            /** obtenemos el psss */
        $psw = $result["password"];

        if ($password  == $psw) {
    
                $_SESSION['id_admin'] = $result['id_admin'];
                $_SESSION['nombre'] = $result['nombre'];
                $_SESSION['rol'] = $result['rol'];
                $_SESSION['usuario'] = $result['usuario'];
               header('location:  views/admin/admin.php');

            } else {
                //lo enviamosa  que verifica el password              
                $messeje = "Verifique su contraeña";

               
            }
         

        } 

    }
        //mutrar errores

 

    } catch (\PDOException $th) {
        $errMsg = $th->getMessage();
    }

}


?>



<body>
<?php
    if(isset($messeje)){
        echo '<div style="color:#FF0000;text-align:center;font-size:20px;">'.$messeje.'</div>'; 
         }
?>

    <div class="responsive">
        <div class="container">

            <h1 id="title"> Login</h1>
            <p id="description"> Inice su session.</p>

            <main class="formulario contenedor">

                <form id="login" method="post" action=""  autocomplete="off">
                    <fieldset>

                        <label id="usuario"> Usuario <input type="text" name="usuario" id="usuario" placeholder="Introduce tu usuario" required></label>
                    </fieldset>
                    <fieldset>
                        <label id="password-label"> Contraseña <input id="password" type="password" name="password" placeholder="Introduce tu contraseña" required></label>

                    </fieldset>
                    <br>
                    <button class="btn" type="submit" name="submit" value="Submit" /> iniciar</button>
                </form>

            </main>
        </div>
        <script src="assets/jquery-3.6.1.min.js"></script>
        <script src="assets/sweetalert.min.js"></script>




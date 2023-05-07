<?php
session_start();
if (isset($_SESSION['nombre'])) {

    include "../layout/header_admin.php";
?>
            <?php

         $db = new PDO('mysql:host=localhost; dbname=ipschichijay', "root",  "");

            if (isset($_GET["id"])) {

                $id = $_GET['id'];
                      
                $query = "SELECT * FROM medicamentos WHERE id = :id";
                $stmt = $db->prepare($query);

                $stmt->execute([':id' => $id]);
                 $medicamento  = $stmt->fetch();
 

            ?>

            <div class="container">         
                <div class="modal-body"> <!--onsubmit="return addMedicamento()"-->
                <form action="../../controllers/_editar.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="col">
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <h5 class="modal-title">Update medicamentos</h5>
                                <img  src="../../assets/archivos/<?php echo $medicamento['imagen']?>" width="90" height="100" alt="">
                                <br>
                                <input type="hidden" name="id" value="<?php echo $medicamento['id']?>"">
                                <br>
                                <label for="nombre">Nombre del medicamento: </label><br>
                                <input type="text" class="form-control" id="precio" name="name"  value="<?= $medicamento['nombre'] ?>"   required>
                                <br>
                                <div class="col">
                                    <label for="precio">Precio:</label>
                                    <input type="text" class="form-control" id="precio" name="precio" value="<?= $medicamento['precio'] ?>"  pattern="^[^.]+$"  required>
                                </div>
                                
                                <br>                          
                                <button id="submit" type="submit" value="Enviar" class="btn btn-primary start-12">Enviar</button>
                            </form>
                        </div>
                   </div>
                            
                        </div>

            <?php
            }
            ?>


        <?php
        include "../layout/footer.php";
        ?>


    <?php
} else {

    header("location: ../login.php");
}
    ?>
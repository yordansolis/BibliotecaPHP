<div class="row">
  <div class="table-responsive">
    <table class="table table-hover" id="tablaGestoraTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">photo</th>
          <th scope="col">Disponoble</th>
          <th scope="col">$Precio</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $conn =  new mysqli("localhost", "root", "", "ipschichijay");
        $sql = "SELECT * FROM `medicamentos` WHERE 1";
        $query  = $conn->query($sql);

        if ($conn->connect_error) {
          die("connection failed:" . $conn->connect_error);
        }

        if ($query->num_rows > 0) {
          foreach ($query as $fila) {
            ?>
            <tr>

            <th scope="row"><?php echo $fila['id']; ?></th>
            <td><?php echo $fila['nombre']; ?> </td>
            <td><img src="../../assets/archivos/<?php echo $fila['imagen']?>" width="90" height="100" alt=""></td>
            <td><?php echo $fila['precio']; ?></td>
            <td><?php echo $fila['cantidad']?></td>
            <td>

  
      <a href="<?= './_editar.php?id=' . $fila["id"] ?>"  class="btn btn-warning">
       <i class="fa-solid fa-pen-to-square"></i></a>  
      |
      <a href="<?= '../../controllers/_delete.php?id=' . $fila["id"] ?>"   type="button" class="btn btn-danger">
       <i class="fa-solid fa-trash"></i></a>

      </td>
    
    <?php
        }
      }
      ?>

     
      
      <!--------------------------------script nuevo--------------------------------------------------->


    
      </tbody>
  </table>
  </div>
  </div>
    













<script type="text/javascript">
  $(document).ready(function() {
    $('#tablaGestoraTable').DataTable();
  })
</script>

<script>

</script>
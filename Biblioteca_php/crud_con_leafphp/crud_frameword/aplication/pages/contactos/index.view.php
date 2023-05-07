<?php view('header'); ?>

  <main class="container">

    <div class="card">
        <div class="card-header">
       
            <a name="" id="" class="btn btn-primary" href="/crud_frameword/aplication/crear" role="button">Agegar contacto</a>
        </div>
        <div class="card-body">
           
  <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($contactos as $contacto): ?>
                 <td><?php echo $contacto['id']; ?></td>
                <td><?php echo $contacto['nombre']; ?></td>
                <td><?php echo $contacto['correo']; ?></td>
                <td>
                   <a name="" id="" class="btn btn-info" href="/crud_frameword/aplication/editar/<?php echo $contacto['id']; ?>" role="button">Editar</a>

                     | 
                     
                     <a name="" id="" class="btn btn-danger" href="/crud_frameword/aplication/eliminar/<?php echo $contacto['id']; ?>" role="button">Eliminar</a>
                </td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>

        
        </div>
        <div class="card-footer text-muted">
    
  
        </div>
    </div>

    
  </main>


<?php view('footer'); ?>
<?php view('header'); ?>


<main class="container">
<div class="card">
    <div class="card-header">
       Formulario Editar
    </div>
    <div class="card-body">
    <form action="/crud_frameword/aplication/actualizar/<?php echo $contacto['id']; ?>" method="post">
    <div class="mb-3">
      <label for="" class="form-label">Nombre:</label>
      <input type="text"
        class="form-control" value="<?php echo $contacto['nombre']; ?>"  name="nombre" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Correo:</label>
      <input type="email"
        class="form-control" value="<?php echo $contacto['correo']; ?>" name="correo" id="" aria-describedby="helpId" placeholder="">
    </div>  

    <button type="submit" class="btn btn-success">Actualizar</button>
    <button type="submit" class="btn btn-danger">Cancelar</button>
    </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>

</main>
<?php view('footer'); ?>
<?php view('header'); ?>


<main class="container">
<div class="card">
    <div class="card-header">
       Formulario contactos
    </div>
    <div class="card-body">
    <form action="/crud_frameword/aplication/agregar" method="post">
    <div class="mb-3">
      <label for="" class="form-label">Nombre:</label>
      <input type="text"
        class="form-control" name="nombre" id="" aria-describedby="helpId"  require placeholder="">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Correo:</label>
      <input type="email"
        class="form-control" name="correo" id="" aria-describedby="helpId" require placeholder="">
    </div>  

    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="submit" class="btn btn-danger">Cancelar</button>
    </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>

</main>
<?php view('footer'); ?>
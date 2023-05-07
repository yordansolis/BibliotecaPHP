<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miSalud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link rel="stylesheet" type="text/css" href="../../assets/iconos/css/all.css">     
    <link rel="stylesheet" href="../../assets/data-table/css-table/dataTables.bootstrap5.min.css">
</head>
<body> 
    
<style>
  .menu{
    color: #ffff;
  }
</style>
    
<nav class="navbar navbar-expand-lg " style="background-color: #0D6EFD;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../../assets/logo/logo.png"  alt="logo" class="rounded-circle" width="65px">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link menu" aria-current="page" href="../admin/admin.php"><i class="fa-solid fa-house"></i>Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link menu" href="../component/categorias.php">categorias</a>
        </li>
           <li class="nav-item ">
          <a class="nav-link menu" href="../component/gestor.php"> <i class="fa fa-medkit" aria-hidden="true"></i>Gestor</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link menu" href="../component/procesos.php"> <i class="fa fa-medkit" aria-hidden="true"></i>Procesos</a>
        </li>

      </ul>
          <li class="d-flex  ">
         <a class="nav-link menu" href="../../controllers/salir.php" ><i class="fa-solid fa-arrow-right-from-bracket"></i>Cerra sesion</a>
      </li>
    </div>
  </div>
</nav>
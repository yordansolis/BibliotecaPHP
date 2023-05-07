<?php
session_start();
if (isset($_SESSION['nombre'])) {

  include "../layout/header_admin.php";
?>

  <div class="container  mt-3">
    <h1 class="splay-4">Procesos</h1>

    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Crear un nuevo usuario</h5>
            <a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#AddAdministrador">Añadir</a>
          </div>
        </div>

      </div>
      <div class="col">

        <div class="card" style="width: 18rem;  ">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Crear Medicamento</h5>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddMedicamento">Añadir</a>
          </div>
        </div>
      </div>

    </div>
    <br>
    <!--Modal de Agregar administrador-->
    <div class="modal fade" id="AddAdministrador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agrege Administrador</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addUser" method="post" onsubmit="return addUser()" autocomplete="off">
              <div class="row">
                <label for="usuario">Usuario: </label>
                <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Jname" aria-label="default input example" required>

                <div class="col">
                  <label for="nombre">Nombre: </label>
                  <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Default input" aria-label="default input example" required>
                </div>

                <div class="col">
                  <label for="segundoN">Segundo Nombre: </label>
                  <input id="segundoN" class="form-control" type="text" name="segundo_nombre" placeholder="Default input" aria-label="default input example">
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <label for="apellidoP">Primer apellido: </label>
                  <input id="apellidoP" class="form-control" type="text" name="primer_apellido" placeholder="Default input" aria-label="default input example" required>
                </div>
                <div class="col">
                  <label for="segundoP">Segundo apellido: </label>
                  <input id="segundoP" class="form-control" type="text" name="segundo_apellido" placeholder="Default input" aria-label="default input example" required>
                </div>

              </div>
              <br>
              <input type="date" value="" name="fecha_nacimiento" required>
              <hr>
              <div class="row">
                <div class="col">
                  <label for="cuidad">Cuidad:
                    <select id="cuidad" name="cuidad" required>
                      <option value="">(Seleccionar)</option>
                      <option value="choco">Choco</option>
                      <option value="antioquia">Antioquia</option>
                      <option value="cali">Cali</option>
                    </select>
                  </label>
                </div>
                <div class="col">
                  <label for="departamento">Departamento:
                    <select id="departamento" name="departamento" required>
                      <option value="">(Seleccionar)</option>
                      <option value="Bajo Buado">Bajo Baudo</option>
                      <option value="Quibdo">Quibdo</option>
                      <option value="Tado">Tado</option>
                    </select>
                  </label>
                  </label>
                </div>
                <div class="col">
                  <label for="sexo"> Sexo:
                    <select id="sexo" name="sexo" required>
                      <option value="">(Seleccionar)</option>
                      <option value="masculino">Masculino</option>
                      <option value="femenino">Femenino</option>
                    </select>
                  </label>
                </div>
              </div>
              <br>
              <hr>
              <label for="telefono">Telefono: </label>
              <input type="number" name="telefono" id="telefono" required>
              <hr>

              <div class="row">
                <div class="col">
                  <label for="email">Email@: </label>
                  <input type="email" name="email" id="email" required>
                </div>
                <div class="col">
                  <label for="password">Contraseña: </label>
                  <input type="password" name="password" id="password" required>
                </div>
              </div>
              <hr>
              <label for="rol"> Rol:
                <select id="rol" name="rol" required>
                  <option value="">(Seleccionar)</option>
                  <option value="administrador">Administrador</option>
                  <option value="trabajador">Trabajador</option>
                </select>
              </label>

              <br><br>
              <div style="margin-left: 100px;">
                <button id="submit" type="submit" class="btn btn-primary start-12">Enviar</button>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      function addUser() {

        $.ajax({
          method: "POST",
          data: $('#addUser').serialize(),
          url: ('../controller/usuarios/agregarUsuario/addUser.php'),
          //  procesos/usuarios/agregarUsuario/addUser.php
          success: function(respuesta) {
            console.log(respuesta);
          }
        });
        return false;
      }
    </script>

    <!--Aqui acaba esta session-->



    <!--Crear medicamentos  -->

    <div class="modal fade" id="AddMedicamento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crear medicamentos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">  <!--onsubmit="return addMedicamento()"-->
         <form   action="../../controllers/reciborMedicamentos.php"  method="POST"  enctype="multipart/form-data"  autocomplete="off">  
              <div class="col">
                <label for="nombre">Nombre del medicamento: </label>
                <textarea id="nombre" class="form-control" type="text" name="nombre" aria-label="default input example" required> </textarea>

                <div class="col">

                  <label for="precio">Precio:</label>
                  <input type="text" class="form-control" id="precio" name="precio" placeholder="Campo  sin puntos:" pattern="^[^.]+$" required>

                </div>

                <div class="col">
                  <label for="cantidad">Cantidad: </label>
                  <input id="cantidad" class="form-control" type="number" name="cantidad" placeholder="Default input" aria-label="default input example" required>
                </div>
                <br>
                <div style="margin-left: 100px;">

                 <input type="file" name="imagen"><br><br>

                  <button id="submit" type="submit" value="Enviar" class="btn btn-primary start-12">Enviar</button>
                     </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
      function addMedicamento() {
        $.ajax({
          method: "POST",
          data: $('#addMedicamento').serialize(),
          url: ('../controller/usuarios/agregarMedicamento/addMedicamento.php'),
          success: function(respuesta) {
            console.log(respuesta);
          }   
        });
        return false;
      }
    </script>
    <!--aqui acaba crear medicamentos -->






    <h3>Seccion 2</h3>

    <div class="row mt-3">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Crear nuevo medicamento</h5>
            <a href="#" class="btn btn-primary">Añadir</a>
          </div>
        </div>

      </div>
      <div class="col">

        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Actualizar medicamentos</h5>
            <a href="#" class="btn btn-primary">Update</a>
          </div>
        </div>

      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Actulizardatos de Trabajador/Administrador</h5>
            <a href="#" class="btn btn-primary ">Update</a>
          </div>
        </div>
        <div class="mb-5"></div>

      </div>




      <script src="../library/jquery-3.6.1.min.js"></script>
      <script src="../library/sweetalert.min.js"></script>

      <?php
      include "../layout/footer.php";
      ?>


    <?php
  } else {

    header("location: ../login.php");
  }
    ?>
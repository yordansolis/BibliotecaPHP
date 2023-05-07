
<div class="row">
<div class="table-responsive"> 
<table class="table table-hover" id="tablaCategoriasDataTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">editar</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      

      <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></td>

     <td><button type="button" class="btn btn-danger"> <i class="fa-solid fa-trash"></i></button></td>

    </tr>
  
   
  </tbody>
</table>
</div> 
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaCategoriasDataTable').DataTable();
  })
</script>
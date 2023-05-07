
<h1> {{ $modo }}  empleado</h1>


@if(count($errors)>0)
 
<div class="alert alert-danger" role="alert">
    <ul>
    
    @foreach($errors->all() as $error)
    <p>  {{ $error }}  </p> 
    @endforeach
</ul>
</div>

@endif
        

<div class="form-group">
    <label for="Nombre"> Nombre</label>
    <input type="text" id="Nombre" class="form-control" name="Nombre" value=" {{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}">
    
</div>
<div class="form-group">
<label for="correo"> correo</label>
<input type="text" class="form-control" id="correo" name="correo" value="{{ isset($empleado->correo)?$empleado->correo:old('correo') }}">
</div>
<br>

<div class="form-group">
<label for="foto"></label>
@if(isset($empleado->foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">
@endif
<input type="file"  class="form-control" id="foto"  name="foto" value="" >

</div>
<br>


<input class="btn btn-success" type="submit" value="{{ $modo }} datos">



<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>


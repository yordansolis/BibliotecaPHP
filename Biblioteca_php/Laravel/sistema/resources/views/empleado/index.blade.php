@extends('layouts.app')

@section('content')
<div class="container">

    
    @if(Session::has('mensaje'))
    <div class="alert alert-success  alert-dismissible" role="alert">

    {{Session::get('mensaje')}}
    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">  
    <span aria-hidden="true">&times;</span>
    </button>
 </div>

@endif
   



<a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar un nuevo producto</a>
<br><br>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
           @foreach( $empleados as $empleado )
            <tr>
        
                <td>
                    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">                                
                </td>
                
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->correo }}</td>
                <td>
                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning" >
                        Editar
                    </a>
                    
                |
                    
                <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                @csrf 
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro?')" value="Borrar">
                </form>
                </td>
            </tr>
      @endforeach
        </tbody>
    </table>
    {!! $empleados->links() !!}
</div>
</div>
@endsection
<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $datos['empleados'] = Empleado::paginate(5);
         return view('empleado.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos =[
            'Nombre' => 'required|string|max:100', 
            'correo' => 'required|string|max:100',
            'foto' => 'required|max:10000|mimes:jpeg,png,jpg' 
        ];
     
         $mensaje = [
            'required' => 'El :attribute es requerido',
            'foto.required' => 'la foto es requerida',
         ];

         $this->validate($request, $campos, $mensaje);

       // $datosEmepleado = request()->all();
        $datosEmepleado = request()->except('_token');


     if ($request->hasFile('foto')) {
         $datosEmepleado['foto']=$request->file('foto')->store('uploads', 'public');
     }

        Empleado::insert($datosEmepleado);
        return redirect('empleado')->with('mensaje', 'Emepledo agregado con exito');
      //  return response()->json($datosEmepleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado = Empleado::findOrfail($id);

        return view('empleado.edit', compact('empleado'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $campos =[
            'Nombre' => 'required|string|max:100', 
            'correo' => 'required|string|max:100',
        ];
     
         $mensaje = [
            'required' => 'El :attribute es requerido',
            'foto.required' => 'la foto es requerida',
         ];

         if ($request->hasFile('foto')) {
            $campos =['foto' => 'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje = ['foto.required' => 'la foto es requerida'];         
           
        }

         $this->validate($request, $campos, $mensaje);





        //
        $datosEmepleado = request()->except(['_token', '_method']);
        
        if ($request->hasFile('foto')) {
            $empleado = Empleado::findOrfail($id);

            Storage::delete('public/'.$empleado->foto);
           
            $datosEmepleado['foto']=$request->file('foto')->store('uploads', 'public');
        }
   
        
        
        Empleado::where('id', '=', $id)->update($datosEmepleado);
        $empleado = Empleado::findOrfail($id);
       // return view('empleado.edit', compact('empleado'));
       return redirect('empleado')->with('mensaje', 'Emepledo Update con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado = Empleado::findOrfail($id);

        if (Storage::delete('public/'.$empleado->foto)) {
            Empleado::destroy($id);
        }
               
        return redirect('empleado')->with('mensaje', 'Emepledo eliminado con exito');

      
    }
}

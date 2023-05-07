<?php

namespace Controllers;
use Models\Contactos;
class ContactosController extends Controller
{
 
    public function index(){

        return view('contactos/index', ['contactos' => Contactos::all()]);
    }

    public function crear(){

        return view('contactos/crear');
    }

    public function agregar(){
        $contacto = new Contactos;
        $nombre = app()->request()->get('nombre');
        $correo =  app()->request()->get('correo');
        if ($nombre == "" || $correo = "") {
            return response()->redirect('/crud_frameword/aplication');
        }
        $contacto->nombre =  app()->request()->get('nombre');
        $contacto->correo = app()->request()->get('correo');

        $contacto->save();

        return response()->redirect('/crud_frameword/aplication');
    }

    public function eliminar($id){
       Contactos::destroy($id);
       return response()->redirect('/crud_frameword/aplication');

    }
    public function editar($id){
         $datosContactos = Contactos::find($id);
         return view('contactos/editar', ['contacto' =>  $datosContactos]);
     }
     
     public function actualizar($id){
    

        $nombre =  app()->request()->get('nombre');
        $correo = app()->request()->get('correo');
        //se buscan los daros 
        $contacto= Contactos::findOrFail($id);


        $contacto->nombre = ($nombre  != "")?$nombre:$contacto->nombre;
        $contacto->correo = ($correo  != "")?$correo:$contacto->correo;

        $contacto->update();

        return response()->redirect('/crud_frameword/aplication');

    }
}
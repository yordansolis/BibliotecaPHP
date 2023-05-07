<?php 

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
   
      public function index() {
         return view('welcome_message');
      }



      public function view($page = 'home'){
        /** asi recibimos solicitudes con el metodo get  */
       //acepta un argumento que es el nombre de la pagina que va cargar
      
         
          //Comprovamos que esta pagina exista
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
         #¡Vaya, no tenemos una página para eso!
         throw new PageNotFoundException($page);

        }

        // methd para ponerlo el mensaje de .erro en  mayuscula 
        $data['title'] = ucfirst($page); 

        
        return view('templates/header', $data)
                   . view('pages/'. $page)  
                   . view('templates/footer'); 
     }





     public function prueba($usuario = 'usuario'){
      if (! is_file(APPPATH . 'Views/pages/' . $usuario . '.php')) {
         throw new PageNotFoundException($usuario);   
        }
        
        return view('pages/prueba');
   }




}

<?php
require_once("../models/modelo.php");

class modeloController{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Modelo();
    }

   static function listMedicamentos(){
        $productos = new Modelo();        
        $dato = $productos->mostrarMedicamentos("medicamentos", "1");
    }

    public function recibirMeducamentos($addMedicamento){
        $productos = new Modelo();        
        $productos->subirMedicamentos($addMedicamento);
     header("location: ../views/component/gestor.php");

    }

    public function editarMedicamento($datos){
        
      
     $productos = new Modelo(); 
     $productos->updateMedicamento($datos);
     header("location: ../views/component/procesos.php");

    }

    
    public function deleteMedicamento($id){ 
     $productos = new Modelo(); 
     $productos->borrarMedicamento($id);
     header("location: ../views/component/gestor.php");

   }
 




    /*

   static function inicio(){
        $productos = new Modelo();        
        $dato = $productos->mostrar("productos", "1");
       require_once("./views/inicio.php");
    }





    // creea un user name 
    static function nuevo(){
    
        require_once("./views/nuevo.php");
    }
    // gurda un iusuario
    static function guardar(){
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "'". $nombre."',".$precio;
        $productos = new Modelo();
        $dato = $productos->insertar("productos", $data);
        header("location:".urlsite);
    }



        // creea un user update 
        static function editar(){
            $id= $_REQUEST['id'];
            $productos = new Modelo();
            $dato = $productos->mostrar("productos", "id=".$id);

            require_once("./views/editar.php");
        }

        // gurda un actulizar
        static function Actualizar(){
            $id= $_REQUEST['id'];
            $nombre = $_REQUEST['nombre'];
            $precio = $_REQUEST['precio'];

            $data = "nombre='". $nombre."',precio=".$precio;
            $productos = new Modelo();
            ///el viamos esto al modelo
            $dato = $productos->actualizar("productos", $data, "id=".$id);
            header("location:".urlsite);
        }

            // creea un user update 
            static function eliminar(){
                $id= $_REQUEST['id'];
                $productos = new Modelo();
                $dato = $productos->eliminar("productos", "id=".$id);
    
                header("location:".urlsite);

            }
    */


}



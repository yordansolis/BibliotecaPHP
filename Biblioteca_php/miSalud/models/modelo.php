<?php

class Modelo{
    
    private $Modelo; 
    private $db; 
    private $datos;
    
    public function __construct()
    {
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost; dbname=ipschichijay', "root",  "");

    }
    
         public function mostrarMedicamentos($tabla,$condicion){
            $consul="select * from ".$tabla." where ".$condicion.";";
                $resu=$this->db->query($consul);
               
                while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                    $this->datos[]=$filas;
                }
                return $this->datos;
            } 


            public function subirMedicamentos($addMedicamento){ 
                
                $addMedicamento = array(
                    $nombre= $_POST["nombre"],
                     $precio = $_POST["precio"],
                     $cantidad =  $_POST["cantidad"]
                );
               
                $rutaDirectorio = "../assets/archivos/"; 
                
                $archivo = $rutaDirectorio . basename($_FILES["imagen"]["name"]);
                $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
                
                //validar que sea imagen 
                $chearImagen = getimagesize($_FILES["imagen"]["tmp_name"]);

                if ($chearImagen != false) {
                    $size =  $_FILES["imagen"]["size"];
                    //VALIDAR TAMAÑO DEL ARCHIVO    
                    if ($size > 518289) {
                        echo "el archivo tiene que ser menor a 118.289";
                    } else {

                       //creamos un nombre de la imagen aleatoria
                        $nombre_aleatorio = "imagen_" . uniqid() . ".jpg";

                        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo . $nombre_aleatorio)) {

                               // Cambiamos el nombre del fichero para guardar en la db 
                            $nombreImgDB =  $_FILES["imagen"]["name"] . $nombre_aleatorio;   
                                                      
                            //Insertamos pdo                     
                            $query6 = "INSERT INTO medicamentos (nombre, imagen, precio, cantidad)
                            Values (:nombre, :imagen, :precio, :cantidad)";

                            $stmt = $this->db->prepare($query6);


                            $stmt->execute([':nombre' => $nombre, 
                            ':imagen' => $nombreImgDB,
                            ':precio' => $precio,
                            ':cantidad' => $cantidad,
                                        ]);

                        

                        } else {
                            echo "Ubo un error con la ruta de la carpeta donde se guarda el arhivo !";
                        }
                    }
                } else {
                    echo "el documento no es una imagen";
                }

            }

            //recibe datos para editar
            public function modelEditarMedicamento($id){
                      $id = $_GET['id'];
                      
                      $query = "SELECT * FROM medicamentos WHERE id = :id";
                      $stmt = $this->db->prepare($query);
      
                      $stmt->execute([':id' => $id]);
                       $medicamento  = $stmt->fetch();
                       var_dump($medicamento);                    
                    return $medicamento;

            }

            //update 
            public function updateMedicamento($datos){
              
                 $datos = array(
                    $id= $_POST["id"],
                    $nombre = $_POST["name"],
                    $precio =  $_POST["precio"]
                 );

                            
          $query = "UPDATE  medicamentos set nombre=:nombre, precio=:precio
            WHERE id=:id";

            $stmt = $this->db->prepare($query);
            //FORMA MAS RECOMENDADA
            $stmt->bindParam(':nombre',$nombre, PDO::PARAM_STR); 
            $stmt->bindParam(':precio',$precio, PDO::PARAM_STR);
            $stmt->bindParam(':id',$id, PDO::PARAM_INT);
            $stmt->execute();
            
            }

            public function borrarMedicamento($id){

                $query1 = "DELETE FROM medicamentos  WHERE id=:id";
                $stmt = $this->db->prepare($query1);
                $stmt->bindParam(':id',$id, PDO::PARAM_INT);
                $stmt->execute();
               
            }



}

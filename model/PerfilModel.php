<?php
include 'model/database.php';

class Perfil
{
       //DE LA BASE DE DATOS
       public $pdo;

       //DATA TRAIDA DEL SELECT
       public $correo;
       public $contrasena;
       public $cedula;
    public $facultad;
   
       //ESTE CODIGO VA SIEMPRE EN LOS MODEL
       public function __construct()
       {
           try {
               $this->pdo = DB::DBStart();
           } catch (Exception $e) {
               die($e->getMessage());
           }
       }
    public function ActualizarPerfil(perfil $data){

    }

    public function VerPerfil(perfil $data){
        try {
            $sql = "SELECT * FROM profesor WHERE id=1";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $cedula->cedula,
                $facultad->facultad,
            ));

            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


}
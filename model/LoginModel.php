<?php

include 'model/database.php';

class LoginModel
{

    //DE LA BASE DE DATOS
    public $pdo;

    //DATA TRAIDA DEL SELECT
    public $correo;
    public $contrasena;


    //ESTE CODIGO VA SIEMPRE EN LOS MODEL
    public function __construct()
    {
        try {
            $this->pdo = DB::DBStart();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ValidarLogin(loginmodel $data)
    {
        try {
            $sql = "SELECT * FROM credenciales WHERE correo=? AND contrasena=?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->correo,
                $data->contrasena
            ));

            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try {
            $sql = "SELECT * FROM profesor WHERE id=?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $id
            ));

            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

<?php


class Perfilmodel
{
    //DE LA BASE DE DATOS
    private $pdo;
    public $msg;

    //DATA TRAIDA DEL SELECT
    public $correo;
    public $contrasena;
    public $cedula;
    public $facultad;
    public $id;
    public $contrasenanueva;
    public $nombre;
    public $apellido;
    public $telefono;
    public $direccion;
    public $id_profesor;
    public $contrasenavieja;

    //ESTE CODIGO VA SIEMPRE EN LOS MODEL
    public function __construct()
    {
        try {
            $this->pdo = DB::DBStart();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Verificarcontraseña(perfilmodel $data)
    {
        try {
            
            $sql = "SELECT * FROM credenciales WHERE contrasena=? AND id=?";
            $stm =$this->pdo->prepare($sql);
            $stm->execute(
                array(
                    $data->contrasenavieja,
                    $data->id
                )
                );
            return$stm->fetch(PDO::FETCH_OBJ);
            
        } catch (Exception $e) {
            die($e->getMessage());
           
    }
}

public function Actualizarcontrasena(perfilmodel $data)
    {
        try {
            $sql = "UPDATE credenciales SET contrasena=? WHERE id=?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->contrasenanueva,
                $data->id
            ));

            return $this->msg = "Contraseña actualizada con exito&t=text-success";
        } catch (Exception $e) {
            return $this->msg = "Ocurrio un error al actualizar la contraseña, Intente nuevamente&t=text-danger";
        }
    }



    public function ActualizarPerfil(perfilmodel $data)
    {
        try {
            $sql = "UPDATE profesor SET nombre=?, apellido=?,  facultad=?, direccion=?, telefono=?  WHERE id=?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->nombre,
                $data->apellido,
                $data->facultad,
                $data->direccion,
                $data->telefono,

                $data->id
            ));

            return $this->msg = "Informacion de perfil actualizada con exito&t=text-success";
        } catch (Exception $e) {
            return $this->msg = "Ocurrio un error al actualizar la informacion, Intente nuevamente&t=text-danger";
        }
    }

    public function VerPerfil(perfilmodel $data)
    {
        try {
            $sql = "SELECT * FROM profesor AS p
                JOIN credenciales AS c ON p.id = c.id_profesor WHERE p.id=?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->id_profesor
            ));

            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

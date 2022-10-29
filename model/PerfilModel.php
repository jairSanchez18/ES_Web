<?php


class Perfilmodel
{
    //DE LA BASE DE DATOS
    private $pdo;

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
            die($e->getMessage());
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

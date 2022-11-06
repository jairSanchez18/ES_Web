<?php

class Solicitud{

    private $pdo;

    public $equipo;

    public function __construct()
    {
        try{
            $this->pdo = DB::DBStart();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Productos(){
        try{
            $sql = "SELECT * FROM inventario";

            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            return $stm->fetchAll(pdo::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function ObtenerCorreo($id){
        try{
            $sql = "SELECT correo FROM credenciales WHERE id_profesor=?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array($id));

            return $stm->fetch(pdo::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Salon($id){
        try{
            $sql = "SELECT DISTINCT salon FROM horario where id_profesor=? and salon != '-'";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array($id));

            return $stm->fetchAll(pdo::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function ValidarCantidad($equipo){
        try{
            $sql = "SELECT * FROM inventario WHERE equipo=?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array($equipo));

            return $stm->fetch(pdo::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function EnviarSolicitud(Solicitud $data){
        try{
            $sql = "INSERT INTO solicitudes (id_profesor, id_inventario, equipo_solicitado, fecha_solicitud_pedido, estado_solicitud, salon, cantidad)
            VALUES (?,?,?,?,?,?,?)";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->id_profesor,
                $data->id_inventario,
                $data->producto,
                $data->fecha_s,
                $data->estado,
                $data->salon,
                $data->cantidad
            ));

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
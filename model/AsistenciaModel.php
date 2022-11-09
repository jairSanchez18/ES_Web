<?php

class AsistenciaModel
{
    //DE LA BASE DE DATOS
    private $pdo;
    private $resp;
    public $result;
    public $observaciones;
    public $id_asist;
    public $id_salon;
    public $id_profesor;
    public $id_grupo;
    public $id_horario;
    public $fecha;

    //ESTE CODIGO VA SIEMPRE EN LOS MODEL
    public function __construct()
    {
        try {
            $this->pdo = DB::DBStart();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function VerAsistencia(AsistenciaModel $data)
    {
        try {
            $sql = "SELECT l.id as 'id_asist', l.id_profesor, l.id_estudiante, l.asistencia, l.porcentaje,
            l.observaciones, l.id_salon, l.create_at, h.id as 'id_horario', h.hora_entrada, h.hora_salida,
            h.salon, h.id_grupo, e.nombre, e.apellido, e.cedula, e.facultad, e.carrera, e.correo, g.grupo FROM lista_asist AS l
            JOIN horario AS h ON l.id_horario = h.id
            JOIN estudiante AS e ON e.id = l.id_estudiante
            JOIN grupos AS g ON h.id_grupo = g.id WHERE h.id =? and g.id =? and date(l.create_at) =? and l.id_profesor =?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->id_horario,
                $data->id_grupo,
                $data->fecha,
                $data->id_profesor
            ));

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function GuardarObservaciones(AsistenciaModel $data)
    {
        try {
            $sql = "UPDATE lista_asist SET observaciones=? WHERE id =?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array(
                    $data->observaciones,
                    $data->id_asist
                )
            );

            return $this->resp = "La observacion fue guardada con exito&t=text-success&fecha=$data->fecha.&salon=$data->id_salon.&grupo=$data->id_grupo";
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function VerGrupo($id)
    {
        try {
            $sql = "SELECT * FROM grupos where id_profesor=?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array($id));

            return $stm->fetchAll(pdo::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function VerFecha(AsistenciaModel $data)
    {
        try {
            $sql = "SELECT distinct date(create_at) as 'create_at' from lista_asist WHERE id_profesor = ?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->id_profesor
            ));

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function VerSalon(AsistenciaModel $data){
        try{
            $sql = "SELECT id, salon FROM horario where id_profesor=? and salon != '-'";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->id_profesor
            ));

            return $stm->fetchAll(pdo::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
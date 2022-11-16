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
    public $grupo;

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
            l.observaciones, l.id_grupo, l.create_at, h.id as 'id_horario', h.hora_entrada, h.hora_salida,
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

    public function VerCamposSeleccionados(AsistenciaModel $data)
    {
        try {
            $sql = "SELECT DISTINCT h.salon, g.grupo FROM horario AS h
            JOIN grupos AS g on h.id_grupo = g.id WHERE h.id =? and g.id =? and h.id_profesor =?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->id_horario,
                $data->id_grupo,
                $data->id_profesor
            ));

            return $stm->fetch(PDO::FETCH_OBJ);
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
            $sql = "SELECT distinct date(create_at) as 'create_at' from lista_asist WHERE id_profesor = ? and id_grupo = ?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->id_profesor,
                $data->id_grupo
            ));

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function VerSalon(AsistenciaModel $data){
        try{
            $sql = "SELECT DISTINCT h.id as 'id_horario', h.salon, h.id_grupo as 'id_grupo', h.hora_entrada, h.dia FROM horario as h
            join grupos as g WHERE h.id_profesor=? and h.salon != '-' and h.id_grupo = ? group by h.dia ASC";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->id_profesor,
                $data->id_grupo
            ));

            return $stm->fetchAll(pdo::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
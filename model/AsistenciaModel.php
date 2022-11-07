<?php

class AsistenciaModel
{
    //DE LA BASE DE DATOS
    private $pdo;
    private $resp;
    public $result;

    //ESTE CODIGO VA SIEMPRE EN LOS MODEL
    public function __construct()
    {
        try {
            $this->pdo = DB::DBStart();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function VerAsistencia($id)
    {
        try {
            $sql = "SELECT * FROM lista_asist as l
            JOIN grupos as g on l.id_salon = g.id
            JOIN estudiante as e on e.id = l.id_estudiante where g.grupo = '1LS131' and l.id_profesor = ?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array($id));

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

            return $this->resp = "La observacion fue guardada con exito&t=text-success";
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
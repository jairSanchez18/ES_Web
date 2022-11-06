<?php

class AsistenciaModel
{
    //DE LA BASE DE DATOS
    private $pdo;
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
    public function mostrarDatosEstudiantes(asistenciamodel $data)
    {
        try {
            $sql = "SELECT * from estudiante 
            AS p JOIN credenciales AS c ON p.id = c.id_profesor WHERE p.id=?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->id_profesor
            ));
            return $stm->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function mostrarDatosAsistencia(asistenciamodel $data2)
    {
        try {
            $sql2 = "SELECT * from lista_asist
              AS p JOIN credenciales AS c ON p.id = c.id_profesor WHERE p.id=?";
            $stm2 = $this->pdo->prepare($sql2);
            $stm2->execute(array(
                $data2->id_profesor
            ));
            return $stm2->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function mostrarDatosHorario(asistenciamodel $data)
    {
        try {
            $sql = "SELECT * from salones
              AS p JOIN credenciales AS c ON p.id = c.id_profesor WHERE p.id=?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->id_profesor
            ));
            return $stm->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Observaciones(asistenciamodel $data)
    {
        try {
            if (isset($_POST['texto'])) {
                $texto = $_POST['texto'];
                $sql = "INSERT INTO lista_asist(observaciones) VALUES $texto
                  AS p JOIN estudiante AS c ON p.id = c.id WHERE p.id=?";
                $stm = $this->pdo->prepare($sql);
                $stm->execute(array(
                    $data->id_profesor
                ));
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

<?php

class Horario
{

    private $pdo;
    private $resp;
    public $id_profesor;

    public function __construct()
    {
        try {
            $this->pdo = DB::DBStart();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerHoras(horario $data)
    {
        try {
            $sql = "SELECT DISTINCT hora_entrada, hora_salida FROM horario
            WHERE id_profesor = ?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array($data->id_profesor)
            );

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerLunes(horario $data)
    {
        try {
            $sql = "SELECT * FROM horario
            WHERE id_profesor = ? and dia = 'Lunes'";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array($data->id_profesor)
            );

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerMartes(horario $data)
    {
        try {
            $sql = "SELECT * FROM horario
            WHERE id_profesor = ? and dia = 'Martes'";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array($data->id_profesor)
            );

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerMiercoles(horario $data)
    {
        try {
            $sql = "SELECT * FROM horario
            WHERE id_profesor = ? and dia = 'Miercoles'";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array($data->id_profesor)
            );

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerJueves(horario $data)
    {
        try {
            $sql = "SELECT * FROM horario
            WHERE id_profesor = ? and dia = 'Jueves'";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array($data->id_profesor)
            );

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerViernes(horario $data)
    {
        try {
            $sql = "SELECT * FROM horario
            WHERE id_profesor = ? and dia = 'Viernes'";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array($data->id_profesor)
            );

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerSabado(horario $data)
    {
        try {
            $sql = "SELECT * FROM horario
            WHERE id_profesor = ? and dia = 'Sabado'";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array($data->id_profesor)
            );

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

<?php

class Horario {

    private $pdo;
    private $resp;

    public function __construct()
    {
        try {
            $this->pdo = DB::DBStart();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerHorario() {
        try{
            $hora = $this->pdo->prepare("SELECT DISTINCT hora_entrada, hora_salida FROM horario");
            $hora->execute();
			return $hora->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerHorarioLunes() {
        try{
            $lunes = $this->pdo->prepare("SELECT * FROM horario WHERE dia = 1 AND id_profesor = 1 AND id_union_materias = 1");
            $lunes->execute();
			return $lunes->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerHorarioMartes() {
        try{
            $martes = $this->pdo->prepare("SELECT * FROM horario WHERE dia = 2 AND id_profesor = 1 AND id_union_materias = 1");
            $martes->execute();
			return $martes->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerHorarioMiercoles() {
        try{
            $miercoles = $this->pdo->prepare("SELECT * FROM horario WHERE dia = 3 AND id_profesor = 1 AND id_union_materias = 1");
            $miercoles->execute();
			return $miercoles->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerHorarioJueves() {
        try{
            $jueves = $this->pdo->prepare("SELECT * FROM horario WHERE dia = 4 AND id_profesor = 1 AND id_union_materias = 1");
            $jueves->execute();
			return $jueves->fetchAll(PDO::FETCH_OBJ);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
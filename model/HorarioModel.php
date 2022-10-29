<?php

class Horario {

    private $pdo;
    private $resp;

    public $hora_entrada;
    public $hora_salida;
    public $materia;
    public $cod_materia;
    public $id_union;
    public $dia;

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
            $stm = $this->pdo->prepare("SELECT * FROM horario AS H. 
                                        JOIN salones AS S. ON H.id_union_materias = S.id_union 
                                        WHERE H.id_profesor = 1 AND H.id_union_materias = ? 
                                        ORDER BY H.hora_entrada ASC");
			          
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ObtenerSalones() {
        try{
            $stm = $this->pdo->prepare("SELECT * FROM salones 
                                        WHERE id_profesor = SESSION['id']"); 
            $stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
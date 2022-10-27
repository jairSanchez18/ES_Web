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
        /*$id = $_SESSION['id_usuario'];
        $cedula = $_POST['cedula'];
        $sql = "UPDATE profesor SET cedula='$cedula' WHERE id=?";
        $res = mysqli_query($pdo, $sql);
        if ($stm) {
            echo "<script>alert('se actualizo')</script>";
        } else {
            echo "<script>alert('no se actualizo')</script>";
        }*/
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

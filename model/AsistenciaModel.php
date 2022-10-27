<?php

require_once "model/database.php";

class AsistenciaModel extends DB
{
    public function __construct()
    {
        try {
            $this->pdo = DB::DBStart();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function mostrarDatosEstudiantes()
    {
        $sql="SELECT nombre,
                     apellido,
                     correo,
                     cedula,
                     asistencia
                     from estudiantes";
                    $query=DB::DBStart()->prepare($sql);
                    $query->execute();
                    return $query->fetchALL();
                    $query->close();
    }

    public function mostrarDatosAsistencia()
    {
        $sql2="SELECT asistencia,
                     porcentaje,
                     observaciones
                     from lista_asist";
                     $query=DB::DBStart()->prepare($sql2);
                     $query->execute();
                     return $query->fetchALL();
                     $query->close();
    }


    public function procesos()
    {
        
        $datos=mostrarDatosEstudiantes();
    
        $tabla='<table class="text-center">
                <thead>
                <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Cédula</th>
                <th>Asistencia</th>
                <th>Porcentaje</th>
                <th>Observaciones</th>
                <th>Guardar</th>
                </tr>
                </thead>
                <tbody>';

            $datosTabla="";

            foreach($datos as $key => $value)
            {
            $datosTabla=$datosTabla.'<tr>
            <td>'.$value['nombre'].'</td>
            <td>'.$value['apellido'].'</td>
            <td>'.$value['correo'].'</td>
            <td>'.$value['cedula'].'</td>
            <td>'.$value['asistencia'].'</td>
            <td>'.$value['porcentaje'].'</td>
            <form action="#" method="POST">
                <td><input type="text" class="inputs-style" name="" id=""></td>
                <td><button type="submit" class="btn btn-success tam-style"><i class="fa-solid fa-floppy-disk"></i></button></td>
            </form>
            </tr>';
            }
            echo $tabla.$datosTabla.'</tbody></table>';
        }

}


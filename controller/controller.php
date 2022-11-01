<?php
session_start();

include 'model/LoginModel.php';
include 'model/PerfilModel.php';
<<<<<<< HEAD
include 'model/HorarioModel.php';
=======
include 'model/AsistenciaModel.php';
>>>>>>> 83c069d423f66f12111b001cbd90d9edeb595cb5

class Controller
{

    private $pdo;

    private $LoginModel;
<<<<<<< HEAD
    private $Perfilmodel;
=======
>>>>>>> 83c069d423f66f12111b001cbd90d9edeb595cb5
    private $horarioModel;
    private $horarioModel1;
    private $horarioModel2;
    private $horarioModel3;
    private $horarioModel4;
<<<<<<< HEAD
=======
    private $salonesModel;
    private $Perfilmodel;
    private $AsistenciaModel;

    public function __construct()
    {
        $this->LoginModel = new LoginModel();        
        $this->Perfilmodel = new Perfilmodel(); 
        $this->AsistenciaModel = new AsistenciaModel();
    }
>>>>>>> 83c069d423f66f12111b001cbd90d9edeb595cb5

    public function __construct()
    {
        $this->LoginModel = new LoginModel();
<<<<<<< HEAD
        $this->Perfilmodel = new Perfilmodel();
=======
>>>>>>> 83c069d423f66f12111b001cbd90d9edeb595cb5
        $this->horarioModel = new Horario();
        $this->horarioModel1 = new Horario();
        $this->horarioModel2 = new Horario();
        $this->horarioModel3 = new Horario();
        $this->horarioModel4 = new Horario();
<<<<<<< HEAD
        
=======
        $this->Perfilmodel = new Perfilmodel();
>>>>>>> 83c069d423f66f12111b001cbd90d9edeb595cb5
    }


    public function Asistencia()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        }else{
            
            $AsistenciaData = new AsistenciaModel();
            $resp = new AsistenciaModel();

            $AsistenciaData->id_profesor = $_SESSION['user_id'];
    
            $resp = $this->AsistenciaModel->mostrarDatosEstudiantes($AsistenciaData);
            $resp2 = $this->AsistenciaModel->mostrarDatosAsistencia($AsistenciaData);
            $resp3 = $this->AsistenciaModel->mostrarDatosHorario($AsistenciaData);
        
        } else {
            require('view/asistencia.php');
        }
    }

    public function Horario()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        }else{
            $hora = new Horario();
            $hora = $this->horarioModel->ObtenerHorario();

            $lunes = new Horario();
            $lunes = $this->horarioModel1->ObtenerHorarioLunes();

            $martes = new Horario();
            $martes = $this->horarioModel2->ObtenerHorarioMartes();

            $miercoles = new Horario();
            $miercoles = $this->horarioModel3->ObtenerHorarioMiercoles();

            $jueves = new Horario();
            $jueves = $this->horarioModel4->ObtenerHorarioJueves();
<<<<<<< HEAD

=======
        } else {
>>>>>>> 83c069d423f66f12111b001cbd90d9edeb595cb5
            require('view/horario.php');
        }
    }

    public function Login()
    {
        require('view/login.php');
    }
    public function  Actualizarcontrasena()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            $consulta = new Perfilmodel();

            $id = $_SESSION['user_id'];
            $consulta->contrasenavieja = $_REQUEST['password1'];
            $consulta->contrasenanueva = $_REQUEST['password2'];
            $consulta->id = $id;

            if ($this->resp = $this->Perfilmodel->Actualizarcontrasena($consulta)) {
                header('Location: ?op=vperfil&msg=' . $this->resp);

                $_SESSION['user_name'] = $consulta->nombre . " " . $consulta->apellido;
            }
        }
    }

    public function PerfilA()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            $consulta = new Perfilmodel();

            $id = $_SESSION['user_id'];
            $consulta->nombre = $_REQUEST['nombre'];
            $consulta->apellido = $_REQUEST['apellido'];
            $consulta->facultad = $_REQUEST['facultad'];
            $consulta->direccion = $_REQUEST['direccion'];
            $consulta->telefono = $_REQUEST['telefono'];

            $consulta->id = $id;

            if ($this->resp = $this->Perfilmodel->ActualizarPerfil($consulta)) {
                header('Location: ?op=vperfil&msg=' . $this->resp);

                $_SESSION['user_name'] = $consulta->nombre . " " . $consulta->apellido;
            }
        }
    }
    public function Perfil()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            $PerfilData = new Perfilmodel();
            $resp = new Perfilmodel();

            $PerfilData->id_profesor = $_SESSION['user_id'];

            $resp = $this->Perfilmodel->VerPerfil($PerfilData);

            require('view/perfil.php');
        }
    }


    public function Principal()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            require('view/principal.php');
        }
    }

    public function Recuperar()
    {
        require('view/recuperar.php');
    }

    public function Solicitud()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            require('view/solicitud.php');
        }
    }

    public function Error()
    {
        require('view/404.php');
    }

    public function Index()
    {
        require('view/login.php');
    }

    public function ValidarLogin()
    {
        $LoginData = new LoginModel();

        $LoginData->correo = $_REQUEST['correo'];
        $LoginData->contrasena = $_REQUEST['contrasena'];

        if ($resp = $this->LoginModel->ValidarLogin($LoginData)) {
            $_SESSION['user_id'] = $resp->id_profesor;

            $datos = $this->LoginModel->Obtener($_SESSION['user_id']);

            $_SESSION['acceso'] = true;
            $_SESSION['user_name'] = $datos->nombre . " " . $datos->apellido;
            header('Location: ?op=vprincipal');
        } else {
            header('Location: ?op=vlogin&msg=Verifique el correo y contraseña introducidos&t=text-danger');
        }
    }

    public function CerrarSesion()
    {
        @session_destroy();
        require('view/login.php');
    }
}

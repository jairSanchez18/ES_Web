<?php
session_start();

include 'model/LoginModel.php';
include 'model/PerfilModel.php';

class Controller
{

    private $pdo;

    private $LoginModel;
    private $salonesModel;
    private $Perfilmodel;

    public function __construct()
    {
        $this->LoginModel = new LoginModel();
        $this->Perfilmodel = new Perfilmodel();
    }


    public function Asistencia()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            require('view/asistencia.php');
        }
    }

    public function Horario()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            require('view/horario.php');
        }
    }

    public function Login()
    {
        require('view/login.php');
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

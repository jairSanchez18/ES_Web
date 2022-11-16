<?php
session_start();

include 'model/LoginModel.php';
include 'model/PerfilModel.php';
include 'model/HorarioModel.php';
include 'model/AsistenciaModel.php';
include 'model/SolicitudModel.php';

class Controller
{
    private $pdo;
    private $resp;
    
    private $LoginModel;
    private $horarioModel;
    private $Perfilmodel;
    private $AsistenciaModel;
    private $SolicitudModel;

    public function __construct()
    {
        $this->LoginModel = new LoginModel();
        $this->Perfilmodel = new Perfilmodel();
        $this->horarioModel = new Horario();
        $this->Perfilmodel = new Perfilmodel();
        $this->AsistenciaModel = new AsistenciaModel();
        $this->SolicitudModel = new Solicitud();
    }


    public function Asistencia()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            $asistencia = new AsistenciaModel();
            $asistencia2 = new AsistenciaModel();
            $datos = new AsistenciaModel();

            $datos->id_profesor = $_SESSION['user_id'];
            $datos->id_grupo = $_REQUEST['grupo'];
            $datos->id_horario = $_REQUEST['salon'];
            $datos->fecha = $_REQUEST['fecha'];

            $asistencia = $this->AsistenciaModel->VerAsistencia($datos);
            $asistencia2 = $this->AsistenciaModel->VerCamposSeleccionados($datos);

            require('view/asistencia.php');
        }
    }

    public function OpcionesAsistencia()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            $asistencia = new AsistenciaModel();

            $asistencia = $this->AsistenciaModel->VerGrupo($_SESSION['user_id']);

            require('view/opciones_asistencia.php');
        }
    }

    public function OpcionesAsistencia2()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            $asistencia = new AsistenciaModel();

            $asistencia->id_profesor = $_SESSION['user_id'];
            $asistencia->id_grupo = $_REQUEST['grupo'];

            $fecha = $this->AsistenciaModel->VerFecha($asistencia);
            $salon = $this->AsistenciaModel->VerSalon($asistencia);

            
            require('view/opciones_asistencia2.php');
        }
    }

    public function GuardarObservaciones()
    {
        $asistencia = new AsistenciaModel();

        $asistencia->observaciones = $_REQUEST['observaciones'];
        $asistencia->id_asist = $_GET['id_asist'];

        $asistencia->id_profesor = $_SESSION['user_id'];
        $asistencia->id_grupo = $_REQUEST['grupo'];
        $asistencia->id_salon = $_REQUEST['salon'];
        $asistencia->fecha = $_REQUEST['fecha'];

        $this->resp = $this->AsistenciaModel->guardarobservaciones($asistencia);
        header('Location: ?op=vasistencia&msg=' . $this->resp);
    }

    public function Horario()
    {
        if ($_SESSION['acceso'] != true) {
            require('view/login.php');
        } else {
            $hora = new Horario();
            $lunes = new Horario();
            $martes = new Horario();
            $miercoles = new Horario();
            $jueves = new Horario();
            $viernes = new Horario();
            $sabado = new Horario();

            $data = new Horario();
            $data->id_profesor = $_SESSION['user_id'];

            $hora = $this->horarioModel->ObtenerHoras($data);
            $lunes = $this->horarioModel->ObtenerLunes($data);
            $martes = $this->horarioModel->ObtenerMartes($data);
            $miercoles = $this->horarioModel->ObtenerMiercoles($data);
            $jueves = $this->horarioModel->ObtenerJueves($data);
            $viernes = $this->horarioModel->ObtenerViernes($data);
            $sabado = $this->horarioModel->ObtenerSabado($data);

            require('view/horario.php');
        }
    }

    public function Login()
    {
        require('view/login.php');
    }

    public function Actualizarcontrasena()
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
            $producto = $this->SolicitudModel->Productos();
            $datos = $this->SolicitudModel->ObtenerCorreo($_SESSION['user_id']);
            $salon = $this->SolicitudModel->Salon($_SESSION['user_id']);

            require('view/solicitud.php');
        }
    }

    public function EnviarSolicitud()
    {
        date_default_timezone_set('America/Panama');

        $solicitud = new Solicitud();

        $solicitud->producto = $_REQUEST['producto'];
        $solicitud->salon = $_REQUEST['salon'];
        $solicitud->cantidad = $_REQUEST['cantidad'];
        $solicitud->id_profesor = $_SESSION['user_id'];
        $solicitud->fecha_s = date("Y-m-d H:i:s");
        $solicitud->estado = "Solicitado";

        $resp = $this->SolicitudModel->ValidarCantidad($_REQUEST['producto']);

        if ($_REQUEST['cantidad'] <= $resp->cantidad) {
            $solicitud->id_inventario = $resp->id;
            $this->SolicitudModel->EnviarSolicitud($solicitud);
            header('Location: ?op=vsolicitud&msg=Solicitud realizada exitosamente&t=text-success');
        } else {
            header('Location: ?op=vsolicitud&msg=La cantidad solicitada no se encuentra disponible&t=text-danger');
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
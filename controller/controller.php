<?php
session_start();

include 'model/LoginModel.php';
include 'model/HorarioModel.php';

class Controller
{

    private $pdo;

    private $LoginModel;
    private $horarioModel;
    private $horarioModel1;
    private $horarioModel2;
    private $horarioModel3;
    private $horarioModel4;

    public function __construct()
    {
        $this->LoginModel = new LoginModel();
        $this->horarioModel = new Horario();
        $this->horarioModel1 = new Horario();
        $this->horarioModel2 = new Horario();
        $this->horarioModel3 = new Horario();
        $this->horarioModel4 = new Horario();
        
    }

    public function Asistencia()
    {
        if($_SESSION['acceso'] != true){
            require('view/login.php');
        }else{
            require('view/asistencia.php');
        }
    }

    public function Horario()
    {
        if($_SESSION['acceso'] != true){
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

            require('view/horario.php');
        }
    }

    public function Login()
    {
        require('view/login.php');
    }

    public function Perfil()
    {
        if($_SESSION['acceso'] != true){
            require('view/login.php');
        }else{
            require('view/perfil.php');
        }
    }

    public function Principal()
    {
        if($_SESSION['acceso'] != true){
            require('view/login.php');
        }else{
            require('view/principal.php');
        }
    }

    public function Recuperar()
    {
        require('view/recuperar.php');
    }

    public function Solicitud()
    {
        if($_SESSION['acceso'] != true){
            require('view/login.php');
        }else{
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

    public function CerrarSesion(){
        @session_destroy();
        require('view/login.php');
    }
}

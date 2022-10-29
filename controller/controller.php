<?php
session_start();

include 'model/LoginModel.php';
include 'model/PerfilModel.php';
include 'model/AsistenciaModel.php';

class Controller
{

    private $pdo;

    private $LoginModel;
    private $Perfilmodel;
    private $AsistenciaModel;

    public function __construct()
    {
        $this->LoginModel = new LoginModel();        
        $this->Perfilmodel = new Perfilmodel(); 
        $this->AsistenciaModel = new AsistenciaModel();
    }

    public function Asistencia()
    {
        if($_SESSION['acceso'] != true){
            require('view/login.php');
        }else{
            
            $AsistenciaData = new AsistenciaModel();
            $resp = new AsistenciaModel();

            $AsistenciaData->id_profesor = $_SESSION['user_id'];
    
            $resp = $this->AsistenciaModel->mostrarDatosEstudiantes($AsistenciaData);
            $resp2 = $this->AsistenciaModel->mostrarDatosAsistencia($AsistenciaData);
            $resp3 = $this->AsistenciaModel->mostrarDatosHorario($AsistenciaData);
        
            require('view/asistencia.php');
        }
    }

    public function Horario()
    {
        if($_SESSION['acceso'] != true){
            require('view/login.php');
        }else{
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
            
            
            $PerfilData = new Perfilmodel();
            $resp = new Perfilmodel();

            $PerfilData->id_profesor = $_SESSION['user_id'];
    
            $resp = $this->Perfilmodel->VerPerfil($PerfilData) ;
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

<?php

class Controller{

    public function Asistencia(){
        require('view/asistencia.php');
    }

    public function Horario(){
        require('view/horario.php');
    }

    public function Login(){
        require('view/login.php');
    }

    public function Perfil(){
        require('view/perfil.php');
    }

    public function Principal(){
        require('view/principal.php');
    }

    public function Recuperar(){
        require('view/recuperar.php');
    }

    public function Solicitud(){
        require('view/solicitud.php');
    }

    public function Error(){
        require('view/404.php');
    }

    public function Index(){
        require('view/login.php');
    }

}

?>
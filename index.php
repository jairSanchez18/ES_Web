<?php

require('./controller/controller.php');

$controller = new Controller;

if(isset($_GET['op'])){
    $opcion = $_GET['op'];

    if($opcion == "vasistencia"){
        $controller->Asistencia();
    }else if ($opcion == "vhorario"){
        $controller->Horario();
    }else if ($opcion == "vlogin"){
        $controller->Login();
    }else if ($opcion == "vperfil"){
        $controller->Perfil();
    }else if ($opcion == "vprincipal"){
        $controller->Principal();
    }else if ($opcion == "vrecuperar"){
        $controller->Recuperar();
    }else if ($opcion == "vsolicitud"){
        $controller->Solicitud();
    }else{
        $controller->Error();
    }
}else{
    $controller->Index();
}



<?php

require('./controller/controller.php');

$controller = new Controller;

if (isset($_GET['op'])) {
    $opcion = $_GET['op'];

    if ($opcion == "vasistencia") {
        $controller->Asistencia();
    } else if ($opcion == "vopcionesasistencia") {
        $controller->OpcionesAsistencia();
    } else if ($opcion == "vopcionesasistencia2") {
        $controller->OpcionesAsistencia2();
    } else if ($opcion == "guardarobservaciones") {
        $controller->GuardarObservaciones();
    } else if ($opcion == "vhorario") {
        $controller->Horario();
    } else if ($opcion == "vlogin") {
        $controller->Login();
    } else if ($opcion == "vperfil") {
        $controller->Perfil();
    } else if ($opcion == "vprincipal") {
        $controller->Principal();
    } else if ($opcion == "vrecuperar") {
        $controller->Recuperar();
    } else if ($opcion == "vsolicitud") {
        $controller->Solicitud();
    } else if ($opcion == "enviarsolicitud") {
        $controller->EnviarSolicitud();
    } else if ($opcion == "validar") {
        $controller->ValidarLogin();
    } else if ($opcion == "vperfila") {
        $controller->PerfilA();
    } else if ($opcion == "vcontrasena") {
        $controller->Actualizarcontrasena();
    } else if ($opcion == "vsalir") {
        $controller->CerrarSesion();
    } else {
        $controller->Error();
    }
} else {
    $controller->Index();
}
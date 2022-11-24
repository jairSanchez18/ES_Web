<?php

require('./controller/controller.php');

$controller = new Controller;

if (isset($_GET['op'])) {
    $opcion = $_GET['op'];

    if ($opcion == md5("vasistencia")) {
        $controller->Asistencia();
    } else if ($opcion == md5("vopcionesasistencia")) {
        $controller->OpcionesAsistencia();
    } else if ($opcion == md5("vopcionesasistencia2")) {
        $controller->OpcionesAsistencia2();
    } else if ($opcion == md5("guardarobservaciones")) {
        $controller->GuardarObservaciones();
    } else if ($opcion == md5("vhorario")) {
        $controller->Horario();
    } else if ($opcion == "vlogin") {
        $controller->Login();
    } else if ($opcion == md5("vperfil")) {
        $controller->Perfil();
    } else if ($opcion == md5("vprincipal")) {
        $controller->Principal();
    } else if ($opcion == "vrecuperar") {
        $controller->Recuperar();
    }else if ($opcion == "recuperarcontrasena") {
        $controller->ValidarRecuperacion();
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
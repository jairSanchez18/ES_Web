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
    } else if ($opcion == md5 ("vlogin")) {
        $controller->Login();
    } else if ($opcion == md5 ("vperfil")) {
        $controller->Perfil();
    } else if ($opcion == md5("vprincipal")) {
        $controller->Principal();
    } else if ($opcion == md5 ("vrecuperar")) {
        $controller->Recuperar();
    }else if ($opcion == md5 ("recuperarcontrasena")) {
        $controller->ValidarRecuperacion();
    } else if ($opcion == md5 ("vsolicitud")) {
        $controller->Solicitud();
    } else if ($opcion == md5 ("enviarsolicitud")) {
        $controller->EnviarSolicitud();
    } else if ($opcion == md5 ("validar")) {
        $controller->ValidarLogin();
    } else if ($opcion == md5 ("vperfila")) {
        $controller->PerfilA();
    } else if ($opcion == md5 ("vcontrasena")) {
        $controller->Actualizarcontrasena();
    } else if ($opcion == md5 ("vsalir")) {
        $controller->CerrarSesion();
    } else {
        $controller->Error();
    }
} else {
    $controller->Index();
}
<?php
//iniciar sesion
session_start();

//verificar si la variable de sesion existe
if(!isset($_SESSION['id_user'])){
    header("Location: index.php");
}

//aquí va la ruta de conexion
//include("conexion.php");

//aquí se asignara el id del usuario logueado
$iduser = $_SESSION['id_user'];

//consulta a la BD
$sql = "SELECT * FROM profesor WHERE id = '$iduser'";

$resultado = $conexion->query($sql);

//la variable row hara el recorrido a las filas de la tabla profesor
$row = $resultado->fetch_assoc();

?>
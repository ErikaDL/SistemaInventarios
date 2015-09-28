<?php
session_start();
require_once './includes/funciones.php';
conexionDB();

$correo = filtrarEntrada($_POST['correo']);
$pass = filtrarEntrada($_POST['pass']);

$validarLogin = validarPassword($pass,$correo);

if($validarLogin){
	$_SESSION['CORREO'] = $correo;
	$_SESSION['PASSWORD'] = $pass;
	header("Location: ./inicio/");
}else{
	header("Location: ./login/?e=1");
}
?>
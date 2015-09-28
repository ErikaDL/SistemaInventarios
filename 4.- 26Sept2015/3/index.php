<?php
session_start();
require_once './includes/funciones.php';
conexionDB();

$checarSessionDeLogin = validarSession($_SESSION);

if($checarSessionDeLogin){
	header("Location: ./inicio/");
}else{
	header("Location: ./login/");
}

?>
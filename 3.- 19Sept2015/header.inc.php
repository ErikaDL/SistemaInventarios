<?php
session_start();
require_once '../includes/funciones.php';
conexionDB();
$login = validarSession($_SESSION);
if(!$login){
	header("Location: ../login/");
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Inventarios</title>
</head>
<body>